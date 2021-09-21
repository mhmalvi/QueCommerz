<?php

namespace App\Http\Cart;

use App\Http\Cart\ICart;

class Cart implements ICart
{
    public $items = null;
    public $totalQty;
    public $totalPrice;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    /**
     * Add item to cart
     */
    public function AddToCart(int $id, $item, int $qty): void
    {
        $storedItem = [
            'qty' => 0,
            'price' => $item->discounted(),
            'item' => $item
        ];

        /**
         * if item already exist in cart
         */
        if ($this->items && array_key_exists($id, $this->items)) {
            $storedItem = $this->items[$id];
            $storedItem['qty'] += $qty;
            $storedItem['price'] = $item->discounted() * $storedItem['qty'];
        } else {
            $storedItem['qty'] += $qty;
            $storedItem['price'] = $item->discounted() * $storedItem['qty'];
            $this->totalQty += 1;
        }

        $this->items[$id] = $storedItem;
        $this->totalPrice += $item->discounted() * $qty;
    }

    /**
     * Update Cart item
     */
    public function UpdateCart(int $id, object $item, int $quantity)
    {
    }

    /**
     * Remove item from cart
     */
    public function RemoveFromCart(int $id)
    {
    }

    /**
     * Destroy the cart
     */
    public function DestroyCart()
    {
    }
}
