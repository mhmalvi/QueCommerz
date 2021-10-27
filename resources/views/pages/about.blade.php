@extends('layouts.app')

@section('content')
    <div class="row">
        <nav class="woocommerce-breadcrumb">
            <a href="">Home</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>
            About Us
        </nav>
        <!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="type-page hentry">
                    <header class="entry-header">
                        <div class="page-featured-image">
                            <img width="1920" height="1391" alt="" class="attachment-full size-full wp-post-image" src="{{asset('images/bg-about.jpg')}}">
                        </div>
                        <!-- .page-featured-image -->
                        <div class="page-header-caption about-bg-light">
                            <h1 class="entry-title mb-0">About Us</h1>
                        </div>
                        <!-- .page-header-caption -->
                    </header>
                    <!-- .entry-header -->
                    <div class="entry-content">
                        <div class="container">
                            <div class="row py-5">
                                <div class="col-md-6 offset-md-1 order-lg-last">
                                    <img src="{{asset('images/ab.jpg')}}" alt="">
                                </div>
                                <div class="col-md-5 pt-4 pt-lg-0">
                                    <h2>Who we are?</h2>

                                    <p class="text-justify">
                                        Welcome to tradetradeus, your number one source for all household goods and electronics products in one place. 
                                        We're committed to providing you with the very best quality of electronics items, with an emphasis on house electronics, 
                                        Fashion Items, Children Accessories, and more. It started its journey in 2021, and Mr. Jacob Bhatti is the founder of 
                                        Tradtradeus and its origins in Australia. Besides, we have come a long way with our expert e-marketers for your best 
                                        satisfaction. So, we hope you enjoy our products as much as we enjoy offering them to you. 
                                    </p>
                                </div>
                            </div>

                            <div class="py-5"></div>

                            <div class="row pb-5">
                                <div class="col-md-6">
                                    <img src="{{asset('images/ms.jpg')}}" alt="">
                                </div>
                                <div class="col-md-5 offset-md-1 pt-4 pt-lg-0">
                                    <h2>Our Mission</h2>
                                    <p class="text-justify">
                                        We aim to serve our customers with the lowest possible prices, under the customer's best preference and satisfaction. 
                                    </p>
                                </div>
                            </div>

                            <div class="py-5"></div>

                            <div class="row pb-5">
                                <div class="col-md-6 offset-md-1 order-lg-last">
                                    <img src="{{asset('images/vs.jpg')}}" alt="">
                                </div>
                                <div class="col-md-5 pt-4 pt-lg-0">
                                    <h2>Our Vision</h2>
                                    <p class="text-justify">
                                        Our vision is to reach every corner of our most valuable customers' needs with world-class online product services.
                                    </p>
                                </div>
                            </div>
                        </div>
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
