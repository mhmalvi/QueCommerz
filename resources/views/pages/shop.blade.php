@extends('layouts.app')

@section('content')
    <div class="row">
        <nav class="woocommerce-breadcrumb">
            <a href="home-v1.html">Home</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>Shop
        </nav>
        <!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <!-- .shop-archive-header -->
                <div class="shop-control-bar">
                    <div class="handheld-sidebar-toggle">
                        <button type="button" class="btn sidebar-toggler">
                            <i class="fa fa-sliders"></i>
                            <span>Filters</span>
                        </button>
                    </div>
                    <!-- .handheld-sidebar-toggle -->
                    <h1 class="woocommerce-products-header__title page-title">Shop</h1>
                    <!-- .form-techmarket-wc-ppp -->
                    <form method="get" class="woocommerce-ordering">
                        <select class="orderby" name="orderby">
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option selected="selected" value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                        <input type="hidden" value="5" name="shop_columns">
                        <input type="hidden" value="15" name="shop_per_page">
                        <input type="hidden" value="right-sidebar" name="shop_layout">
                    </form>
                    <!-- .woocommerce-ordering -->
                </div>
                <!-- .shop-control-bar -->
                <div class="tab-content">
                    <div id="grid" class="tab-pane active" role="tabpanel">
                        <div class="woocommerce columns-5">
                            <div class="products">
                                @forelse ($products as $item)
                                    <div class="product first">
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <a href="" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                        </div>
                                        <!-- .yith-wcwl-add-to-wishlist -->
                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('item', $item->slug)}}">
                                            @if ($item->discount)
                                                <span class="onsale">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">
                                                            {{$item->discount()}}
                                                        </span>
                                                    </span>
                                                </span>
                                            @endif
                                            <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{$item->thumbnail}}">
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
                                            <h2 class="woocommerce-loop-product__title">{{$item->product}}</h2>
                                        </a>
                                        <!-- .woocommerce-LoopProduct-link -->
                                        <div class="hover-area">
                                            <a class="button" href="{{route('item', $item->slug)}}">View Product</a>
                                        </div>
                                        <!-- .hover-area -->
                                    </div>
                                @empty
                                    
                                @endforelse
                            </div>
                            <!-- .products -->
                        </div>
                        <!-- .woocommerce -->
                    </div>
                </div>
                <!-- .tab-content -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
        <div id="secondary" class="widget-area shop-sidebar" role="complementary">
            <div id="techmarket_product_categories_widget-2" class="widget woocommerce widget_product_categories techmarket_widget_product_categories">
                <ul class="product-categories category-single">
                    <li class="product_cat">
                        <ul class="show-all-cat">
                            <li class="product_cat">
                                <span class="show-all-cat-dropdown">
                                    {{Route::currentRouteName() == "shop" ? 'Browse By Categories' : 'Show all Categories'}}
                                </span>
                                <ul class="border-bottom-0">
                                    <li class="cat-item"><a href="product-category.html">All in One PC</a></li>
                                    <li class="cat-item"><a href="product-category.html">Audio & Music</a></li>
                                    <li class="cat-item"><a href="product-category.html">Cells & Tablets</a></li>
                                    <li class="cat-item"><a href="product-category.html">Computers & Laptops</a></li>
                                    <li class="cat-item"><a href="product-category.html">Desktop PCs</a></li>
                                    <li class="cat-item"><a href="product-category.html">Digital Cameras</a></li>
                                    <li class="cat-item"><a href="product-category.html">Games & Consoles</a></li>
                                    <li class="cat-item"><a href="product-category.html">Headphones</a></li>
                                    <li class="cat-item"><a href="product-category.html">Home Entertainment</a></li>
                                    <li class="cat-item"><a href="product-category.html">Home Theater & Audio</a></li>
                                    <li class="cat-item"><a href="product-category.html">Mac Computers</a></li>
                                    <li class="cat-item"><a href="product-category.html">Monitors</a></li>
                                    <li class="cat-item"><a href="product-category.html">Notebooks</a></li>
                                    <li class="cat-item"><a href="product-category.html">PC Components</a></li>
                                    <li class="cat-item"><a href="product-category.html">Printer</a></li>
                                    <li class="cat-item"><a href="product-category.html">Smartwatches</a></li>
                                    <li class="cat-item"><a href="product-category.html">Televisions</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- .product-categories -->
            </div>
            <div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
                <div class="widget woocommerce widget_price_filter" id="woocommerce_price_filter-2">
                    <span class="gamma widget-title mb-5">Filter by price</span>
                    <div class="range-wrap">
                        <div class="range-value" id="rangeV"></div>
                        <input id="range" type="range" min="200" max="800" value="200" step="1">
                    </div>
                </div>
                <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-2">
                    <span class="gamma widget-title">Brands</span>
                    <ul>
                        <li class="wc-layered-nav-term ">
                            <a href="#">apple</a>
                            <span class="count">(2)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">bosch</a>
                            <span class="count">(1)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">cannon</a>
                            <span class="count">(1)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">connect</a>
                            <span class="count">(1)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">galaxy</a>
                            <span class="count">(3)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">gopro</a>
                            <span class="count">(1)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">kinova</a>
                            <span class="count">(1)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">samsung</a>
                            <span class="count">(1)</span>
                        </li>
                    </ul>
                </div>
                <!-- .woocommerce widget_layered_nav -->
                <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-3">
                    <span class="gamma widget-title">Color</span>
                    <ul>
                        <li class="wc-layered-nav-term "><a href="#">Black</a>
                            <span class="count">(4)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">Blue</a>
                            <span class="count">(4)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">Green</a>
                            <span class="count">(5)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">Orange</a>
                            <span class="count">(5)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">Red</a>
                            <span class="count">(4)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">Yellow</a>
                            <span class="count">(5)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">Green</a>
                            <span class="count">(5)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">Orange</a>
                            <span class="count">(5)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">Red</a>
                            <span class="count">(4)</span>
                        </li>
                        <li class="wc-layered-nav-term "><a href="#">Yellow</a>
                            <span class="count">(5)</span>
                        </li>
                    </ul>
                </div>
                <!-- .woocommerce widget_layered_nav -->
            </div>
            <div class="widget widget_techmarket_products_carousel_widget">
                <section id="single-sidebar-carousel" class="section-products-carousel">
                    <header class="section-header">
                        <h2 class="section-title">Latest Products</h2>
                        <nav class="custom-slick-nav"></nav>
                    </header>
                    <!-- .section-header -->
                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#single-sidebar-carousel .custom-slick-nav&quot;}">
                        <div class="container-fluid">
                            <div class="woocommerce columns-1">
                                <div class="products">
                                    <div class="landscape-product-widget product">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/sm-1.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> 50.99</span>
                                                        </ins>
                                                        <del>
                                                            <span class="amount">26.99</span>
                                                        </del>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
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
                                    <div class="landscape-product-widget product">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/sm-2.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> 50.99</span>
                                                        </ins>
                                                        <del>
                                                            <span class="amount">26.99</span>
                                                        </del>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
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
                                    <div class="landscape-product-widget product">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/sm-3.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> 50.99</span>
                                                        </ins>
                                                        <del>
                                                            <span class="amount">26.99</span>
                                                        </del>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
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
                                    <div class="landscape-product-widget product">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                            <div class="media">
                                                <img class="wp-post-image" src="{{asset('assets/images/products/sm-4.jpg')}}" alt="">
                                                <div class="media-body">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> 50.99</span>
                                                        </ins>
                                                        <del>
                                                            <span class="amount">26.99</span>
                                                        </del>
                                                    </span>
                                                    <!-- .price -->
                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
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
                                </div>
                                <!-- .products -->
                            </div>
                            <!-- .woocommerce -->
                        </div>
                        <!-- .container-fluid -->
                    </div>
                    <!-- .products-carousel -->
                </section>
                <!-- .section-products-carousel -->
            </div>
            <!-- .widget_techmarket_products_carousel_widget -->
        </div>
        <!-- #secondary -->
    </div>
    <!-- .row -->
@endsection