<header id="masthead" class="site-header header-v1" style="background-image: none; ">
    <div class="col-full desktop-only">
        <div class="techmarket-sticky-wrap">
            <div class="row">
                <div class="site-branding">
                    <a href="{{route('quecommerz')}}" class="custom-logo-link" rel="home">
                        <img src="{{asset('assets/images/logo.png')}}" alt="" srcset="" style="max-width: 250px;">
                    </a>
                    <!-- /.custom-logo-link -->
                </div>
                <!-- /.site-branding -->
                <!-- ============================================================= End Header Logo ============================================================= -->
                <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
                    <ul id="menu-primary-menu" class="nav yamm mt-3">
                        <li class="menu-item menu-item-has-children animate-dropdown dropdown show">
                            <i class="fa fa-history" aria-hidden="true"></i>&nbsp;
                            <a title="Recently Viewed" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#" aria-expanded="true">
                                Recently Viewed <span class="caret"></span>
                            </a>
                            <ul role="menu" class="dropdown-menu py-2" x-placement="bottom-start" 
                            style="position: absolute; transform: translate3d(24px, 23px, 0px); top: 0px; left: 0px; will-change: transform; min-width: 20rem;">
                                @if (Session::has('recent_view'))
                                    @foreach (Session::get('recent_view')->items as $item)
                                        <li class="menu-item animate-dropdown">
                                            <a title="Wishlist p-0 clearfix" href="{{route('item', $item["slug"])}}">
                                                <img class="d-inline float-left mr-4" src="{{$item["thumbnail"]}}" alt="" width="50">
                                                <div class="px-3">
                                                    <span>{{$item["title"]}}</span>
                                                    <span class="d-block">${{$item["price"]}}</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                @else
                                    <li class="menu-item animate-dropdown text-center">
                                        No product viewed yet!
                                    </li> 
                                @endif
                            </ul>
                            <!-- .dropdown-menu -->
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="New Arrivals" href="{{route('shop')}}">
                                <i class="fa fa-bolt" aria-hidden="true"></i>&nbsp;
                                New Arrivals
                            </a>
                        </li>
                        <li class="sale-clr yamm-fw menu-item animate-dropdown">
                            <a title="Super deals" href="">
                                <i class="fa fa-superpowers" aria-hidden="true"></i>&nbsp;
                                Super deals
                            </a>
                        </li>
                    </ul>
                    <!-- .nav -->
                </nav>
                <!-- .primary-navigation -->
            </div>
            <!-- /.row -->
        </div>
        <!-- .techmarket-sticky-wrap -->
        <div class="row align-items-center">
            <div id="departments-menu" class="dropdown departments-menu">
                @if (Route::currentRouteName() == 'quecommerz')
                    @include('layouts.dept')
                @else
                    @include('layouts.deptCollapse')
                @endif
            </div>
            <!-- .departments-menu -->
            <form class="navbar-search" method="get" action="home-v1.html">
                <label class="sr-only screen-reader-text" for="search">Search for:</label>
                <div class="input-group">
                    <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
                    <div class="input-group-addon search-categories popover-header">
                        <select name='product_cat' id='product_cat' class='postform resizeselect'>
                            <option value selected='selected'>All Categories</option>
                        </select>
                    </div>
                    <!-- .input-group-addon -->
                    <div class="input-group-btn input-group-append">
                        <input type="hidden" id="search-param" name="post_type" value="product" />
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                            <span class="search-btn">Search</span>
                        </button>
                    </div>
                    <!-- .input-group-btn -->
                </div>
                <!-- .input-group -->
            </form>
            <!-- .navbar-search -->
            <ul class="header-compare nav navbar-nav">
                <li class="nav-item">
                    <a href="compare.html" class="nav-link">
                        <i class="tm tm-compare"></i>
                        <span id="top-cart-compare-count" class="value">0</span>
                    </a>
                </li>
            </ul>
            <!-- .header-compare -->
            <ul class="header-wishlist nav navbar-nav">
                <li class="nav-item">
                    <a href="{{route('wishlist')}}" class="nav-link">
                        <i class="tm tm-favorites"></i>
                        <span id="top-cart-wishlist-count" class="value">0</span>
                    </a>
                </li>
            </ul>
            <!-- .header-wishlist -->
            <mini-cart></mini-cart>
            <!-- .site-header-cart -->
        </div>
        <!-- /.row -->
    </div>
    <!-- .col-full -->
    <div class="col-full handheld-only">
        <div class="handheld-header">
            <div class="row">
                <div class="site-branding">
                    <a href="{{route('quecommerz')}}" class="custom-logo-link" rel="home">
                        <img src="{{asset('assets/images/logo.png')}}" alt="" srcset="">
                    </a>
                    <!-- /.custom-logo-link -->
                </div>
                <!-- /.site-branding -->
                <!-- ============================================================= End Header Logo ============================================================= -->
                <div class="handheld-header-links">
                    <ul class="columns-3">
                        <li class="my-account">
                            <a href="" class="has-icon">
                                <i class="tm tm-login-register"></i>
                            </a>
                        </li>
                        <li class="wishlist">
                            <a href="" class="has-icon">
                                <i class="tm tm-favorites"></i>
                                <span class="count">3</span>
                            </a>
                        </li>
                        <li class="compare">
                            <a href="" class="has-icon">
                                <i class="tm tm-compare"></i>
                                <span class="count">3</span>
                            </a>
                        </li>
                    </ul>
                    <!-- .columns-3 -->
                </div>
                <!-- .handheld-header-links -->
            </div>
            <!-- /.row -->
            <div class="techmarket-sticky-wrap">
                <div class="row">
                    <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                        <button class="btn navbar-toggler" type="button">
                            <i class="tm tm-departments-thin"></i>
                            <span>Menu</span>
                        </button>
                        <div class="handheld-navigation-menu">
                            @include('layouts.dept-mobile')
                        </div>
                        <!-- .handheld-navigation-menu -->
                    </nav>
                    <!-- .handheld-navigation -->
                    <div class="site-search">
                        <div class="widget woocommerce widget_product_search">
                            <form role="search" method="get" class="woocommerce-product-search" action="home-v1.html">
                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
                                <input type="submit" value="Search" />
                                <input type="hidden" name="post_type" value="product" />
                            </form>
                        </div>
                        <!-- .widget -->
                    </div>
                    <!-- .site-search -->
                    <a class="handheld-header-cart-link has-icon" href="{{route('cart')}}" title="View your shopping cart">
                        <i class="tm tm-shopping-bag"></i>
                        <span class="count">2</span>
                    </a>
                </div>
                <!-- /.row -->
            </div>
            <!-- .techmarket-sticky-wrap -->
        </div>
        <!-- .handheld-header -->
    </div>
    <!-- .handheld-only -->
</header>