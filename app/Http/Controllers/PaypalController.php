<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypalController extends Controller
{
    /**
     * Index
     */
    public function index()
    {
        return view("pages.paypal");
    }
}
