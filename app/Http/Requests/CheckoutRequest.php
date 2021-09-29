<?php

namespace App\Http\Requests;

use App\Rules\CheckTermsConditions;
use Illuminate\Foundation\Http\FormRequest;

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
            "billing_country" => "required|string",
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

    public function save()
    {
        return;
    }
}
