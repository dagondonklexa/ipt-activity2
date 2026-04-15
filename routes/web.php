<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class,"index"]);

Route::resource('categories', CategoryController::class)->only([
    'index', 'create', 'store'
]);

Route::resource('products', ProductController::class)->except(['show']);