<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
         return view('products.index', [
            'title' => 'List Product', 'products' => $products 
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $products = Product::all();
         return view('products.create', [
            'title' => 'Create Product', 'products' => $products
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
        return redirect('/products')->with('success', 'Category created successfully!');
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
        if(!$product){
            return redirect('/products')->with('error', 'Product not found ');
        }
        return view('products.edit', ['title' => 'Edit Product ', 'product' => $product,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        if(!$product){
            return redirect('/products')->with('error', 'Product not found ');
        } 
        $data = $request->only(['name', 'description', 'categoryName', 'price']);
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('products', 'public');
            if($product->image){
                Storage::disk('public')->delete($product->image);

            }
        }
        $product->update($data);
        return redirect('/products')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $products = Product::find($request->id);
        if($products){
            $products->delete();
            return redirect('/products')->with('success', 'Product deleted successfully!');
        } else {
            return redirect('/products')->with('error', 'Product not found.');
        }
    }
}
