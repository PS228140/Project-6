<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withToken("50|Oy8mM3g2A8jSTpiHoxrRXXdspGlvQHbbQ45qM272")->get("https://kuin.summaict.nl/api/product");
        $response = $response->json();

        return view('management.index', ["products" => $response]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Http::withToken("50|Oy8mM3g2A8jSTpiHoxrRXXdspGlvQHbbQ45qM272")->get("https://kuin.summaict.nl/api/product");
        $products = $products->json();

        return view('management.create', ["products" => $products, "order_id" => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if ($request->order_id) {
        //     dd([$request->product, $request->quantity, $request->order_id]);
        // } else {
        //     dd([$request->product, $request->quantity]);
        // }

        return redirect()->route('management.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response = Http::withToken("50|Oy8mM3g2A8jSTpiHoxrRXXdspGlvQHbbQ45qM272")->get("https://kuin.summaict.nl/api/product/" . $id);

        return view('management.show', ["product" => $response]);
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
