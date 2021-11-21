<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pos', ['catalog' => ['categories' => Category::with('products')->get()]]);
});

Route::get('/products', function() {
    return Product::with('category')->get();
});

Route::get('/categories', function() {
    return Category::with('products')->get();
});
