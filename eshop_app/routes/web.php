<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Http\Controllers\AuthController;

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

Route::resource('profile', UserController::class);
/* Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');
Route::resource('admin_profile', UserController::class);
 */

// Autentifikačné routy
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/krmivo', function () {
    $products = Product::where('category_id', 2)->get();
    return view('krmivo')->with('products', $products);
});

Route::get('/product_detail', function () {
    $product = Product::find(0); // Example product ID
    return view('product_detail')->with('product', $product);
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/shopping_cart1', function () {
    return view('shopping_cart1');
});

Route::get('/shopping_cart2', function () {
    return view('shopping_cart2');
});

Route::get('/shopping_cart3', function () {
    return view('shopping_cart3');
});

Route::get('/stores', function () {
    return view('stores');
});

Route::get('/thanks_for_purchase', function () {
    return view('thanks_for_purchase');
});

Route::get('/vybavenie', function () {
    $products = Product::where('category_id', 1)->get();
    return view('vybavenie')->with('products', $products);
});

Route::get('/vyrobky', function () {
    $products = Product::where('category_id', 4)->get();
    return view('vyrobky')->with('products', $products);
});

Route::get('/zdravie', function () {
    $products = Product::where('category_id', 3)->get();
    return view('zdravie')->with('products', $products);
});

Route::get('product_detail/{id}', [ProductController::class, 'show'])->name('product.detail');











