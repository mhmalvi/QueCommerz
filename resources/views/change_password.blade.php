@extends('layouts.app')

@section('title', 'Change password')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3">
                <user-sidebar />
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <change-password user_info="{{ auth()->user() }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
