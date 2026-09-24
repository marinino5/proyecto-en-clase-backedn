<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| ECOVOLT - INICIO
|--------------------------------------------------------------------------
*/

Route::get('/', HomeController::class);


/*
|--------------------------------------------------------------------------
| ECOVOLT - CONSULTA PÚBLICA
|--------------------------------------------------------------------------
*/

Route::get(
    '/products',
    [ProductController::class, 'index']
)->name('products.index');


/*
|--------------------------------------------------------------------------
| ECOVOLT - GESTIÓN INTERNA
|--------------------------------------------------------------------------
| Todas estas rutas requieren iniciar sesión.
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get(
        '/products/manage',
        [ProductController::class, 'manage']
    )->name('products.manage');


    Route::get(
        '/products/create',
        [ProductController::class, 'create']
    )->name('products.create');


    Route::post(
        '/products',
        [ProductController::class, 'store']
    )->name('products.store');


    Route::get(
        '/products/{product}/edit',
        [ProductController::class, 'edit']
    )->name('products.edit');


    Route::put(
        '/products/{product}',
        [ProductController::class, 'update']
    )->name('products.update');


    Route::delete(
        '/products/{product}',
        [ProductController::class, 'destroy']
    )->name('products.destroy');

});


/*
|--------------------------------------------------------------------------
| ECOVOLT - DETALLE PÚBLICO
|--------------------------------------------------------------------------
*/

Route::get(
    '/products/{product}',
    [ProductController::class, 'show']
)->name('products.show');


/*
|--------------------------------------------------------------------------
| BREEZE - DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return redirect()->route('products.manage');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| BREEZE - PERFIL
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get(
        '/profile',
        [ProfileController::class, 'edit']
    )->name('profile.edit');


    Route::patch(
        '/profile',
        [ProfileController::class, 'update']
    )->name('profile.update');


    Route::delete(
        '/profile',
        [ProfileController::class, 'destroy']
    )->name('profile.destroy');

});


/*
|--------------------------------------------------------------------------
| BREEZE - AUTENTICACIÓN
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';