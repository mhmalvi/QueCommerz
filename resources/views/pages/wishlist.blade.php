@extends('layouts.app')

@section('content')
    <div class="row">
        <nav class="woocommerce-breadcrumb">
            <a href="home-v1.html">Home</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>
            Wishlist
        </nav>
        <!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="type-page hentry">
                    <header class="entry-header">
                        <div class="page-header-caption">
                            <h1 class="entry-title">Wishlist</h1>
                        </div>
                    </header>
                    <!-- .entry-header -->
                    <wishlist-component wishlist_data="{{ $wishlist }}"/>
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