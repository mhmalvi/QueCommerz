<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

        <meta name="api-base-url" content="{{ URL::to('/')}}" />

        <title>Quecommerz - @yield('title')</title>

        @include('layouts.styles')
        
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
        
    </head>
    @php
        $class = null;
        switch (Route::currentRouteName()) {
            case 'quecommerz':
                $class = 'woocommerce-active page-template-template-homepage-v2 can-uppercase';
                break;
            case 'shop':
                $class = 'woocommerce-active left-sidebar';
                break;
            case 'shop_by_category':
                $class = 'woocommerce-active left-sidebar';
                break;
            case 'cart':
                $class = 'page home page-template-default';
                break;
            case 'checkout':
                $class = 'woocommerce-active page-template-default woocommerce-checkout woocommerce-page can-uppercase';
                break;
            case 'wishlist':
                $class = 'page-template-default page woocommerce-wishlist can-uppercase';
                break;
            case 'recent':
                $class = 'woocommerce-active left-sidebar';
                break;
            case 'item':
                $class = 'woocommerce-active  single-product left-sidebar normal';
                break;
            case 'order':
                $class = 'page-template-default woocommerce-checkout woocommerce-page woocommerce-order-received can-uppercase woocommerce-active';
                break;
            default:
                $class = 'page home page-template-default';
                break;
        }
    @endphp
    <body class="{{$class}}">
        <div id="page" class="hfeed site">
            <div class="loader_bg">
                <div class="loader"></div>
            </div>
            
            @include('layouts.topbar')
            <!-- .top-bar-v1 -->
            @include('layouts.header')
            <!-- .header-v1 -->
            <!-- ============================================================= Header End ============================================================= -->
            <div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    @yield('content')
                </div>
                <!-- .col-full -->
            </div>
            <!-- #content -->
            @include('layouts.footer')
            <!-- .site-footer -->
        </div>
        
        @include('layouts.scripts')

    </body>
</html>