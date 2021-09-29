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
                            {{-- <cart-component></cart-component> --}}
                            @if (Session::has('cart'))
                                <div class="cart-wrapper">
                                    <form method="post" action="{{ route('cart.update') }}" class="woocommerce-cart-form">
                                        @csrf
                                        @method('put')
                                        <table class="shop_table shop_table_responsive cart">
                                            <thead>
                                                <tr>
                                                    <th class="product-remove">&nbsp;</th>
                                                    <th class="product-thumbnail">&nbsp;</th>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-price">Price</th>
                                                    <th class="product-quantity">Quantity</th>
                                                    <th class="product-subtotal">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cart['Products'] as $item)
                                                    <tr>
                                                        <td class="product-remove">
                                                            <a class="remove" href="#">×</a>
                                                        </td>
                                                        <td class="product-thumbnail">
                                                            <a href="">
                                                                <img alt="" class="wp-post-image cart-img"
                                                                    src="{{ $item['thumbnail'] }}" />
                                                            </a>
                                                        </td>
                                                        <td data-title="Product" class="product-name">
                                                            <div class="media cart-item-product-detail">
                                                                <a href="">
                                                                    <img alt="" class="wp-post-image cart-img"
                                                                        src="{{ $item['thumbnail'] }}" />
                                                                </a>
                                                                <div class="media-body align-self-center">
                                                                    <a href="">{{ $item['Title'] }}</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-title="Price" class="product-price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span
                                                                    class="woocommerce-Price-currencySymbol">${{ $item['Price'] }}</span>
                                                            </span>
                                                        </td>
                                                        <td class="product-quantity" data-title="Quantity">
                                                            <div class="quantity">
                                                                <label for="quantity-input">Quantity</label>
                                                                <input id="quantity-input" type="number"
                                                                    value="{{ $item['Quantity'] }}" title="Qty"
                                                                    name="qty[]" class="input-text qty text" size="4"
                                                                    min="1" max="5" />
                                                                <input type="hidden" name="id[]"
                                                                    value="{{ $item['Slug'] }}">
                                                            </div>
                                                        </td>
                                                        <td data-title="Total" class="product-subtotal">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>
                                                                {{ $item['TotalPrice'] }}
                                                            </span>
                                                            <a title="Remove this item" class="remove"
                                                                href="{{ route('cart.remove', $item['Slug']) }}">×</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td class="actions" colspan="6">
                                                        <div class="coupon">
                                                            <label for="coupon_code">Coupon:</label>
                                                            <input type="text" placeholder="Coupon code" value=""
                                                                id="coupon_code" class="input-text"
                                                                name="coupon_code" />
                                                            <input type="submit" value="Apply coupon" name="apply_coupon"
                                                                class="button" />
                                                        </div>
                                                        <input type="submit" value="Update cart" name="update_cart"
                                                            class="button" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- .shop_table shop_table_responsive -->
                                    </form>
                                    <!-- .woocommerce-cart-form -->
                                    <div class="cart-collaterals">
                                        <div class="cart_totals">
                                            <h2>Cart totals</h2>
                                            <table class="shop_table shop_table_responsive">
                                                <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td data-title="Subtotal">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span
                                                                    class="woocommerce-Price-currencySymbol">$</span>{{ $cart['SubTotal'] }}</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Shipping</th>
                                                        <td data-title="Shipping">Flat rate</td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td data-title="Total">
                                                            <strong>
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                                    {{ $cart['SubTotal'] }} </span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- .shop_table shop_table_responsive -->
                                            <div class="wc-proceed-to-checkout border-0">
                                                <!-- .wc-proceed-to-checkout -->
                                                <a class="btn btn-primary w-100 my-2" href="{{ route('checkout') }}">
                                                    Proceed to checkout
                                                </a>
                                                <a class="btn btn-secondary w-100 my-2" href="{{ route('shop') }}">
                                                    Back to Shopping
                                                </a>
                                            </div>
                                            <!-- .wc-proceed-to-checkout -->
                                        </div>
                                        <!-- .cart_totals -->
                                    </div>
                                    <!-- .cart-collaterals -->
                                </div>
                            @else
                                <h3 class="text-center py-3">Your cart is empty!</h3>
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('assets/empty.png') }}" alt="" style="width: 500px" />
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
