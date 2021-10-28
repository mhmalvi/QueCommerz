@extends('layouts.app')

@section('content')
    <div class="row">
        <nav class="woocommerce-breadcrumb">
            <a href="home-v1.html">Home</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>Error 404
        </nav>
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="error404">
                    <div class="info-404">
                        <h2 class="title">404!</h2>
                        <p class="lead error-text">Oops! That page can’t be found.</p>
                        <p class="lead">Nothing was found at this location.</p>
                        <div class="sub-form-row">
                            <a href="{{route('quecommerz')}}" class="button">
                                <i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>
                                Continue Shopping
                            </a>
                        </div>
                    </div>
                    <!-- .sub-form-row -->
                </div>
                <!-- .error404 -->
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
@endsection
