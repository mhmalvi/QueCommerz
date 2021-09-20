@extends('layouts.app')

@section('title', 'Your best choice')

@section('content')
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="slider-with-banners row">
                    <div class="slider-block column-1-slider-block ">
                        @include('partials.home-slider')
                    </div>
                    <div class="banners-block column-2-banners-block">
                        @include('partials.home-banners')
                    </div>
                    <!-- .banners-block -->
                </div>

                {{-- Category Carosel --}}
                <section class="section-categories-carousel mb-5" id="categories-carousel-2">
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
                </section>

                {{-- New Arrivals --}}
                <section class="section-products-carousel" id="new_arrival">
                    <header class="section-header">
                        <h2 class="section-title">New Arrivals</h2>
                        <nav class="custom-slick-nav"></nav>
                        <!-- .custom-slick-nav -->
                    </header>
                    <!-- .section-header -->
                    <div class="products-carousel 6-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:true,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#new_arrival .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:750,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                        <div class="container-fluid">
                            <div class="woocommerce columns-6">
                                <div class="products">
                                    <new-arrivals></new-arrivals>
                                    <!-- /.product-outer -->
                                </div>
                            </div>
                            <!-- .woocommerce-->
                        </div>
                        <!-- .container-fluid -->
                    </div>
                    <!-- .products-carousel -->
                </section>

                {{-- Recently Viewed --}}
                <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
                    <header class="section-header">
                        <h2 class="section-title">Recently viewed products</h2>
                        <nav class="custom-slick-nav"></nav>
                    </header>
                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#recently-viewed .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                        <div class="container-fluid">
                            <div class="woocommerce columns-5">
                                <div class="products">
                                    <div class="landscape-product product">
                                        <a class="woocommerce-LoopProduct-link" href="{{route('product')}}">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/card-4.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> </span>
                                                        </ins>
                                                        <span class="amount"> $800</span>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
                                                    <div class="techmarket-product-rating">
                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                            <span style="width:0%">
                                                                <strong class="rating">0</strong> out of 5</span>
                                                        </div>
                                                        <span class="review-count">(0)</span>
                                                    </div>
                                                    <!-- .techmarket-product-rating -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                    </div>
                                    <!-- .landscape-product -->
                                    <div class="landscape-product product">
                                        <a class="woocommerce-LoopProduct-link" href="{{route('product')}}">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/card-4.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> </span>
                                                        </ins>
                                                        <span class="amount"> $800</span>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">Snap White Instant Digital Camera in White</h2>
                                                    <div class="techmarket-product-rating">
                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                            <span style="width:0%">
                                                                <strong class="rating">0</strong> out of 5</span>
                                                        </div>
                                                        <span class="review-count">(0)</span>
                                                    </div>
                                                    <!-- .techmarket-product-rating -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                    </div>
                                    <!-- .landscape-product -->
                                    <div class="landscape-product product">
                                        <a class="woocommerce-LoopProduct-link" href="{{route('product')}}">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/card-2.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> </span>
                                                        </ins>
                                                        <span class="amount"> $500</span>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">Headset 3D Glasses VR for Android</h2>
                                                    <div class="techmarket-product-rating">
                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                            <span style="width:0%">
                                                                <strong class="rating">0</strong> out of 5</span>
                                                        </div>
                                                        <span class="review-count">(0)</span>
                                                    </div>
                                                    <!-- .techmarket-product-rating -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                    </div>
                                    <!-- .landscape-product -->
                                    <div class="landscape-product product">
                                        <a class="woocommerce-LoopProduct-link" href="{{route('product')}}">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/card-5.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> $3,788.00</span>
                                                        </ins>
                                                        <del>
                                                            <span class="amount">$4,780.00</span>
                                                        </del>
                                                        <span class="amount"> </span>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">Smart Watches 3 SWR50</h2>
                                                    <div class="techmarket-product-rating">
                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                            <span style="width:0%">
                                                                <strong class="rating">0</strong> out of 5</span>
                                                        </div>
                                                        <span class="review-count">(0)</span>
                                                    </div>
                                                    <!-- .techmarket-product-rating -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                    </div>
                                    <!-- .landscape-product -->
                                    <div class="landscape-product product">
                                        <a class="woocommerce-LoopProduct-link" href="{{route('product')}}">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/card-3.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> $3,788.00</span>
                                                        </ins>
                                                        <del>
                                                            <span class="amount">$4,780.00</span>
                                                        </del>
                                                        <span class="amount"> </span>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">PowerBank 4400</h2>
                                                    <div class="techmarket-product-rating">
                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                            <span style="width:0%">
                                                                <strong class="rating">0</strong> out of 5</span>
                                                        </div>
                                                        <span class="review-count">(0)</span>
                                                    </div>
                                                    <!-- .techmarket-product-rating -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                    </div>
                                    <!-- .landscape-product -->
                                    <div class="landscape-product product">
                                        <a class="woocommerce-LoopProduct-link" href="{{route('product')}}">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/card-1.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> $3,788.00</span>
                                                        </ins>
                                                        <del>
                                                            <span class="amount">$4,780.00</span>
                                                        </del>
                                                        <span class="amount"> </span>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">Unlocked Android 6″ Inch 4.4.2 Dual Core</h2>
                                                    <div class="techmarket-product-rating">
                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                            <span style="width:0%">
                                                                <strong class="rating">0</strong> out of 5</span>
                                                        </div>
                                                        <span class="review-count">(0)</span>
                                                    </div>
                                                    <!-- .techmarket-product-rating -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                    </div>
                                    <!-- .landscape-product -->
                                    <div class="landscape-product product">
                                        <a class="woocommerce-LoopProduct-link" href="{{route('product')}}">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/card-3.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> $3,788.00</span>
                                                        </ins>
                                                        <del>
                                                            <span class="amount">$4,780.00</span>
                                                        </del>
                                                        <span class="amount"> </span>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">PowerBank 4400</h2>
                                                    <div class="techmarket-product-rating">
                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                            <span style="width:0%">
                                                                <strong class="rating">0</strong> out of 5</span>
                                                        </div>
                                                        <span class="review-count">(0)</span>
                                                    </div>
                                                    <!-- .techmarket-product-rating -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                    </div>
                                    <!-- .landscape-product -->
                                    <div class="landscape-product product">
                                        <a class="woocommerce-LoopProduct-link" href="{{route('product')}}">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/card-6.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> </span>
                                                        </ins>
                                                        <span class="amount"> $600</span>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">ZenBook 3 Ultrabook 8GB 512SSD W10</h2>
                                                    <div class="techmarket-product-rating">
                                                        <div title="Rated 0 out of 5" class="star-rating">
                                                            <span style="width:0%">
                                                                <strong class="rating">0</strong> out of 5</span>
                                                        </div>
                                                        <span class="review-count">(0)</span>
                                                    </div>
                                                    <!-- .techmarket-product-rating -->
                                                </div>
                                                <!-- .media-body -->
                                            </div>
                                            <!-- .media -->
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                    </div>
                                    <!-- .landscape-product -->
                                </div>
                            </div>
                            <!-- .woocommerce -->
                        </div>
                        <!-- .container-fluid -->
                    </div>
                    <!-- .products-carousel -->
                </section>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .row -->
@endsection