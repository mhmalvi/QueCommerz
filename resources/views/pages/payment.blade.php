@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-7">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="card-title text-center text-muted">Select Your Payment Option</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <h6 class="card-title text-center text-muted">Cart Summary</h6>

                            <ul class="list-group m-0">
                                @foreach ($cart["Products"] as $item)
                                    <li class="list-group-item" style="line-height: 1rem">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="">
                                                {{$item["Title"]}}
                                                x
                                                <small>{{$item["Quantity"]}}</small>
                                            </a>
                                            <small>${{$item["TotalPrice"]}}</small>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <button type="submit" class="button wc-forward text-center w-100 mt-4">
                                Confirm order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
