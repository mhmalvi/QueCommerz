@extends('layouts.app')

@section('content')
    <div class="row">
        <nav class="woocommerce-breadcrumb">
            <a href="{{ route('quecommerz') }}">Home</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>{{ $product->product }}
        </nav>
        <!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="product product-type-simple">
                    <div class="single-product-wrapper">
                        <div class="product-images-wrapper thumb-count-4">
                            @if ($product->discount > 0)
                                <span class="onsale">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol"></span>
                                        {{ $product->discount() }}
                                    </span>
                                </span>
                            @endif
                            <!-- .onsale -->
                            <div id="techmarket-single-product-gallery"
                                class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images"
                                data-columns="4">
                                <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel"
                                    data-wrap=".woocommerce-product-gallery__wrapper"
                                    data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                        data-columns="4">
                                        <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                        <figure class="woocommerce-product-gallery__wrapper ">
                                            <div data-thumb="{{ $product->thumbnail }}"
                                                class="woocommerce-product-gallery__image">
                                                <a href="{{ $product->thumbnail }}" tabindex="0">
                                                    <img width="600" height="600" src="{{ $product->thumbnail }}"
                                                        class="attachment-shop_single size-shop_single wp-post-image"
                                                        alt="">
                                                </a>
                                            </div>
                                            @forelse ($product->productimages as $item)
                                                <div data-thumb="{{ $item->image }}"
                                                    class="woocommerce-product-gallery__image">
                                                    <a href="{{ $item->image }}" tabindex="0">
                                                        <img width="600" height="600" src="{{ $item->image }}"
                                                            class="attachment-shop_single size-shop_single wp-post-image"
                                                            alt="">
                                                    </a>
                                                </div>
                                            @empty

                                            @endforelse
                                        </figure>
                                    </div>
                                    <!-- .woocommerce-product-gallery -->
                                </div>
                                <!-- .techmarket-single-product-gallery-images -->
                                <div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel"
                                    data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper"
                                    data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                    <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                        <figure data-thumb="{{ $product->thumbnail }}"
                                            class="techmarket-wc-product-gallery__image">
                                            <img width="180" height="180" src="{{ $product->thumbnail }}"
                                                class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                        </figure>
                                        @forelse ($product->productimages as $item)
                                            <figure data-thumb="{{ $item->image }}"
                                                class="techmarket-wc-product-gallery__image">
                                                <img width="180" height="180" src="{{ $item->image }}"
                                                    class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                    alt="">
                                            </figure>
                                        @empty

                                        @endforelse
                                    </figure>
                                    <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                </div>
                                <!-- .techmarket-single-product-gallery-thumbnails -->
                            </div>
                            <!-- .techmarket-single-product-gallery -->
                        </div>
                        <!-- .product-images-wrapper -->
                        <div class="summary entry-summary">
                            <div class="single-product-header">
                                <h1 class="product_title entry-title">{{ $product->product }}</h1>
                                {{-- <a class="add-to-wishlist" href="wishlist.html"> Add to Wishlist</a> --}}
                            </div>
                            <!-- .single-product-header -->
                            <div class="single-product-meta">
                                <div class="brand">
                                    <a href="#">
                                        <img alt="galaxy" src="assets/images/brands/5.png">
                                    </a>
                                </div>
                                <div class="cat-and-sku">
                                    <span class="posted_in categories">
                                        <a rel="tag" href="product-category.html">TV &amp; Video</a>
                                    </span>
                                    <span class="sku_wrapper">SKU:
                                        <span class="sku">{{ $product->sku }}</span>
                                    </span>
                                </div>
                                @if ($product->status)
                                    <span class="badge badge-success p-2 font-weight-normal">
                                        In stock
                                    </span>
                                @else
                                    <span class="badge badge-danger p-2 font-weight-normal">
                                        Out of stock
                                    </span>
                                @endif

                            </div>
                            <!-- .single-product-meta -->
                            <div class="rating-and-sharing-wrapper">
                                <div class="woocommerce-product-rating">
                                    <div class="star-rating">
                                        <span style="width:100%">Rated
                                            <strong class="rating">5.00</strong> out of 5 based on
                                            <span class="rating">1</span> customer rating</span>
                                    </div>
                                    <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span
                                            class="count">1</span> customer review)</a>
                                </div>
                            </div>
                            <!-- .rating-and-sharing-wrapper -->
                            {{-- <div class="woocommerce-product-details__short-description">
                                <ul>
                                    <li>Multimedia Speakers</li>
                                    <li>120 watts peak</li>
                                    <li>Front-facing subwoofer</li>
                                    <li>Refresh Rate: 120Hz (Effective)</li>
                                    <li>Backlight: LED</li>
                                    <li>Smart Functionality: Yes, webOS 3.0</li>
                                    <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                </ul>
                            </div> --}}
                            <!-- .woocommerce-product-details__short-description -->
                            <div class="product-actions-wrapper">
                                <div class="product-actions">
                                    @if ($product->discount > 0)
                                        <p class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{ $product->price }}</span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{ $product->discounted() }}</span>
                                            </ins>
                                        </p>
                                    @else
                                        <p class="price">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{ $product->price }}</span>
                                            </ins>
                                        </p>
                                    @endif
                                    <!-- .single-product-header -->
                                    <form enctype="multipart/form-data" method="post" class="cart"
                                        action="{{ route('cart.store', $product->slug) }}">
                                        @csrf
                                        <div class="quantity">
                                            <label for="quantity-input">Quantity</label>
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1"
                                                name="quantity" id="quantity-input" min="1" max="5">
                                        </div>
                                        <!-- .quantity -->
                                        <button class="single_add_to_cart_button button alt" type="submit">
                                            Add to cart
                                            {{-- <i class="fa fa-spinner fa-spin"></i> --}}
                                        </button>
                                    </form>
                                    <!-- .cart -->
                                </div>
                                <!-- .product-actions -->
                            </div>
                            <!-- .product-actions-wrapper -->
                        </div>
                        <!-- .entry-summary -->
                    </div>
                    <!-- .single-product-wrapper -->
                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul role="tablist" class="nav tabs wc-tabs">
                            <li class="nav-item description_tab">
                                <a class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab-description"
                                    href="#tab-description">Description</a>
                            </li>
                            <li class="nav-item reviews_tab">
                                <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-reviews"
                                    href="#tab-reviews">Reviews (1)</a>
                            </li>
                        </ul>
                        <!-- /.ec-tabs -->
                        <div class="tab-content">
                            <div class="tab-pane panel wc-tab active" id="tab-description" role="tabpanel">
                                {!! $product->descriptions !!}
                            </div>
                            <div class="tab-pane" id="tab-reviews" role="tabpanel">
                                <div class="techmarket-advanced-reviews" id="reviews">
                                    <div class="advanced-review row">
                                        <div class="advanced-review-rating">
                                            <h2 class="based-title">Review (1)</h2>
                                            <div class="avg-rating">
                                                <span class="avg-rating-number">5.0</span>
                                                <div title="Rated 5.0 out of 5" class="star-rating">
                                                    <span style="width:100%"></span>
                                                </div>
                                            </div>
                                            <!-- /.avg-rating -->
                                            <div class="rating-histogram">
                                                <div class="rating-bar">
                                                    <div title="Rated 5 out of 5" class="star-rating">
                                                        <span style="width:100%"></span>
                                                    </div>
                                                    <div class="rating-count">1</div>
                                                    <div class="rating-percentage-bar">
                                                        <span class="rating-percentage" style="width:100%"></span>
                                                    </div>
                                                </div>
                                                <div class="rating-bar">
                                                    <div title="Rated 4 out of 5" class="star-rating">
                                                        <span style="width:80%"></span>
                                                    </div>
                                                    <div class="rating-count zero">0</div>
                                                    <div class="rating-percentage-bar">
                                                        <span class="rating-percentage" style="width:0%"></span>
                                                    </div>
                                                </div>
                                                <div class="rating-bar">
                                                    <div title="Rated 3 out of 5" class="star-rating">
                                                        <span style="width:60%"></span>
                                                    </div>
                                                    <div class="rating-count zero">0</div>
                                                    <div class="rating-percentage-bar">
                                                        <span class="rating-percentage" style="width:0%"></span>
                                                    </div>
                                                </div>
                                                <div class="rating-bar">
                                                    <div title="Rated 2 out of 5" class="star-rating">
                                                        <span style="width:40%"></span>
                                                    </div>
                                                    <div class="rating-count zero">0</div>
                                                    <div class="rating-percentage-bar">
                                                        <span class="rating-percentage" style="width:0%"></span>
                                                    </div>
                                                </div>
                                                <div class="rating-bar">
                                                    <div title="Rated 1 out of 5" class="star-rating">
                                                        <span style="width:20%"></span>
                                                    </div>
                                                    <div class="rating-count zero">0</div>
                                                    <div class="rating-percentage-bar">
                                                        <span class="rating-percentage" style="width:0%"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.rating-histogram -->
                                        </div>
                                        <!-- /.advanced-review-rating -->
                                        <div class="advanced-review-comment">
                                            <div id="review_form_wrapper">
                                                <div id="review_form">
                                                    <div class="comment-respond" id="respond">
                                                        <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                        <form novalidate="" class="comment-form" id="commentform"
                                                            method="post" action="#">
                                                            <div class="comment-form-rating">
                                                                <label>Your Rating</label>
                                                                <p class="stars">
                                                                    <span><a href="#" class="star-1">1</a><a
                                                                            href="#" class="star-2">2</a><a
                                                                            href="#" class="star-3">3</a><a
                                                                            href="#" class="star-4">4</a><a
                                                                            href="#" class="star-5">5</a></span>
                                                                </p>
                                                            </div>
                                                            <p class="comment-form-comment">
                                                                <label for="comment">Your Review</label>
                                                                <textarea aria-required="true" rows="8" cols="45"
                                                                    name="comment" id="comment"></textarea>
                                                            </p>
                                                            <p class="comment-form-author">
                                                                <label for="author">Name
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <input type="text" aria-required="true" size="30" value=""
                                                                    name="author" id="author">
                                                            </p>
                                                            <p class="comment-form-email">
                                                                <label for="email">Email
                                                                    <span class="required">*</span>
                                                                </label>
                                                                <input type="text" aria-required="true" size="30" value=""
                                                                    name="email" id="email">
                                                            </p>
                                                            <p class="form-submit">
                                                                <input type="submit" value="Add Review"
                                                                    class="submit" id="submit" name="submit">
                                                                <input type="hidden" id="comment_post_ID" value="185"
                                                                    name="comment_post_ID">
                                                                <input type="hidden" value="0" id="comment_parent"
                                                                    name="comment_parent">
                                                            </p>
                                                        </form>
                                                        <!-- /.comment-form -->
                                                    </div>
                                                    <!-- /.comment-respond -->
                                                </div>
                                                <!-- /#review_form -->
                                            </div>
                                            <!-- /#review_form_wrapper -->
                                        </div>
                                        <!-- /.advanced-review-comment -->
                                    </div>
                                    <!-- /.advanced-review -->
                                    <div id="comments">
                                        <ol class="commentlist">
                                            <li id="li-comment-83"
                                                class="comment byuser comment-author-admin bypostauthor even thread-even depth-1">
                                                <div class="comment_container" id="comment-83">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <span style="width:100%">Rated
                                                                <strong class="rating">5</strong> out of 5</span>
                                                        </div>
                                                        <p class="meta">
                                                            <strong itemprop="author"
                                                                class="woocommerce-review__author">first last</strong>
                                                            <span class="woocommerce-review__dash">&ndash;</span>
                                                            <time datetime="2017-06-21T08:05:40+00:00"
                                                                itemprop="datePublished"
                                                                class="woocommerce-review__published-date">June 21,
                                                                2017</time>
                                                        </p>
                                                        <div class="description">
                                                            <p>Wow great product</p>
                                                        </div>
                                                        <!-- /.description -->
                                                    </div>
                                                    <!-- /.comment-text -->
                                                </div>
                                                <!-- /.comment_container -->
                                            </li>
                                            <!-- /.comment -->
                                        </ol>
                                        <!-- /.commentlist -->
                                    </div>
                                    <!-- /#comments -->
                                </div>
                                <!-- /.techmarket-advanced-reviews -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .product -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
        <div id="secondary" class="widget-area shop-sidebar" role="complementary">
            <div id="techmarket_product_categories_widget-2"
                class="widget woocommerce widget_product_categories techmarket_widget_product_categories">
                <ul class="product-categories category-single">
                    <li class="product_cat">
                        <ul class="show-all-cat">
                            <li class="product_cat">
                                <span class="show-all-cat-dropdown">Show All Categories</span>
                                <ul>
                                    <li class="cat-item"><a href="product-category.html">All in One PC</a></li>
                                    <li class="cat-item"><a href="product-category.html">Audio & Music</a></li>
                                    <li class="cat-item"><a href="product-category.html">Cells & Tablets</a></li>
                                    <li class="cat-item"><a href="product-category.html">Computers & Laptops</a></li>
                                    <li class="cat-item"><a href="product-category.html">Desktop PCs</a></li>
                                    <li class="cat-item"><a href="product-category.html">Digital Cameras</a></li>
                                    <li class="cat-item"><a href="product-category.html">Games & Consoles</a></li>
                                    <li class="cat-item"><a href="product-category.html">Headphones</a></li>
                                    <li class="cat-item"><a href="product-category.html">Home Entertainment</a></li>
                                    <li class="cat-item"><a href="product-category.html">Home Theater & Audio</a>
                                    </li>
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
                        <ul>
                            <li class="cat-item current-cat"><a href="product-category.html">TV &amp; Video</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- .product-categories -->
            </div>
            <!-- .techmarket_widget_product_categories -->
            <div class="widget widget_techmarket_products_carousel_widget">
                <section id="single-sidebar-carousel" class="section-products-carousel">
                    <header class="section-header">
                        <h2 class="section-title">Latest Products</h2>
                        <nav class="custom-slick-nav"></nav>
                    </header>
                    <!-- .section-header -->
                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products"
                        data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#single-sidebar-carousel .custom-slick-nav&quot;}">
                        <div class="container-fluid">
                            <div class="woocommerce columns-1">
                                <div class="products">
                                    <div class="landscape-product-widget product">
                                        <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html">
                                            <div class="media">
                                                <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
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
                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth
                                                        Speaker – Neon Green</h2>
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
                                                <img class="wp-post-image" src="assets/images/products/sm-2.jpg" alt="">
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
                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth
                                                        Speaker – Neon Green</h2>
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
                                                <img class="wp-post-image" src="assets/images/products/sm-3.jpg" alt="">
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
                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth
                                                        Speaker – Neon Green</h2>
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
                                                <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
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
                                                    <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth
                                                        Speaker – Neon Green</h2>
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
    </div>
    <!-- .row -->
@endsection
