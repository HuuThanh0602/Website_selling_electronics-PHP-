<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestsController;
use App\Http\Middleware\CheckAdmin;

Route::get('/', [GuestsController::class, 'index'])->name('welcome');
Route::get('/introduction', [GuestsController::class, 'introduction'])->name('introduction');

Route::get('/products', [GuestsController::class, 'products'])->name('products');
Route::get('/detail', [ProductsController::class, 'show'])->name('products.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/cart/{product}', [GuestsController::class, 'add'])->name('cart.add');
    Route::get('/cart/remove/{id}', [GuestsController::class, 'removeFromCart'])->name('cart.remove');
});

Route::middleware([CheckAdmin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
   
    Route::get('/load-products', [AdminController::class, 'loadProducts']);
    Route::get('/add-products', [AdminController::class, 'createproduct']);

    Route::get('/edit-products/{id}', [AdminController::class, 'editproduct'])->name('products.edit');
    Route::put('/admin/edit-products/{id}', [AdminController::class, 'updateproduct'])->name('products.update');

    Route::post('/store-products', [AdminController::class, 'storeproduct'])->name('products.store');
    Route::delete('/products/{id}', [AdminController::class, 'destroyproduct'])->name('products.destroy');



    Route::get('/load-articles', [AdminController::class, 'loadArticles']);

    Route::get('/add-articles', [AdminController::class, 'createarticle']);
    Route::post('/store-articles', [AdminController::class, 'storearticle'])->name('articles.store');

    Route::get('/edit-articles/{id}', [AdminController::class, 'editarticle'])->name('articles.edit');
    Route::put('/admin/edit-articles/{id}', [AdminController::class, 'updatearticle'])->name('articles.update');

    Route::delete('/articles/{id}', [AdminController::class, 'destroyarticle'])->name('articles.destroy');
});

require __DIR__.'/auth.php';
