<?php

namespace App\Http\Controllers;

use App\Http\Cart\TCart;
use App\Models\Shipment;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    use TCart;

    function __construct()
    {
        if (!Session::has('cart')) {
            return redirect()->route('quecommerz');
        }
    }

    /**
     * View checkout page
     */
    public function index()
    {
        if (Session::has('cart')) {
            $cart = $this->shoppingCart();

            $user = auth()->user();

            return view('pages.checkout', compact('cart', 'user'));
        } else {
            return redirect()->route('quecommerz');
        }
    }

    /**
     * Post Checkout
     */
    public function checkout(CheckoutRequest $request)
    {
        if(!Session::has('cart'))
        {
            return redirect()->back()->with('error', "Your cart is empty!");
        }
        $cart = Session::get('cart');

        $data = [
            'firstname' => $request->billing_first_name,
            'lastname' => $request->billing_last_name,
            'country' => $request->billing_country,
            'state' => $request->billing_state,
            'city' => $request->billing_city,
            'address' => $request->billing_address_1 . $request->billing_address_2,
            'post_code' => $request->billing_postcode,
            'phone' => $request->billing_phone,
            'email' => $request->email,
            'shipping_address_alt' => $request->shipping_address_alt,
            'order_notes' => $request->order_comments,
            'payment_method' => $request->payment_method,
            'cart' => $cart,
        ];

        //billing & shipping info
        Session::put('bsInfo', $data);

        return redirect()->route('payment');
    }

    /**
     * Order confirm
     */
    public function confirm()
    {
        $shipping_info = Session::get('bsInfo');
        $address = $shipping_info['address'] . ', ' . $shipping_info['city'] . ', ' . $shipping_info['state'] . ', ' . $shipping_info['country'];
        $cart = $shipping_info['cart'];
        $cart_json = json_encode($cart);

        $shipment = Shipment::create([
            'user_id' => auth()->user()->id, // place auth user id here
            'shipping_address' => $address,
            'shipping_method' => 'transportation',
            'shipping_rate' => 0,
            'shipping_cost' => 0,
            'shipping_tax' => 0,
        ]);

        $order_no = date('Ymd', time()) . '-' . random_int(100000, 999999); // date-{8 digits number}

        $payment_type = "paypal"; // just for testing
        $payment_id = 0;
        $payer_id = 0;

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'order_no' => $order_no,
            'payment_type' => $payment_type,
            'payment_id' => $payment_id,
            'payer_id' => $payer_id,
            'amount' => $cart->totalPrice,
            'cart' => $cart_json,
            'coupon_discount' => 0,
            'payment_status' => 'paid',
            // order_status by default set to `pending`
            'shipment_id' => $shipment->id,
        ]);

        foreach($cart->items as $key => $item)
        {
            $product = Product::where('uuid', $item->product->uuid)->first();

            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'qty' => $item->qty,
                'subtotal' => $item->price,
            ]);
        }


        Session::forget('cart');
        return view('pages.order-confirm');
    }
}
