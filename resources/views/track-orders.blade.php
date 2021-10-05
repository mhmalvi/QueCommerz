@extends('layouts.app')

@section('title', 'Track Orders')

@section('content')
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="row">
                    <div class="col-md-3">
                        <user-sidebar />
                    </div>

                    <div class="col-md-9">
                        <track-orders />
                    </div>
                </div>
            </main>
        </div>
    </div>

@endsection
