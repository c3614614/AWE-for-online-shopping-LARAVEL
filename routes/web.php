<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\product;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('home');


Route::get('/products', [ProductController::class, 'index'])->name('product');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('show');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

//Route::get('/products/create', [ProductController::class, 'product-form'])->middleware('can:create, App\Models\Product')->name('product-form');




Route::get('/product/create', [ProductController::class, 'create'])->middleware('can:create, App\Models\Product')->name('create');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); #this line tells laravel to only display the route if user is authenticated

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

