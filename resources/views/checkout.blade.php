{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Splash' Shop</title>


       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

       <!-- Styles -->
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
            <header>
                <div class="top-nav container pt-2">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">SPLASH</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
                        </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav my-2 my-lg-0 ml-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="#">Shop</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cart</a>
                            </li>
                        </ul>
                        </div>
                    </nav>
                </div> <!-- end top-nav -->
        </header> <!-- end header -->
        <section class="breadSearch pt-5 pb-3">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Shopping Cart</a></li>
                                    <li class="breadcrumb-item active">Checkout</li>
                                </ul>
                            </nav> <!-- end nav -->
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-sm-12">
                        <h1>Checkout</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-8">
                        <form>
                            <p class="font-weight-bold">Billing Details</p>
                            <div class="form-group">
                              <label for="inputEmail">Email address</label>
                              <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="inputName">Name</label>
                              <input type="text" class="form-control" id="inputName" placeholder="Enter name">
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity" placeholder="Enter city">
                                </div>
                                <div class="form-group col">
                                    <label for="inputProvince">Province</label>
                                    <input type="text" class="form-control" id="inputProvince" placeholder="Enter province">
                                </div>
                            </div> <!-- end row -->
                            <div class="row">
                                <div class="form-group col">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Enter address">
                                  </div>
                                  <div class="form-group col">
                                      <label for="inputPostalCode">Postal Code</label>
                                      <input type="text" class="form-control" id="inputPostalCode" placeholder="Enter postal code">
                                  </div>
                            </div> <!-- end row -->
                            <div class="form-group">
                                <label for="inputPhone">Phone</label>
                                <input type="tel" class="form-control" id="inputPhone" placeholder="Enter phone">
                            </div>
                            <p class="font-weight-bold">Payment Details</p>
                            <div class="form-group">
                                <label for="inputCardName">Card Name</label>
                                <input type="tel" class="form-control" id="inputCardName" placeholder="Enter card name">
                            </div>
                            <div class="form-group">
                                <label for="inputCreditCard">Credit Card</label>
                                <input type="tel" class="form-control" id="inputCreditCard" placeholder="Enter credit card">
                            </div>
                            <a href="#"  type="button" class="btn btn-lg btn-outline-light font-weight-bold btn-rounded orderComplete mb-5">Complete order</a>
                        </form> <!-- end form -->
                    </div>
                    <div class="col-sm-12 col-lg-4 yourOrder">
                        <p class="font-weight-bold">Your Order</p>
                        <div class="detailsProduct border border-y-secondary">
                            <div class="row text-center py-4">
                                <div class="col-sm-6">
                                    <img src="img/laptop.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                                </div>
                                <div class="col-sm-6">
                                    <p class="product name font-weight-bold mb-2">Laptop</p>
                                    <p class="text-secondary">15 inch, 1TB SSD, 16GB RAM</p>
                                    <h2 class="product price">3.500 Lei</h2>
                                </div>
                            </div>
                        </div> <!-- end detailsProduct-->
                        <div class="total p-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Subtotal: 3.500 Lei</p>
                                    <p>TAX: 150 Lei</p>
                                    <h2 class="font-weight-bolder">Total 3.650 Lei</h2>
                                </div>
                            </div>
                        </div> <!-- end total-->
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                            <h5 class="my-2 font-weight-bold">Register for free</h5>
                            <a href="#"  type="button" class="btn btn-lg btn-outline-light font-weight-bold btn-rounded">Sign up!</a>
                    </div>
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-md-12 pt-3">
                        <div class="mb-2 text-center">
                            <a href="#" class="fb-ic">
                                <i class="fa fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a href="#" class="tw-ic">
                                <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a href="#" class="ins-ic">
                                <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a href="#" class="pin-ic">
                                <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
                            </a>
                        </div>
                    </div>

                </div> <!-- end row-->

            </div> <!-- end container-->

            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="#" class="font-weight-bold"> SPLASHCorp.com</a>
            </div> <!-- end copyright -->


        </footer> <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>

    </body>
</html> --}}

@extends('master')

<script src="https://js.stripe.com/v3/"></script>

@section('breadcrumbs')
    <section class="breadSearch pt-5 pb-3">
        <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <nav>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('cart.index') }}">Shopping Cart</a></li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ul>
                        </nav> <!-- end nav -->
                    </div>
                    @include('partials.search')
                </div>
            </div>
    </section>
