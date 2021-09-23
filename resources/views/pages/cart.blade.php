@extends('layouts.app')

@section('content')
    <div class="row">
        <nav class="woocommerce-breadcrumb">
            <a href="">Home</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>
            Cart
        </nav>
        <!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="type-page hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            @if (Session::has('cart'))
                                <div class="cart-wrapper">
                                    <cart-component></cart-component>
                                    <!-- .woocommerce-cart-form -->
                                    <cart-totals></cart-totals>
                                    <!-- .cart-collaterals -->
                                </div>
                                <!-- .cart-wrapper --> 
                            @else
                                <h3 class="text-center py-3">Your cart is empty!</h3>
                                <div class="d-flex justify-content-center">
                                    <img src="{{asset('assets/empty.png')}}" alt="" style="width: 500px;">
                                </div>
                            @endif
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .entry-content -->
                </div>
                <!-- .hentry -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .row -->
@endsection