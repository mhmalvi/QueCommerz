<?php

namespace App\Http\Cart;

interface ICart
{
    /**
     * Add item to cart
     */
    public function AddToCart(string $id, $product, int $quantity): void;

    /**
     * Update the quantity of cart item
     */
    public function UpdateCart(string $id, object $item, int $quantity);

    /**
     * Remove a single item from cart
     */
    public function RemoveFromCart(string $id);

    /**
     * Remove the whole cart
     */
    public function DestroyCart();
}
