<?php

namespace App\Http\Controllers;

use App\Http\Cart\Cart;
use App\Http\Cart\TCart;
use App\Http\Resources\MiniCartCollection;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    use TCart;
    /**
     * View shopping Cart
     */
    public function index()
    {
        $cart = null;

        if (Session::has('cart')) {
            $cart = $this->shoppingCart();
        }

        return view('pages.cart', compact('cart'));
    }


    /**
     * Store Item in cart
     */
    public function store(Request $request, Product $product)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->AddToCart($product->uuid, $product, $request->quantity);

        Session::put('cart', $cart);

        return back();
    }

    /**
     * update whole cart
     */
    public function update(Request $request)
    {
        //remove cart from session
        if (Session::has('cart')) {
            Session::forget('cart');
        }

        $id = $request->id;
        $qty = $request->qty;
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        for ($i = 0; $i < count($id); $i++) {
            $product = Product::where('slug', $id[$i])->first();
            $cart->UpdateCart($product->uuid, $product, $qty[$i]);
        }

        Session::put('cart', $cart);
        return redirect()->back();
    }


    /**
     * Remove single item from cart
     */
    public function remove(Product $product)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->RemoveFromCart($product->uuid);

        if ($cart->totalQty <= 0) {
            Session::forget('cart');
        } else {
            Session::put('cart', $cart);
        }

        // return $this->minicart();
        return back();
    }


    public function minicart()
    {
        try {
            if (Session::has('cart')) {
                return new MiniCartCollection($this->shoppingCart());
            }

            return response()->json(['cart' => 0], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 503);
        }
    }
}
