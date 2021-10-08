@extends('layouts.app')

@section('title', 'Sign in')

@section('content')
    <div class="row">
        <nav class="woocommerce-breadcrumb">
            <a href="">Home</a>
            <span class="delimiter">
                <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>My Account
        </nav>
        <!-- .woocommerce-breadcrumb -->
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="row mx-2">
                    <div class="col-md-4 mx-auto">
                        <div class="card p-3">
                            <div class="card-body">
                                <h2 class="text-center">Login</h2>
                                <form method="post" class="woocomerce-form woocommerce-form-login login"
                                    action="{{ route('login.store') }}">
                                    @csrf
                                    <p class="before-login-text text-center">
                                        It's very nice to see you again. Sign in now to start your session
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <label for="email">email address
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="input-text" name="email" id="email" value="" required
                                            autofocus />
                                        @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}
                                            </p>
                                        @endif
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <label for="password">Password
                                            <span class="required">*</span>
                                        </label>
                                        <input class="input-text" type="password" name="password" id="password" required
                                            autocomplete="current-password" />
                                        @if ($errors->has('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}
                                            </p>
                                        @endif
                                    </p>
                                    <p class="form-row mt-3">
                                        <button type="submit" class="btn btn-block btn-primary">Sign
                                            in</button>
                                    </p>
                                    {{-- <p class="woocommerce-LostPassword lost_password">
                                                        <a href="#">Lost your password?</a>
                                                    </p> --}}
                                    <p>
                                        Do not have any account? <a class="text-danger"
                                            href="{{ route('register') }}">Sign up</a> now
                                    </p>
                                </form>
                                <!-- .woocommerce-form-login -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->
    </div>
    <!-- .row -->
@endsection
