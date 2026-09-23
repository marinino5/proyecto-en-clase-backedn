<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get(
    '/products/manage',
    [ProductController::class, 'manage']
)->name('products.manage');

Route::resource('products', ProductController::class);