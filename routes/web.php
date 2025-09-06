<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
}); 
Route::get('/categories/create', [CategoryController::class, 'index']);
Route::post('/categories/store', [CategoryController::class, 'store']);

// product
Route::get('/products', [ProductController::class, 'index']); // list produk
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);

//customer
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers/store', [CustomerController::class, 'store']);
Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{id}', [CustomerController::class, 'update']);