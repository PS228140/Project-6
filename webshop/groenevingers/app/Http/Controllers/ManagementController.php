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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "api_id" => "required|integer",
            "name" => "required|string|max:255",
            "description" => "required|string",
            "price" => "required",
            "image" => "required",
            "color" => "required|string|max:255",
            "height_cm" => "required|string|max:5",
            "width_cm" => "required|string|max:5",
            "depth_cm" => "required|string|max:5",
            "weight_gr" => "required|string|max:10",
        ]);

        $newProduct = new Product();

        $newProduct->api_id = $validatedData["api_id"];
        $newProduct->name = $validatedData["name"];
        $newProduct->description = $validatedData["description"];
        $newProduct->price = $validatedData["price"];
        $newProduct->img_src = $validatedData["image"];
        $newProduct->color = $validatedData["color"];
        $newProduct->height_cm = $validatedData["height_cm"];
        $newProduct->width_cm = $validatedData["width_cm"];
        $newProduct->depth_cm = $validatedData["depth_cm"];
        $newProduct->weight_gr = $validatedData["weight_gr"];
        $newProduct->created_at = Carbon::now();
        $newProduct->updated_at = Carbon::now();

        $newProduct->save();

        return redirect()->route("management.index");
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
