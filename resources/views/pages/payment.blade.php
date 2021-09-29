@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <form action="" method="post" onsubmit="false">
            <div class="row">
                {{-- <div class="col-md-7">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="card-title text-center text-muted">Select Your Payment Option</h6>
                        </div>
                    </div>
                </div> --}}

                <div class="col-md-5 mx-auto">
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
                                            <span>${{$item["TotalPrice"]}}</span>
                                        </div>
                                    </li>
                                @endforeach

                                <li class="list-group-item text-right">
                                    <table class="w-100">
                                        <tbody style="font-size: 15px;">
                                            <tr>
                                                <td class="text-right p-0">GST</td>
                                                <td class="text-right p-0">$0</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right p-0">Shipment</td>
                                                <td class="text-right p-0">$0</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right p-0">Net Payable</td>
                                                <td class="text-right p-0">${{$cart["SubTotal"]}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>

                            <a href="{{route('cart')}}" class="btn-link btn-sm text-right d-block">
                                <i class="fa fa-edit"></i>&nbsp;
                                Edit cart
                            </a>

                            <button type="button" class="button wc-forward text-center w-100 mt-4">
                                Confirm order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
