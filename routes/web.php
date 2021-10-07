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

/**
 * Shop
 */
Route::get('shop', 'ProductController@shop')->name('shop');

/**
 * Product
 */
Route::get('/view/{product}', 'ProductController@view')->name('item');

/**
 * Cart
 */
Route::get('cart', 'CartController@index')->name('cart');
Route::get('mini-cart', 'CartController@minicart');
Route::name("cart.")->group(function () {
    Route::post('{product}/add-to-cart', 'CartController@store')->name("store");
    Route::put('update-cart', 'CartController@update')->name('update');
    Route::put('update-cart-item', 'CartController@updateCartItem');
    Route::delete("remove/{product}", "CartController@removeCartItem");
    Route::get('{product}/remove-from-cart', 'CartController@remove')->name('remove');
});


Route::middleware(['auth'])->group(function()
{
    /**
     * Checkout
     */
    Route::get("checkout", "CheckoutController@index")->name("checkout");
    Route::post("checkout", "CheckoutController@checkout");

    /**
     * Order
     */
    Route::get("order-confirm", "CheckoutController@confirm")->name("confirm");

    /**
     * Payment Gateway
     */
    Route::get('choose-payment-method', 'PaymentController@index')->middleware(['cart'])->name('payment');
    Route::get("pay-via-paypal", "PaypalController@index")->name('paypal');
    
    Route::view('/track-my-order', 'pages.track')->name('track');
    Route::view('wishlist', 'pages.wishlist')->name('wishlist');
});

Route::view('/shop/{category}', 'pages.shop')->name('shop_by_category');
Route::view('product', 'pages.item')->name('product');

Route::middleware(['auth'])->group(function()
{
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/profile', 'ProfileController@index')->name('profile');

    Route::patch('/profile', 'ProfileController@update');

    Route::get('/track-orders', 'TrackOrderController@index')->name('track-orders');

    Route::get('/track-orders/list', 'TrackOrderController@list')->name('track-orders.list');

    Route::get('/track-orders/view/{order:order_no}', 'TrackOrderController@viewInvoice')->name('track-orders.view_invoice');

    Route::get('/change-password', 'ProfileController@changePasswordIndex');
});

Route::get("test", "HomeController@test");

require __DIR__ . '/auth.php';
