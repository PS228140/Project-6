<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderrow;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Propaganistas\LaravelPhone\Rules\Phone;

class OrderManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('ordermanagement.index', ["orders" => $orders]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::with('Orderrow')->find($id);
        return view('ordermanagement.show', ["order" => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::with('Orderrow')->find($id);
        return view('ordermanagement.edit', ["order" => $order]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyOrderRow(string $id, string $orderId)
    {
        $orderrow = Orderrow::find($id);

        $order = Order::find($orderId);
        $order->price = $order->price - $orderrow->price;
        $order->updated_at = Carbon::now();
        $order->save();

        Orderrow::destroy($id);
        return redirect()->route('orders.edit', ["order" => $orderId]);
    }

    /**
     * Update the state of an order
     * 
     * @param int $id id of the current state
     * @param int $orderId id of the order that should be updated
     */
    public function updateStatus(int $id, int $orderId)
    {
        if ($id <= 4) {
            $statusId = $id + 1;
        } else {
            return redirect()->route('orders.edit', ["order" => $orderId]);
        }

        $order = Order::find($orderId);
        $order->status_id = $statusId;
        $order->updated_at = Carbon::now();
        $order->save();

        return redirect()->route('orders.edit', ["order" => $orderId]);
    }

    /**
     * Update the state of an order
     * 
     * @param int $id id of the current state
     * @param int $orderId id of the order that should be updated
     */
    public function rollbackStatus(string $id, string $orderId)
    {
        if($id > 1) {
            $statusId = $id - 1;
        } else {
            return redirect()->route('orders.edit', ["order" => $orderId]);
        }

        $order = Order::find($orderId);
        $order->status_id = $statusId;
        $order->updated_at = Carbon::now();
        $order->save();

        return redirect()->route('orders.edit', ["order" => $orderId]);
    }

    /**
     * Update the state of an order to `canceled`
     */
    public function cancelOrder(string $id)
    {
        $order = Order::find($id);
        $order->status_id = 6;
        $order->updated_at = Carbon::now();
        $order->save();

        return redirect()->route('orders.edit', ["order" => $id]);
    }

    /**
     * Sort the orders and return them
     * 
     * @param string $key name of the column to sort the orders by
     */
    public function sortOrders($key)
    {
        if ($key === "customer_name") {
            $orders = Order::orderBy($key, 'asc')->get();
        } elseif ($key === "created_at") {
            $orders = Order::orderBy($key, 'desc')->get();
        } elseif ($key === "price") {
            $orders = Order::orderBy($key, 'desc')->get();
        } elseif ($key === "items") {
            $orders = Order::withCount('Orderrow')->orderBy('orderrow_count', 'desc')->get();
        } elseif ($key === "state_id") {
            $orders = Order::orderBy($key, 'asc')->get();
        } else {
            $orders = Order::orderBy('created_at', 'desc')->get();
        }
        return view('ordermanagement.index', ["orders" => $orders]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateOrderInformation(Request $request, string $orderId)
    {
        $validatedData = $request->validate([
            "customer_name" => "string|max:255",
            "email" =>  "email|max:255",
            "phone" => [new Phone('NL', 'BE', 'FR', 'DE')],
            "zipcode" => "string|max:255",
            "address" => "string|max:255",
            "city" => "string|max:255",
            "price" => "string|max:255"
        ]);

        $order = Order::find($orderId);
        $order->customer_name = $validatedData["customer_name"];
        $order->email = $validatedData["email"];
        $order->phone = $validatedData["phone"];
        $order->zipcode = $validatedData["zipcode"];
        $order->address = $validatedData["address"];
        $order->city = $validatedData["city"];
        $order->price = $validatedData["price"];
        $order->save();

        return redirect()->route("orders.show", ['order' => $orderId]);
    }
}
