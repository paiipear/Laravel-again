<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
Route::post('/categories/create', [CategoryController::class, 'store']);

// product
Route::get('/products', [ProductController::class, 'index']); // list produk
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/store', [ProductController::class, 'store']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);