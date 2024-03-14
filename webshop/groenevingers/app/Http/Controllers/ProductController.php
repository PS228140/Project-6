<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);

        $chart_options = [
            'chart_title' => 'Users by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_color' => '10,52,99',
            'chart_type' => 'bar',
            'chart_height' => '400px',
            'show_blank_data' => 'true',
        ];

        $chart_options2 = [
            'chart_title' => 'Users by mcnths',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_color' => '10,52,99',
            'chart_type' => 'line',
        ];

        $chart1 = new LaravelChart($chart_options);
        $chart2 = new LaravelChart($chart_options2);

        return view('products.index')
            ->with('products', $products)
            ->with('chart1', $chart1)
            ->with('chart2', $chart2);  
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
