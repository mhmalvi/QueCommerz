@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3">
                <user-sidebar />
            </div>

            <div class="col-md-9">
                <dashboard-component></dashboard-component>
            </div>
        </div>
    </div>
@endsection
