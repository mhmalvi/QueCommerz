<?php

namespace App\Http\Cart;

use Illuminate\Support\Facades\Session;

trait TCart
{
    private function shoppingCart()
    {
        $cart = Session::get('cart');
        $items = [];

        foreach ($cart->items as $key => $value) {
            array_push($items, [
                'Id' => $key,
                'Title' => $value["item"]["product"],
                'Slug' => $value["item"]["slug"],
                'Price' => $value["item"]->discounted(),
                'Quantity' => $value["qty"],
                'TotalPrice' => $value["price"],
                'thumbnail' => $value["item"]["thumbnail"]
            ]);
        }

        return $cart = [
            'SubTotal' => $cart->totalPrice,
            'TotalItems' => $cart->totalQty,
            'Products' => $items
        ];
    }
}
