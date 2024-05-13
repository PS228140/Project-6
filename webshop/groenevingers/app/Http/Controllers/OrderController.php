<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderrow;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cookie = cookie('order_id', 1, 120);
        return response('The cookie has been created!')->cookie($cookie);
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
            "product_price" => 'required'
        ]);

        if ($cookie === null) {
            $newOrderId = Order::insertGetId(['state_id' => 1]);
        } else {
            $newOrderId = $cookie;
        }

        $newOrderRow = new Orderrow();
        $newOrderRow->order_id = $newOrderId;
        $newOrderRow->product_id = $validatedData["product_id"];
        $newOrderRow->price = $validatedData["product_price"];
        $newOrderRow->save();
        
        $cookie = cookie('order_id', 1, 120);
        return redirect()->route('cart.index')->cookie($cookie);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order_id = request()->cookie('order_id');
        if ($order_id !== null) {
            echo 'order_id: '. $order_id;
        } else {
            echo 'no cookie detected!';
        }
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
