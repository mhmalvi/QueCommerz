@extends('layouts.app')

@section('content')
    <div class="row">
        <nav class="woocommerce-breadcrumb">
            <a href="home-v1.html">Home</a>
            <span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>
            <a href="checkout.html">Checkout</a>
            <span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Order received
        </nav>
        <!-- .woocommerce-breadcrumb -->

        <div class="container">
            <div class="p5 my-5">
                <div class="text-center">
                    <h3>You order is received!</h3>
                    <img src="{{asset('assets/confirmed.png')}}" alt="" class="w-50" style="display: initial;">
                </div>
            </div>
        </div>
    </div>
    <!-- .row -->
@endsection
