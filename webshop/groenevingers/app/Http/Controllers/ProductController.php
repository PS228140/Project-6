<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index')
            ->with('products', $products);
    }

    public function show(string $id): View
    {
        return view('products.show', [
            'products' => Product::findOrFail($id),
        ]);
    }

    public function create()
    {
        return View::make('products.create');
    }

    public function update()
    {
        $rules = [
            'name' => 'required',
            'categorie' => 'required',
            'description' => 'required',
            'price' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('products/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $product = product::find($id);
            $product->name = Input::get('name');
            $product->categorie = Input::get('categorie');
            $product->description = Input::get('description');
            $product->price = Input::get('price');
            $product->save();

            Session::flash('message', 'Artikel is succesvol geüpdate!');

            return Redirect::to('products');
        }
    }

    public function store(Request $request): RedirectResponse
    {
        $name = $request->name;
        $categorie = $request->categorie;
        $description = $request->description;
        $price = $request->price;

        return redirect('/products');
    }

    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();

        Session::flash('message', 'Succesvol het artikel verwijdert!');

        return Redirect::to('products.index');
    }
}
