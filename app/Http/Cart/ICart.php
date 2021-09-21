<?php

namespace App\Http\Cart;

interface ICart
{
    /**
     * Add item to cart
     */
    public function AddToCart(int $id, $product, int $quantity): void;

    /**
     * Update the quantity of cart item
     */
    public function UpdateCart(int $id, object $item, int $quantity);

    /**
     * Remove a single item from cart
     */
    public function RemoveFromCart(int $id);

    /**
     * Remove the whole cart
     */
    public function DestroyCart();
}
