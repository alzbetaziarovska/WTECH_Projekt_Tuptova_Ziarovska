<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::resource('admin_profile', UserController::class);

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
    return view('krmivo');
});

Route::get('/product_detail', function () {
    return view('product_detail');
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
    return view('vybavenie');
});

Route::get('/vyrobky', function () {
    return view('vyrobky');
});

Route::get('/zdravie', function () {
    return view('zdravie');
});










