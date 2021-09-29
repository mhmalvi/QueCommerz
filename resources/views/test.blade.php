{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

{{-- Category Carosel --}}
{{-- <section class="section-categories-carousel mb-5" id="categories-carousel-2">
    <header class="section-header">
        <h4 class="section-title">Featured Categories</h4>
        <nav class="custom-slick-nav"></nav>
        <!-- .custom-slick-nav -->
    </header>
    <!-- .section-header -->
    <div class="product-categories product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" 
    data-slick="{
        &quot;infinite&quot;:true,
        &quot;slidesToShow&quot;:10,
        &quot;slidesToScroll&quot;:1,
        &quot;dots&quot;:false,
        &quot;arrows&quot;:true,
        &quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,
        &quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,
        &quot;appendArrows&quot;:&quot;#categories-carousel-2 .custom-slick-nav&quot;,
        &quot;responsive&quot;:[{
            &quot;breakpoint&quot;:480,
            &quot;settings&quot;:{&quot;slidesToShow&quot;:2,
                &quot;slidesToScroll&quot;:2}},
                {&quot;breakpoint&quot;:779,
                    &quot;settings&quot;:{&quot;slidesToShow&quot;:2,
                        &quot;slidesToScroll&quot;:2}},
                        {&quot;breakpoint&quot;:780,
                            &quot;settings&quot;:{&quot;slidesToShow&quot;:3,
                                &quot;slidesToScroll&quot;:3}},
                                {&quot;breakpoint&quot;:1200,
                                    &quot;settings&quot;:{&quot;slidesToShow&quot;:4,
                                        &quot;slidesToScroll&quot;:4}},
                                        {&quot;breakpoint&quot;:1400,
                                            &quot;settings&quot;:{&quot;slidesToShow&quot;:5,
                                                &quot;slidesToScroll&quot;:5}},
                                                {&quot;breakpoint&quot;:1700,
                                                    &quot;settings&quot;:{&quot;slidesToShow&quot;:6,
                                                        &quot;slidesToScroll&quot;:6}}]}">
        <div class="woocommerce columns-10">
            <div class="products">
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="All in One PC" src="{{asset('assets/images/category/16.png')}}">
                        <h2 class="woocommerce-loop-category__title">All in One PC </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Audio & Music" src="{{asset('assets/images/category/17.png')}}">
                        <h2 class="woocommerce-loop-category__title">Audio & Music </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Cells & Tablets" src="{{asset('assets/images/category/18.png')}}">
                        <h2 class="woocommerce-loop-category__title">Cells & Tablets </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Computers & Laptops" src="{{asset('assets/images/category/19.png')}}">
                        <h2 class="woocommerce-loop-category__title">Computers & Laptops </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Desktop PCs" src="{{asset('assets/images/category/20.png')}}">
                        <h2 class="woocommerce-loop-category__title">Desktop PCs </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Digital Cameras" src="{{asset('assets/images/category/21.png')}}">
                        <h2 class="woocommerce-loop-category__title">Digital Cameras </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Games & Consoles" src="{{asset('assets/images/category/22.png')}}">
                        <h2 class="woocommerce-loop-category__title">Games & Consoles </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Headphones" src="{{asset('assets/images/category/23.png')}}">
                        <h2 class="woocommerce-loop-category__title">Headphones </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Home Entertainment" src="{{asset('assets/images/category/24.png')}}">
                        <h2 class="woocommerce-loop-category__title">Home Entertainment </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Home Theater & Audio" src="{{asset('assets/images/category/20.png')}}">
                        <h2 class="woocommerce-loop-category__title">Home Theater & Audio </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Home Theater & Audio" src="{{asset('assets/images/category/20.png')}}">
                        <h2 class="woocommerce-loop-category__title">Home Theater & Audio </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Home Theater & Audio" src="{{asset('assets/images/category/20.png')}}">
                        <h2 class="woocommerce-loop-category__title">Home Theater & Audio </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Home Theater & Audio" src="{{asset('assets/images/category/20.png')}}">
                        <h2 class="woocommerce-loop-category__title">Home Theater & Audio </h2>
                    </a>
                </div>
                <div class="product-category product">
                    <a href="">
                        <img width="300" height="300" alt="Home Theater & Audio" src="{{asset('assets/images/category/20.png')}}">
                        <h2 class="woocommerce-loop-category__title">Home Theater & Audio </h2>
                    </a>
                </div>
            </div>
            <!-- .products-->
        </div>
        <!-- .woocommerce -->
    </div>
</section> --}}

@extends('layouts.app')

@section('content')
    
            <!-- Set up a container element for the button -->
    {{-- <div id="paypal-button-container"></div> --}}
@endsection
