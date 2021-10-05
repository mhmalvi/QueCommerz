<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Resources\OrdersCollection;

class TrackOrderController extends Controller
{
    public function index()
    {
        return view('track-orders');
    }

    public function list()
    {
        return new OrdersCollection(
            Order::latest()->paginate(request('items'))
        );
    }

    public function viewInvoice(Order $order)
    {
        return view('track_orders.view_invoice', compact('order'));
    }
}
