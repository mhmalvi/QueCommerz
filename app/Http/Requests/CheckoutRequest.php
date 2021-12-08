<?php

namespace App\Http\Requests;

use App\Models\Country;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\UserInfo;
use App\Rules\CheckTermsConditions;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "billing_first_name" => "required|string|max:100",
            "billing_last_name" => "required|string|max:100",
            "billing_address_1" => "required|max:255",
            "billing_city" => "required",
            "billing_state" => "required",
            "billing_postcode" => "required",
            "billing_phone" => "required",
            "email" => "required|max:100",
            "terms-field" => new CheckTermsConditions
        ];
    }

    public function messages()
    {
        return [
            'billing_first_name.required' => 'Your first name is required',
            "billing_last_name.required" => "Your last name is required",
            "billing_country.required" => "Please select your country",
            "billing_address_1.required" => "Billing address is required",
            "billing_city.required" => "Please enter your city/town name",
            "billing_state.required" => "Please enter your state name",
            "billing_postcode.required" => "Please enter you postal code",
            "billing_phone.required" => "Please enter your phone number",
            "email.required" => "Please enter your email address",
        ];
    }

    public function saveUserInfo()
    {
        $userInfo = UserInfo::where('id', Auth::id())->first();

        $userInfo->firstname = $this->billing_first_name;
        $userInfo->lastname = $this->billing_last_name;
        if ($this->filled('billing_country')) {
            $userInfo->country = $this->getCountryByID();
        }
        $userInfo->state = $this->billing_state;
        $userInfo->city = $this->billing_city;
        $userInfo->street_address = $this->billing_address_1;
        $userInfo->postcode = $this->billing_postcode;
        $userInfo->phone = $this->billing_phone;

        $userInfo->save();
    }

    private function getCountryByID()
    {
        return Country::where('code', $this->billing_country)->first();
    }

    public function saveOrder()
    {
        $cart = Session::get('cart');

        $random = Str::upper(Str::random(6));
        $dateTime = date('Ymd', time());

        $orderId = "{$dateTime}-{$random}";

        $order = Order::create([
            'user_id' => Auth::id(),
            'order_no' => $orderId,
            'payment_type' => "paypal",
            'amount' => $cart->totalPrice,
            'cart' => json_encode($cart),
        ]);

        $this->saveOrderDetails($order->id, $cart);

        Session::forget('cart');

        return $order->order_no;
    }

    private function saveOrderDetails($orderId, $cart)
    {
        foreach ($cart->items as $item) {
            OrderDetails::create([
                'order_id' => $orderId,
                'product_id' => Product::where('uuid', $item->product->uuid)->first()->id,
                'qty' => $item->qty,
                'subtotal' => $item->price,
            ]);
        }
    }
}
