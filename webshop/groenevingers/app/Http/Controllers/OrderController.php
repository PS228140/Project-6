<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderrow;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $order->save();
        
        $cookie = cookie('order_id', $newOrderId, 120);

        return redirect()->route('order.index')->cookie($cookie);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

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
}
