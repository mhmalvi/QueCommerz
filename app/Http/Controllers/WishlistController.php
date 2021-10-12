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
        // if the product already exists in user's wishlist, dont add, just redirect back
        if( 
            Wishlist::where('user_id', auth()->user()->id)
                    ->where('product_id', $product->id)
                    ->first()
            )
        {
            return back()->with('status', "The product already exists in your wishlist");
        }
        Wishlist::create([
            'user_id' => auth()->user()->id,
            'product_id' => $product->id,
        ]);

        return back()->with('status', "Successfully added to your wishlist!");
    }

    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        
        return response()->json([
            'message' => "Successfully deleted the product from your wishlist"
        ], 200);
    }
}
