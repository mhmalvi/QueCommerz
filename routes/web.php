<?php

use App\Http\Cart\Facades\Cart;
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
Route::get('/view/{product}', 'ProductController@view')->name('item');

Route::get('cart', 'CartController@index')->name('cart');
Route::get('mini-cart', 'CartController@minicart');
Route::name("cart.")->group(function () {
    Route::post('{product}/add-to-cart', 'CartController@store')->name("store");
    Route::get('{product}/remove-from-cart', 'CartController@remove')->name('remove');
});

Route::get("checkout", "CheckoutController@index")->name("checkout");
Route::post("checkout", "CheckoutController@checkout");
Route::get("order-confirm", "CheckoutController@confirm")->name("confirm");

Route::get("pay-via-paypal", "PaypalController@index")->name('paypal');

Route::view('/shop', 'pages.shop')->name('shop');
Route::view('/shop/{category}', 'pages.shop')->name('shop_by_category');
Route::view('/track-my-order', 'pages.track')->name('track');
Route::view('wishlist', 'pages.wishlist')->name('wishlist');
Route::view('recently-viwed-by-you', 'pages.recent-views')->name('recent');
Route::view('product', 'pages.item')->name('product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
