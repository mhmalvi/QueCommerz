<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductsCollection;
use App\Models\Product;
use Illuminate\Http\Request;

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
     * View Specific product
     */
    public function view(Product $product)
    {
        return view('pages.item', compact('product'));
    }
}
