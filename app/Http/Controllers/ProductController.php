<?php

namespace App\Http\Controllers;

use App\Http\RecentView\RecentlyViewed;
use App\Http\Resources\ProductsCollection;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * New Arrivals
     */
    public function getNewArrivals()
    {
        try {
            return new ProductsCollection(Product::latest()->limit(20)->get());
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 503);
        }
    }


    /**
     * New Arrivals page
     */
    public function shop()
    {
        $products = Product::latest()->get();

        return view('pages.shop', compact('products'));
    }


    /**
     * View Specific product
     */
    public function view(Product $product)
    {
        $recent = Session::has('recent_view') ? Session::get('recent_view') : [];

        $rv = new RecentlyViewed($recent);

        $rv->AddProduct($product->uuid, $product);

        Session::put('recent_view', $rv);

        return view('pages.item', compact('product'));
    }
}
