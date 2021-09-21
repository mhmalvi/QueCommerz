<?php

namespace App\Http\Controllers;

use App\Http\Cart\Cart;
use App\Http\Resources\MiniCartCollection;
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
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);

        $cart->AddToCart($product->id, $product, $request->quantity);

        Session::put('cart', $cart);

        return back();
    }


    public function minicart()
    {
        try {
            if (Session::has('cart')) {
                $data = Session::get('cart');
                $items = [];

                foreach ($data->items as $value) {
                    array_push($items, [
                        'Title' => $value["item"]["product"],
                        'Price' => $value["item"]->discounted(),
                        'Quantity' => $value["qty"],
                        'TotalPrice' => $value["price"],
                        'thumbnail' => $value["item"]["thumbnail"]
                    ]);
                }

                $cart = [
                    'SubTotal' => $data->totalPrice,
                    'TotalItems' => $data->totalQty,
                    'Products' => $items
                ];

                return new MiniCartCollection($cart);
            }

            return response()->json(['message' => "Your cart is empty"], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 503);
        }
    }
}
