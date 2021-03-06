<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Cart;
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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('audesk.categories');
});*/
Route::get('/product/{slug}', App\Http\Livewire\Product::class)->name('product');
Route::get('/',[\App\Http\Controllers\FrontController::class,'catalogGrid'])->name ('catalog');
Route::get('/category/{slug}',[\App\Http\Controllers\FrontController::class,'productInCategoryGrid'])->name('productInCategoryGrid');

Route::get('/contact',[\App\Http\Controllers\FrontController::class,'contact'])->name('contact');
Route::get('/about',[\App\Http\Controllers\FrontController::class,'about'])->name('about');

Route::get('/single-product/{slug}',[\App\Http\Controllers\ProductController::class,'singleProduct'])->name('single-product');
Route::get('/cart',[\App\Http\Controllers\CartController::class,'index'])->name('cart');

Route::get('/add-to-cart/{id}',[\App\Http\Controllers\CartController::class,'add'])->name('add-to-cart');
Route::get('notification', Cart::class);
Route::view('/livewire', 'livewire');
