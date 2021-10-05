@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="row">
                    <div class="col-md-3">
                        <user-sidebar />
                    </div>

                    <div class="col-md-9">
                        <user-profile user_info="{{ auth()->user() }}"/>
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
