<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view ('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3' , 'max:255'],    
            'price' => ['required', 'numeric' , 'min:1'],
            'category_id' => ['required']
        ],
        [
            "category_id.required" => "The category field is required."
        ]
        );

        Product::create($request->all());

        return redirect()->route('products.index')
                     ->with('success', 'Product added successfully');
    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required'
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                     ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                     ->with('success', 'Product deleted successfully');
    }
}