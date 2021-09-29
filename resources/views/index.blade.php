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
                                    @forelse ($products as $item)
                                        <div class="product">
                                            <a href="{{route('item', $item->slug)}}" class="woocommerce-LoopProduct-link">
                                                @if ($item->discount)
                                                    <span class="onsale">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">
                                                                {{$item->discount()}}
                                                            </span>
                                                        </span>
                                                    </span>
                                                @endif
                                            <img
                                                src="{{$item->thumbnail}}"
                                                width="224"
                                                height="197"
                                                class="wp-post-image"
                                                alt=""
                                            />

                                            @if ($item->discount > 0)
                                                <span class="price">
                                                    <ins>
                                                        <span class="amount">${{$item->discounted()}}</span>
                                                    </ins>
                                                    <del>
                                                        <span class="amount">${{$item->price}}</span>
                                                    </del>
                                                    <span class="amount"> </span>
                                                </span>
                                            @else
                                                <span class="price">
                                                    <ins>
                                                        <span class="amount">${{$item->price}}</span>
                                                    </ins>
                                                    <span class="amount"></span>
                                                </span>
                                                <!-- /.price -->
                                            @endif
                                            <h2 class="woocommerce-loop-product__title">
                                                {{$item->product}}
                                            </h2>
                                            </a>
                                            <div class="hover-area">
                                            <a class="button add_to_cart_button" href="{{route('item', $item->slug)}}" rel="nofollow"
                                                >View Product</a
                                            >
                                            </div>
                                        </div>
                                        <!-- /.product-outer -->
                                    @empty
                                        
                                    @endforelse
                                </div>
                            </div>
                            <!-- .woocommerce-->
                        </div>
                        <!-- .container-fluid -->
                    </div>
                    <!-- .products-carousel -->
                </section>

                {{-- Recently Viewed --}}
                @if (Session::has('recent_view'))
                    <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
                        <header class="section-header">
                            <h2 class="section-title">Recently viewed products</h2>
                            <nav class="custom-slick-nav"></nav>
                        </header>
                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#recently-viewed .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                            <div class="container-fluid">
                                <div class="woocommerce columns-5">
                                    <div class="products">
                                        @foreach (Session::get('recent_view')->items as $item)
                                            <div class="landscape-product product">
                                                <a class="woocommerce-LoopProduct-link" href="{{route('item', $item["slug"])}}">
                                                    <div class="media">
                                                        <img class="wp-post-image" src="{{$item["thumbnail"]}}" alt="">
                                                        <div class="media-body">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> ${{$item["price"]}}</span>
                                                            </span>
                                                            <!-- .price -->
                                                            <h2 class="woocommerce-loop-product__title">{{$item["title"]}}</h2>
                                                            {{-- <div class="techmarket-product-rating">
                                                                <div title="Rated 0 out of 5" class="star-rating">
                                                                    <span style="width:0%">
                                                                        <strong class="rating">0</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(0)</span>
                                                            </div> --}}
                                                            <!-- .techmarket-product-rating -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </a>
                                                <!-- .woocommerce-LoopProduct-link -->
                                            </div>
                                            <!-- .landscape-product -->
                                        @endforeach
                                    </div>
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .container-fluid -->
                        </div>
                        <!-- .products-carousel -->
                    </section>
                @endif

                {{-- Features --}}
                
                <div class="features-list">
                    <div class="features">
                        <div class="feature">
                            <div class="media">
                                <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                <div class="media-body feature-text">
                                    <h5 class="mt-0">Free Delivery</h5>
                                    <span>from $50</span>
                                </div>
                            </div>
                        </div>
                        <!-- .feature -->
                        <div class="feature">
                            <div class="media">
                                <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                <div class="media-body feature-text">
                                    <h5 class="mt-0">99% Customer</h5>
                                    <span>Feedbacks</span>
                                </div>
                            </div>
                            <!-- .media -->
                        </div>
                        <!-- .feature -->
                        <div class="feature">
                            <div class="media">
                                <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                <div class="media-body feature-text">
                                    <h5 class="mt-0">365 Days</h5>
                                    <span>for free return</span>
                                </div>
                            </div>
                            <!-- .media -->
                        </div>
                        <!-- .feature -->
                        <div class="feature">
                            <div class="media">
                                <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                <div class="media-body feature-text">
                                    <h5 class="mt-0">Payment</h5>
                                    <span>Secure System</span>
                                </div>
                            </div>
                            <!-- .media -->
                        </div>
                        <!-- .feature -->
                        <div class="feature">
                            <div class="media">
                                <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                <div class="media-body feature-text">
                                    <h5 class="mt-0">Only Best</h5>
                                    <span>Brands</span>
                                </div>
                            </div>
                            <!-- .media -->
                        </div>
                        <!-- .feature -->
                    </div>
                    <!-- .features -->
                </div>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .row -->
@endsection