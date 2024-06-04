<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderrow;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cookie = request()->cookie('order_id');
        $order = Order::with('Orderrow')->find($cookie);

        return view('cart', ["order" => $order]);
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
        $cookie = request()->cookie('order_id');

        $validatedData = $request->validate([
            "product_id" => 'required|integer',
            "product_price" => 'required',
            "quantity" => 'required|integer'
        ]);

        if ($cookie === null) {
            $newOrderId = Order::insertGetId(['state_id' => 1, 'created_at' => Carbon::now()]);
        } else {
            $newOrderId = $cookie;
        }

        $newOrderRow = new Orderrow();
        $newOrderRow->order_id = $newOrderId;
        $newOrderRow->product_id = $validatedData["product_id"];
        $newOrderRow->quantity = $validatedData["quantity"];
        $newOrderRow->price = $request->product_price * $request->quantity;
        $newOrderRow->save();

        $order = Order::find($newOrderId);
        $order->price = $order->price + $request->product_price * $request->quantity;
        $order->updated_at = Carbon::now();
        $order->save();
        
        $cookie = cookie('order_id', $newOrderId, 120);

        return redirect()->route('order.index')->cookie($cookie);
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
        //
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
     * Set all user information
     */
    public function setCustomerInformation(Request $request) 
    {
        $cookie = request()->cookie('order_id');

        /* add better validation */
        $validatedData = $request->validate([
            "fullName" => 'required',
            "email" => 'required',
            "phone" => 'required',
            "address" => 'required',
            "city" => 'required',
            "zipcode" => 'required',
        ]);

        $order = Order::find($cookie);
        $order->state_id = 2;
        $order->customer_name = $validatedData["fullName"];
        $order->email = $validatedData["email"];
        $order->phone = $validatedData["phone"];
        $order->address = $validatedData["address"];
        $order->city = $validatedData["city"];
        $order->zipcode = $validatedData["zipcode"];
        $order->save();

        Cookie::forget('order_id');
        
        return view('status', ['order' => $order]);
    }

    /*
    The function used to formulate all the Orders as JSON.
    */

    public function apiIndex()
    {
        $orders = Order::all();

        return response()->json($orders);
    }


    
    public function destroyOrderrow($id)
    {
        $orderrow = Orderrow::findOrFail($id);
        $order = Order::findOrFail($orderrow->order_id);

        // Update the total price of the order
        $order->price -= $orderrow->price;
        $order->save();

        // Delete the orderrow
        $orderrow->delete();

        return redirect()->route('order.index');
    }
}