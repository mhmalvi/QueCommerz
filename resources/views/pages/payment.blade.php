@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <form action="" method="post" onsubmit="false">
            <div class="row">
                <div class="col-md-7">
                    <div class="card mb-3 p-4">
                        <div class="card-body">
                            <h6 class="card-title text-center text-muted">Select Your Payment Option</h6>

                            <div class="py-3"></div>
                            <!-- Set up a container element for the button -->
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                </div>

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

                            <a href="{{route('confirm')}}" class="button wc-forward text-center w-100 mt-4">
                                Confirm order
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
              style: {
                height: 40,
                layout:  'vertical',
                color:   'blue',
                shape:   'rect',
                label:   'paypal'
            },

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '88.44'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    var transaction = orderData.purchase_units[0].payments.captures[0];
                    alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

                    // Replace the above to show a success message within this page, e.g.
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML = '<h3 class="text-center">Thank you for your payment!</h3>';
                    // url: actions.redirect('/order-confirm');
                });
            }


        }).render('#paypal-button-container');
    </script>
@endpush
