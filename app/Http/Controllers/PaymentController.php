<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Cart\TCart;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    use TCart;

    function __construct()
    {
        if (!Session::has('cart')) {
            return redirect()->route('quecommerz');
        }
    }

    public function index()
    {
        $cart = $this->shoppingCart();
        $info = Session::get('bsInfo');


        return view('pages.payment', compact('cart', 'info'));
    }
}
