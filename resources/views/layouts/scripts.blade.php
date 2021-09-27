<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/hidemaxlistitem.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/hidemaxlistitem.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/scrollup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/waypoints-sticky.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

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
                    element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }


        }).render('#paypal-button-container');
    </script>
