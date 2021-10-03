<?php

namespace App\Http\Cart;

use Illuminate\Support\Facades\Session;

trait TCart
{
    private function shoppingCart()
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            $items = [];

            foreach ($cart->items as $key => $item) {
                array_push($items, [
                    'Id' => $key,
                    'Title' => $item->product->product,
                    'Slug' => $item->product->slug,
                    'Price' => $item->product->discounted(),
                    'Quantity' => $item->qty,
                    'TotalPrice' => $item->price,
                    'thumbnail' => $item->product->thumbnail,
                ]);
            }

            return $cart = [
                'SubTotal' => number_format($cart->totalPrice, 2, '.', ','),
                'TotalItems' => $cart->totalQty,
                'Products' => $items
            ];
        }

        return;
    }
}
