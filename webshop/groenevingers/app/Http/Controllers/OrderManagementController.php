<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderrow;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('ordermanagement.index', ["orders" => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
     */
    public function updateState(string $id, string $orderId)
    {
        if ($id <= 4) {
            $stateId = $id + 1;
        } else {
            return redirect()->route('orders.edit', ["order" => $orderId]);
        }

        $order = Order::find($orderId);
        $order->state_id = $stateId;
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
        $order->state_id = 6;
        $order->updated_at = Carbon::now();
        $order->save();

        return redirect()->route('orders.edit', ["order" => $id]);
    }
}
