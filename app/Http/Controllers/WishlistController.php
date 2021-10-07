<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Wishlist::with('product')->where('user_id', auth()->user()->id)->get();

        return view('pages.wishlist', compact('wishlist'));
    }

    public function add(Product $product)
    {
        Wishlist::create([
            'user_id' => auth()->user()->id,
            'product_id' => $product->id,
        ]);

        return back()->with('status', "Successfully added to your wishlist!");
    }
}
