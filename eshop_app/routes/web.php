<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/register', [UserController::class, 'create'])->name('register.form');
Route::post('/register', [UserController::class, 'store'])->name('register.store');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.store');
Route::post('/logout', [UserController::class, 'logout'])->name('logout'); // Nová routa
Route::resource('profile', UserController::class);
Route::resource('admin_profile', UserController::class);

Route::get('/', fn() => view('homepage'));
Route::get('/homepage', fn() => view('homepage'));
Route::get('/about', fn() => view('about'));
Route::get('/krmivo', fn() => view('krmivo')->with('products', Product::where('category_id', 2)->get()));
Route::get('/product_detail', fn() => view('product_detail')->with('product', Product::find(0)));
Route::get('/shop', fn() => view('shop'));
Route::get('/shopping_cart1', fn() => view('shopping_cart1'));
Route::get('/shopping_cart2', fn() => view('shopping_cart2'));
Route::get('/shopping_cart3', fn() => view('shopping_cart3'));
Route::get('/stores', fn() => view('stores'));
Route::get('/thanks_for_purchase', fn() => view('thanks_for_purchase'));
Route::get('/vybavenie', fn() => view('vybavenie')->with('products', Product::where('category_id', 1)->get()));
Route::get('/vyrobky', fn() => view('vyrobky')->with('products', Product::where('category_id', 4)->get()));
Route::get('/zdravie', fn() => view('zdravie')->with('products', Product::where('category_id', 3)->get()));
Route::get('product_detail/{id}', [ProductController::class, 'show'])->name('product.detail');