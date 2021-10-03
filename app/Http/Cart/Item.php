<?php
namespace App\Http\Cart;

use App\Models\Product;

class Item
{
	public int $qty;
	public int $regular_price;
	public Product $product;
	public int $price;
}