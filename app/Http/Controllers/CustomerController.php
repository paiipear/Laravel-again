<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $customers = Customer::all();
       return view('Customers.index',[
        'title'=> 'List Customer', 'customers' => $customers ,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $customers = Customer::all();
         return view('customers.create', [
            'title' => 'Create customers', 'customers' => $customers
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          Customer::create(
            [
                'name' => $request->name , //sesuaikan dengan name yang ada di form
                'phone' => $request->phone , //sesuaikan dengan name yang ada di form
                'address' => $request->address  //sesuaikan dengan name yang ada di form
               
            ]
        );
        return redirect('/customers')->with('success', 'Customer created successfully!');
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
     $customers = Customer::find($id);
        if(!$customers){
            return redirect('/customers')->with('error', 'customers not found ');
        }
        return view('customers.edit', ['title' => 'Edit customers ', 'customers' => $customers,]);
  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $customers = Customer::find($id);
        if(!$customers){
            return redirect('/customers')->with('error', 'customers not found ');
        } 
        $data = $request->only(['name', 'phone', 'address']);
        $customers->update($data);
        return redirect('/customers')->with('success', 'customers updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $customers = Customer::find($request->id);
        if($customers){
            $customers->delete();
            return redirect('/customers')->with('success', 'Product deleted successfully!');
        } else {
            return redirect('/customers')->with('error', 'Product not found.');
        }
    }
}
