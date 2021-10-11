<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\FeaturedProduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        $products = Product::latest()->limit(20)->get();
        $featured_products = FeaturedProduct::all();

        return view('index', compact('products', 'featured_products'));
    }

    public function test()
    {
        return view('test');
    }
}
