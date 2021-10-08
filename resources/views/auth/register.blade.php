@extends('layouts.app')

@section('title', 'Sign up')

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
                                <h2>Register</h2>
                                <form class="register" method="post" action="{{ route('register.store') }}">
                                    @csrf
                                    <p class="before-register-text">
                                        Create new account today to reap the benefits of a personalized
                                        shopping experience.
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <label for="reg_name">
                                            Name<span class="required">*</span>
                                        </label>
                                        <input type="text" name="name"
                                            class="woocommerce-Input woocommerce-Input--text input-text"
                                            value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                        @endif
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <label for="reg_email">Email address
                                            <span class="required">*</span>
                                        </label>
                                        <input type="email" value="{{ old('email') }}" id="reg_email" name="email"
                                            class="woocommerce-Input woocommerce-Input--text input-text">
                                        @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <label for="reg_password">Password
                                            <span class="required">*</span>
                                        </label>
                                        <input type="password" id="reg_password" name="password"
                                            class="woocommerce-Input woocommerce-Input--text input-text">
                                        @if ($errors->has('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                        @endif
                                    </p>
                                    <p class="form-row form-row-wide">
                                        <label for="reg_password_confirmation">Password Confirmation
                                            <span class="required">*</span>
                                        </label>
                                        <input type="password" id="reg_password_confirmation" name="password_confirmation"
                                            class="woocommerce-Input woocommerce-Input--text input-text">
                                        @if ($errors->has('password_confirmation'))
                                            <p class="text-danger">
                                                {{ $errors->first('password_confirmation') }}</p>
                                        @endif
                                    </p>
                                    <p class="form-row mt-4">
                                        <button type="submit" class="btn btn-block btn-primary">Sign
                                            up</button>
                                    </p>
                                </form>
                                <!-- .register -->
                                <p>
                                    or <a class="text-danger" href="{{ route('login') }}">Sign
                                        in</a> instead
                                </p>
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
