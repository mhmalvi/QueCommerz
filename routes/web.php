<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('quecommerz');
Route::get('/{product}', 'ProductController@view')->name('item');

Route::view('/shop', 'pages.shop')->name('shop');
Route::view('/shop/{category}', 'pages.shop')->name('shop_by_category');
Route::view('/cart', 'pages.cart')->name('cart');
Route::view('/checkout', 'pages.checkout')->name('checkout');
Route::view('/track-my-order', 'pages.track')->name('track');
Route::view('wishlist', 'pages.wishlist')->name('wishlist');
Route::view('recently-viwed-by-you', 'pages.recent-views')->name('recent');
Route::view('product', 'pages.item')->name('product');
Route::view('order', 'pages.order-confirm')->name('order');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
