<?php

namespace App\Http\Controllers;

use App\Http\Cart\TCart;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    use TCart;

    function __construct()
    {
        if (!Session::has('cart')) {
            return redirect()->route('quecommerz');
        }
    }

    /**
     * View checkout page
     */
    public function index()
    {
        if (Session::has('cart')) {
            $cart = $this->shoppingCart();

            return view('pages.checkout', compact('cart'));
        } else {
            return redirect()->route('quecommerz');
        }
    }

    /**
     * Post Checkout
     */
    public function checkout(CheckoutRequest $request)
    {
        $data = [
            'firstname' => $request->billing_first_name,
            'lastname' => $request->billing_last_name,
            'country' => $request->billing_country,
            'state' => $request->billing_state,
            'city' => $request->billing_city,
            'address' => $request->billing_address_1 . $request->billing_address_2,
            'post_code' => $request->billing_postcode,
            'phone' => $request->billing_phone,
            'email' => $request->email,
            'shipping_address_alt' => $request->shipping_address_alt,
            'order_notes' => $request->order_comments,
            'payment_method' => $request->payment_method,
        ];

        //billing & shipping info
        // Session::put('bsInfo', $data);

        return redirect()->route('payment');
    }

    /**
     * Order confirm
     */
    public function confirm()
    {
        return view('pages.order-confirm');
    }
}
