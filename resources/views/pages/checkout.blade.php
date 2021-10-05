@extends('layouts.app')

@section('content')
    <div class="row">
        <nav class="woocommerce-breadcrumb">
            <a href="home-v1.html">Home</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>
            Checkout
        </nav>
        <!-- .woocommerce-breadcrumb -->
        <div class="content-area" id="primary">
            <main class="site-main" id="main">
                <div class="type-page hentry">
                    <div class="entry-content">
                        <div class="woocommerce">
                            <!-- .collapse -->
                            <form action="{{route('checkout')}}" class="checkout woocommerce-checkout" method="post" name="checkout">
                                @csrf
                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Billing Details</h3>
                                            <div class="woocommerce-billing-fields__field-wrapper-outer">
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p id="billing_first_name_field" class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                        <label class="" for="billing_first_name">First Name
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text"
                                                            value="{{ old('billing_first_name') ? old('billing_first_name') : $user->first_name }}"
                                                            placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                                        @error('billing_first_name')
                                                            <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </p>
                                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                        <label class="" for="billing_last_name">Last Name
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text"
                                                        value="{{ old('billing_last_name')? old('billing_last_name') : $user->last_name }}"
                                                        placeholder="" id="billing_last_name" name="billing_last_name" class="input-text ">
                                                        @error('billing_last_name')
                                                            <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </p>
                                                    <div class="clear"></div>
                                                    <p id="billing_country_field" class="form-row form-row-wide validate-required validate-email">
                                                        <label class="" for="billing_country">Country
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <select autocomplete="country" class="country_to_state country_select select2-hidden-accessible" id="billing_country" name="billing_country" tabindex="-1" aria-hidden="true">
                                                            <option value="">Select a country…</option>
                                                            @foreach (\App\Models\Country::all() as $item)
                                                                <option value="{{$item->code}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('billing_country')
                                                            <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </p>
                                                    <div class="clear"></div>
                                                    <p id="billing_state_field" class="form-row form-row-wide validate-required validate-email">
                                                        <label class="" for="billing_state">State
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="{{old('billing_state')}}" placeholder="" id="billing_state" name="billing_state" class="input-text ">
                                                        @error('billing_last_name')
                                                            <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </p>
                                                    <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required">
                                                        <label class="" for="billing_city">Town / City
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="{{old('billing_city')}}" placeholder="" id="billing_city" name="billing_city" class="input-text ">
                                                        @error('billing_city')
                                                            <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </p>
                                                    <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                        <label class="" for="billing_address_1">Street address
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="{{old('billing_address_1')}}" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text ">
                                                        @error('billing_address_1')
                                                            <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </p>
                                                    <p id="billing_address_2_field" class="form-row form-row-wide address-field">
                                                        <input type="text" value="{{old('billing_address_2')}}" placeholder="Apartment, suite, unit etc. (optional)" id="billing_address_2" name="billing_address_2" class="input-text ">
                                                    </p>
                                                    <p id="billing_postcode_field" class="form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
                                                        <label class="" for="billing_postcode">Postcode / ZIP
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="text" value="{{old('billing_postcode')}}" placeholder="" id="billing_postcode" name="billing_postcode" class="input-text ">
                                                        @error('billing_postcode')
                                                            <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </p>
                                                    <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                        <label class="" for="billing_phone">Phone
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="tel" value="{{old('billing_phone')}}" placeholder="" id="billing_phone" name="billing_phone" class="input-text ">
                                                        @error('billing_phone')
                                                            <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </p>
                                                    <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                        <label class="" for="billing_email">Email Address
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="email"
                                                        value="{{ old('email') ? old('email') : $user->email }}"
                                                        placeholder="" id="billing_email" name="email" class="input-text ">
                                                        @error('email')
                                                            <small class="text-danger">{{$message}}</small>
                                                        @enderror
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                        </div>
                                        <!-- .woocommerce-billing-fields -->
                                    </div>
                                    <!-- .col-1 -->
                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                                            <h3 id="ship-to-different-address">
                                                <label class="collapsed woocommerce-form__label woocommerce-form__label-for-checkbox checkbox" data-toggle="collapse" data-target="#shipping-address" aria-controls="shipping-address">
                                                    <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" type="checkbox" value="1" name="ship_to_different_address">
                                                    <span>Ship to a different address?</span>
                                                </label>
                                            </h3>
                                            <div class="shipping_address collapse" id="shipping-address">
                                                <div class="woocommerce-shipping-fields__field-wrapper">
                                                    <p id="order_comments_field" class="form-row notes">
                                                        <label class="" for="order_comments">Shipping Address</label>
                                                        <textarea rows="3" id="order_comments" class="input-text " name="shipping_address_alt"></textarea>
                                                    </p>
                                                </div>
                                                <!-- .woocommerce-shipping-fields__field-wrapper -->
                                            </div>
                                            <!-- .shipping_address -->
                                        </div>
                                        <!-- .woocommerce-shipping-fields -->
                                        <div class="woocommerce-additional-fields">
                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                <p id="order_comments_field" class="form-row notes">
                                                    <label class="" for="order_comments">Order notes</label>
                                                    <textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="order_comments"></textarea>
                                                </p>
                                            </div>
                                            <!-- .woocommerce-additional-fields__field-wrapper-->
                                        </div>
                                        <!-- .woocommerce-additional-fields -->
                                    </div>
                                    <!-- .col-2 -->
                                </div>
                                <!-- .col2-set -->
                                <h3 id="order_review_heading">Your order</h3>
                                <div class="woocommerce-checkout-review-order" id="order_review">
                                    <div class="order-review-wrapper">
                                        <h3 class="order_review_heading">Your Order</h3>
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($cart["Products"] as $item)
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong class="product-quantity">{{$item["Quantity"]}} ×</strong>
                                                            {{$item["Title"]}}&nbsp;
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$item["Price"]}}</span>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    
                                                @endforelse
                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">$</span>{{$cart["SubTotal"]}}</span>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$cart["SubTotal"]}}</span>
                                                        </strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <!-- /.woocommerce-checkout-review-order-table -->
                                        <div class="woocommerce-checkout-payment" id="payment">
                                            <div class="form-row place-order">
                                                <p class="form-row terms wc-terms-and-conditions woocommerce-validated">
                                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                        <input type="checkbox" id="terms" name="terms" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                        <span>I’ve read and accept the <a class="woocommerce-terms-and-conditions-link" href="terms-and-conditions.html">terms &amp; conditions</a></span>
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="hidden" name="terms-field" value="true">
                                                    @error('terms-field')
                                                        <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </p>
                                                <button type="submit" class="btn btn-outline-primary w-100">Place order</button>
                                            </div>
                                        </div>
                                        <!-- /.woocommerce-checkout-payment -->
                                    </div>
                                    <!-- /.order-review-wrapper -->
                                </div>
                                <!-- .woocommerce-checkout-review-order -->
                            </form>
                            <!-- .woocommerce-checkout -->
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .entry-content -->
                </div>
                <!-- #post-## -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .row -->
@endsection
