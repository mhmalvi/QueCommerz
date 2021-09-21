<?php

namespace App\Http\Controllers;

use App\Http\Cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Store Item in cart
     */
    public function store(Request $request, Product $product)
    {

        echo "<pre>";
        print_r(Session::get('cart'));

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->AddToCart($product->id, $product, $request->quantity);

        Session::put('cart', $cart);
    }
}