@endsection
@section('featured')
    <section>
        <div class="container">

            @if (session()->has('success_message'))
                <div class="mb-3"></div>
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="mb-3"></div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row mt-5">
                <div class="col-sm-12">
                    <h1>Checkout</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-8">
                    <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                        {{ csrf_field() }}
                        <p class="font-weight-bold">Billing Details</p>
                        <div class="form-group">
                        <label for="email">Email address</label>
                        @if (auth()->user())
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ auth()->user()->email }}" readonly>
                        @else
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" required>
                        @endif

                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') }}" required>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" id="city" placeholder="Enter city" value="{{ old('city') }}" required>
                            </div>
                            <div class="form-group col">
                                <label for="province">Province</label>
                                <input type="text" name="province" class="form-control" id="province" placeholder="Enter province" value="{{ old('province') }}" required>
                            </div>
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="form-group col">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Enter address" value="{{ old('address') }}" required>
                            </div>
                            <div class="form-group col">
                                <label for="postalCode">Postal Code</label>
                                <input type="text" name="postalCode" class="form-control" id="postalCode" placeholder="Enter postal code" value="{{ old('postalCode') }}" required>
                            </div>
                        </div> <!-- end row -->
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter phone" value="{{ old('phone') }}" required>
                        </div>
                        <p class="font-weight-bold">Payment Details</p>
                        <div class="form-group">
                            <label for="cardName">Card Name</label>
                            <input type="text" name="cardName" class="form-control" id="cardName" placeholder="Enter card name">
                        </div>
                        <div class="form-group">
                            {{-- <label for="inputCreditCard">Credit Card</label>
                            <input type="tel" class="form-control" id="inputCreditCard" placeholder="Enter credit card"> --}}
                            <label for="card-element">
                                Credit or debit card
                              </label>
                              <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                              </div>

                              <!-- Used to display form errors. -->
                              <div id="card-errors" role="alert"></div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-outline-light font-weight-bold btn-rounded orderComplete mb-5" id="complete-order">Complete order</button>
                    </form> <!-- end form -->
                </div>
                <div class="col-sm-12 col-lg-4 yourOrder">
                    <p class="font-weight-bold">Your Order</p>
                    <div class="detailsProduct border border-y-secondary">
                        @foreach(Cart::content() as $item)
                        <div class="row text-center py-4 px-2">
                            <div class="col-sm-6">
                                {{-- <img src="{{ asset('img/products/'.$item->model->slug. '.png')  }}" style='height: 80%; width: 80%; object-fit: contain' alt="product"> --}}
                                <img src="{{ productImage($item->model->image) }}" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                            </div>
                            <div class="col-sm-6">
                                <p class="product name font-weight-bold mb-2">{{ $item->model->name}} </p>
                                <p class="text-secondary">{{ $item->model->details }}</p>
                                <h2 class="product price">{{ $item->model->formatPrice() }}</h2>
                                <div class="quantity border border-primary">{{ $item->qty }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div> <!-- end detailsProduct-->
                    <div class="total p-4">
                        <div class="row">
                            {{-- <div class="col-sm-12">
                                <p><strong>Subtotal:</strong>  {{ Cart::subtotal() }} Lei</p>
                                @if (session()->has('coupon'))
                                    <div class="d-flex">
                                        <p><strong>Discount ({{ session()->get('coupon')['name'] }}) :</strong>  -{{ session()->get('coupon')['discount'] }} Lei</p>
                                        <p><strong>Discount ({{ session()->get('coupon.name') }}) :</strong>  -{{ session()->get('coupon.discount') }} Lei</p>
                                        <form action="{{ route('coupon.destroy') }}" method="POST" class="ml-2">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit">Remove</button>
                                        </form>
                                    </div>
                                    <hr>
                                    <p><strong>New Subtotal:</strong>sfee</p>
                                @endif
                                <p><strong>TAX:</strong>  {{ Cart::tax() }} Lei</p>
                                <h2 class="font-weight-bolder">Total: {{ Cart::total() }} Lei</h2>
                            </div> --}}
                            <div class="col-sm-12">
                                <p><strong>Subtotal:</strong>  {{ Cart::subtotal() }} Lei</p>
                                @if (session()->has('coupon'))
                                    <div class="d-flex">
                                        {{-- <p><strong>Discount ({{ session()->get('coupon')['name'] }}) :</strong>  -{{ session()->get('coupon')['discount'] }} Lei</p> --}}
                                        <p><strong>Discount ({{ session()->get('coupon.name') }}) :</strong>  -{{ $discount }} Lei</p>
                                        <form action="{{ route('coupon.destroy') }}" method="POST" class="ml-2">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit">Remove</button>
                                        </form>
                                    </div>
                                    <hr>
                                    <p><strong>New Subtotal:</strong>{{ $newSubtotal }}</p>
                                @endif
                                <p><strong>TAX:</strong>  {{ $newTax }} Lei</p>
                                <h2 class="font-weight-bolder">Total: {{ $newTotal }} Lei</h2>
                            </div>
                        </div>
                    </div> <!-- end total-->
                    @if(!session()->has('coupon'))
                        <h4 class="mt-3 text-center">Do you have a coupon?</h4>
                        <div class="coupon p-4 text-center">
                                <form action="{{ route('coupon.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="text" name="coupon_code" id="coupon_code">
                                    <button type="submit" class="button button-primary">Apply</button>
                                </form>
                        </div> <!-- end coupon-->
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@section('extra-js')
    <script>
        (function(){
            // Create a Stripe client.
var stripe = Stripe('pk_test_51HvmKWHS9A7kxjRu0iTlMeCVIgkfBOhBKKKegD1GSSKfOgKDcyn91bpBHdoweiUPUD2FbCn5FyE8FRH7VxPtBlfi00RQD8HwbL');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Roboto", "Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
                });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
            event.preventDefault();

            //Disable the submit button to prevent repeated clicks
            document.getElementById('complete-order').disabled = true;

            var options = {
                name: document.getElementById('cardName').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalCode').value
              }

            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                //Enable the submit button
                document.getElementById('complete-order').disabled = false;

                } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
                }
            });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
            }
        })();
    </script>
@endsection
