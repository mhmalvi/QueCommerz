<?php

namespace App\Http\Controllers;

use App\Http\Cart\TCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    use TCart;

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
     * Order confirm
     */
    public function confirm()
    {
        return view('pages.order-confirm');
    }
}
