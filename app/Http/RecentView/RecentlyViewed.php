<?php

namespace App\Http\RecentView;

class RecentlyViewed
{
    public $items = [];

    public function __construct($oldData)
    {
        if ($oldData) {
            $this->items = $oldData->items;
        }
    }

    public function AddProduct($id, $product)
    {
        $product = [
            'title' => $product->product,
            'slug' => $product->slug,
            'price' => $product->discounted(),
            'thumbnail' => $product->thumbnail
        ];

        if (array_key_exists($id, $this->items)) {
            return;
        }

        $this->items[$id] = $product;
    }
}
