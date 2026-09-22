<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class); // landing de su ecommerce

Route::prefix('product')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index'); // muestre listado de productos
    Route::get('/create', 'create'); // formulario crear un producto
    Route::get('/{idProduct}', 'show'); // el detalle de un producto
});

//todo apuntando al mismo css ubicado en la carpeta public styles.css
