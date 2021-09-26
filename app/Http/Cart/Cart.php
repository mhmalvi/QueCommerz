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
    public function AddToCart(string $id, $item, int $qty): void
    {
        $storedItem = [
            'qty' => 0,
            'reqular_price' => $item->discounted(),
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
    public function UpdateCart(string $id, object $item, int $quantity)
    {
        $updatedItem = [
            'qty' => $quantity,
            'price' => $item->discounted(),
            'item' => $item
        ];

        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $updatedItem = $this->items[$id];
            }
        }

        $updatedItem['price'] = $updatedItem["price"] * $updatedItem['qty'];

        $this->items[$id] = $updatedItem;

        $this->totalQty += 1;
        $this->totalPrice += $updatedItem['price'];
    }

    /**
     * 
     */
    public function UpdateCartItem(string $id, int $quantity)
    {
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $updatedItem = $this->items[$id];
            }
        }
    }

    /**
     * Remove item from cart
     */
    public function RemoveFromCart(string $id)
    {
        if (array_key_exists($id, $this->items)) {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['price'];

            unset($this->items[$id]);
        }
    }

    /**
     * Destroy the cart
     */
    public function DestroyCart()
    {
    }
}
