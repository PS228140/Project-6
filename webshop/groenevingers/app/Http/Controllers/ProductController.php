<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view("products.index", ["products" => $products]);
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
        $product = Product::find($id);
        $categories = Categorie::all();

        return view("products.edit", [
            "product" => $product,
            "categories" => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "description" => "required|string",
            "price" => "required",
            "image" => "required",
        ]);

        Storage::disk("public")->put("products", $request->file("image"));

        $product = Product::findOrFail($id);

        $product->update([
            "name" => $request->input("name"),
            "description" => $request->input("description"),
            "price" => $request->input("price"),
            "img_src" =>
                "storage/products/" . $request->file("image")->hashName(),
            "categorie_id" => $request->category,
            "color" => $request->input("color"),
            "height_cm" => $request->input("height"),
            "width_cm" => $request->input("width"),
            "depth_cm" => $request->input("depth"),
            "weight_gr" => $request->input("weight"),
            "updated_at" => Carbon::now(),
        ]);

        $product->save();

        return redirect()->route("products.edit", ["product" => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()
            ->route("products.index")
            ->with("succes", "Product Succesfully deleted");
    }
}