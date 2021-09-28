<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        $products = Product::latest()->limit(20)->get();

        return view('index', compact('products'));
    }

    public function test()
    {
    }
}
