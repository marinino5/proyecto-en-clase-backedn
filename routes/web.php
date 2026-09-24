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
| ECOVOLT - PRODUCTOS
|--------------------------------------------------------------------------
| Por ahora permanecen sin middleware.
| La protección con auth se hará en el Paso 5 del taller.
|--------------------------------------------------------------------------
*/

Route::get(
    '/products/manage',
    [ProductController::class, 'manage']
)->name('products.manage');

Route::resource('products', ProductController::class);


/*
|--------------------------------------------------------------------------
| BREEZE - DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
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


require __DIR__.'/auth.php';