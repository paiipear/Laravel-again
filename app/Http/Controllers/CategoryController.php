<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //menampilkan fungsi index untuk menampilkan form create category
    public function index()
    {
        return view('categories.create', [
            'title' => 'Create Category'
        
        ]);
    }

   
    public function create()
    { 
        //
    }

 
    public function store(Request $request)
    {
        Category::create(
            [
                'name' => $request->categoryName //sesuaikan dengan name yang ada di form
            ]
        );
        return redirect('/categories/create')->with('success', 'Category created successfully!');
    }

   
    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
