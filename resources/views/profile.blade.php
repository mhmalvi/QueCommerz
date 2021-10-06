@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <user-sidebar />
            </div>

            <div class="col-md-9">
                <user-profile user_info="{{ auth()->user() }}"/>
            </div>
        </div>
    </div>
@endsection
