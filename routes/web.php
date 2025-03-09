<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('products', ProductController::class);

Route::resource('product-categories', ProductCategoryController::class);
