@extends('layouts.app')

@section('title', 'Pay with paypal')

@section('content')
    <div class="container py-5">
        {{-- <div class="d-flex justify-content-center">
            <div class="card px-3 py-5" style="width: 30rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Thanks for shopping with us!</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Total Payable: $180
                    </h6>
                    <p class="card-text">
                        Your order will be placed one you made the payment!
                    </p>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="sb-dupna7828510@business.example.com">
                        <input type="hidden" name="item_name" value="hat">
                        <input type="hidden" name="item_number" value="123">
                        <input type="hidden" name="amount" value="15.00">
                        <input type="hidden" name="first_name" value="John">
                        <input type="hidden" name="last_name" value="Doe">
                        <input type="hidden" name="address1" value="9 Elm Street">
                        <input type="hidden" name="address2" value="Apt 5">
                        <input type="hidden" name="city" value="Berwyn">
                        <input type="hidden" name="state" value="PA">
                        <input type="hidden" name="zip" value="19312">
                        <input type="hidden" name="night_phone_a" value="610">
                        <input type="hidden" name="night_phone_b" value="555">
                        <input type="hidden" name="night_phone_c" value="1234">
                        <input type="hidden" name="email" value="jdoe@zyzzyu.com">
                        <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif"
                            alt="PayPal - The safer, easier way to pay online">
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
