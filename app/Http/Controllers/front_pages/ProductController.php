<?php

namespace App\Http\Controllers\front_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $movies = Product::all();
        // return view('products.index', compact('products'));
        return view('products.index');
    }

    public function create() {
        // return view('products.create');
    }

    public function store(Request $request) {
        // $productData = $request->validate([
        //     'product_name' => ['required', 'string', 'min:1', 'max:50'],
        //     'price' => ['required', 'float'],
        //     'description' => ['nullable', 'string'],
        //     'image_url' => ['nullable', 'string'],
        // ]);

        // Product::create($productData);
        // return redirect('/products');
    }

    public function show(string $id)
    {
    }
 
    // editiert einen Datensatz
    public function edit() {}
    public function update() {}
 
    // löscht einen Datensatz
    public function destroy() {}
 
}
