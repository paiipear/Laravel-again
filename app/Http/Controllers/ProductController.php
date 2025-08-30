<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $products = Product::all();
         return view('products.index', [
            'title' => 'List Product', 'products' => $products , compact('products')
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $products = Product::all();
         return view('products.create', [
            'title' => 'Create Product', 'products' => $products , 
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Product::create(
            [
                'name' => $request->name , //sesuaikan dengan name yang ada di form
                'description' => $request->description , //sesuaikan dengan name yang ada di form
                'categoryName' => $request->categoryName , //sesuaikan dengan name yang ada di form
                'price' => $request->price, //sesuaikan dengan name yang ada di form
                'image' => $path = $request->file('image')->store('images', 'public') //sesuaikan dengan name yang ada di form
            ]
        );
        return redirect('/products/create')->with('success', 'Category created successfully!');
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
}
