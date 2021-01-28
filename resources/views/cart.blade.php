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
                                    <li class="breadcrumb-item active">Shopping Cart</li>
                                </ul>
                            </nav> <!-- end nav -->
                        </div>
                    </div>
                </div>
        </section>
        <section class="cartDescription mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-8">
                        <div class="card my-5">
                            <h2 class="font-weight-bold p-3">
                                1 Item in shopping cart
                            </h2>
                            <div class="detailsProduct border border-y-secondary">
                                <div class="row text-center py-4">
                                    <div class="col-sm-4">
                                        <img src="img/laptop.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="product name font-weight-bold mb-2">Laptop</p>
                                        <p class="text-secondary">15 inch, 1TB SSD, 16GB RAM</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="mr-2"><a href="">Remove</a></p>
                                        <h2 class="product price">3.500 Lei</h2>
                                        <select name="options" id="options">
                                            <option value="one">1</option>
                                            <option value="two">2</option>
                                            <option value="three">3</option>
                                            <option value="four">4</option>
                                          </select>
                                    </div>
                                </div>
                            </div> <!-- end detailsProduct-->
                            <div class="total p-4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-8">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat rerum, sequi corporis consequatur expedita fuga facere quae voluptas sunt. Ipsa!</p>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <p>Subtotal: 3.500 Lei</p>
                                        <p>TAX: 150 Lei</p>
                                        <h2 class="font-weight-bolder">Total 3.650 Lei</h2>
                                    </div>
                                </div>
                            </div> <!-- end total-->
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <a href="#"  type="button" class="btn btn-lg btn-outline-dark font-weight-bold">Continue Shopping</a>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <a href="#"  type="button" class="btn btn-lg proceedButton font-weight-bold">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8"></div>
                </div>
            </div>
        </section>

        <section class="alike">
            <div class="container">
                <div class="row pt-4">
                    <div class="col-sm-12 text-center">
                        <h2 class="font-weight-bold text-uppercase">
                            You might also like
                        </h2>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-sm-5">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="img/cellphone.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                    <p class="product name font-weight-bold mb-0 my-0">Phone</p>
                                    <p class="product price ">3.500 Lei</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-sm-5">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="img/cellphone.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                    <p class="product name font-weight-bold mb-0 my-0">Phone</p>
                                    <p class="product price ">3.500 Lei</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-sm-5">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="img/cellphone.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                    <p class="product name font-weight-bold mb-0 my-0">Phone</p>
                                    <p class="product price ">3.500 Lei</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-sm-5">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="img/cellphone.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                    <p class="product name font-weight-bold mb-0 my-0">Phone</p>
                                    <p class="product price ">3.500 Lei</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section> <!-- end alike section -->

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


@section('breadcrumbs')
    <section class="breadSearch pt-5 pb-3">
        <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <nav>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Shopping Cart</li>
                            </ul>
                        </nav> <!-- end nav -->
                    </div>
                    @include('partials.search')
                </div>
            </div>
    </section>
@endsection
@section('featured')
    <section class="cartDescription mb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-8">
                    <div class="card my-5">
                        <!-- I am not sure -->
                        @if (session()->has('success_message'))
                            <div class="alert alert-success">
                                {{ session()->get('success_message') }}
                            </div>
                        @endif

                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(Cart::count() > 0)
                            <h2 class="font-weight-bold p-3">
                                {{ Cart::count() }} Item(s) in shopping cart
                            </h2>



                        @foreach(Cart::content() as $item)
                            <div class="detailsProduct border border-y-secondary cart-body">
                                <div class="row text-center py-4">
                                    <div class="col-sm-4">
                                        <a href="{{ route('shop.show', $item->model->slug ) }}">
                                            {{-- <img src="{{ asset('img/products/'.$item->model->slug. '.png')  }}" style='height: 80%; width: 80%; object-fit: contain' alt="product"> --}}
                                            <img src="{{ productImage($item->model->image) }}" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="{{ route('shop.show', $item->model->slug ) }}"><p class="product name font-weight-bold mb-2">{{ $item->model->name }}</p></a>
                                        <p class="text-secondary">{{ $item->model->details }}</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="cart-options">Remove</button>
                                        </form>
                                        <form action="{{ route('cart.saveForLater', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            <button type="submit" class="cart-options mt-2">Save For Later</button>
                                        </form>
                                        {{-- <h2 class="product price">{{ $item->model->formatPrice() }}</h2> --}}
                                        <h2 class="product price">{{ $item->subtotal }} Lei</h2>
                                        <select name="options" id="options" class="qty" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                            @for($i =1; $i < 5; $i++)
                                            <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div> <!-- end detailsProduct-->
                        @endforeach
                        <div class="total p-4">
                            <div class="row">
                                <div class="col-sm-12 col-md-8">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat rerum, sequi corporis consequatur expedita fuga facere quae voluptas sunt. Ipsa!</p>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <p>Subtotal: {{ Cart::subtotal() }} Lei</p>
                                    <p>TAX (10%): {{ Cart::tax() }} Lei</p>
                                    <h2 class="font-weight-bolder">Total {{ Cart::total() }} Lei</h2>
                                </div>
                            </div>
                        </div> <!-- end total-->
                    </div> <!-- end card -->
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <a href="{{ route('shop.index') }}"  type="button" class="btn btn-lg btn-outline-dark font-weight-bold">Continue Shopping</a>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <a href="{{ route('checkout.index') }}"  type="button" class="btn btn-lg proceedButton font-weight-bold">Proceed to checkout</a>
                        </div>
                    </div>

                    @else
                        <h3 class="mt-2 text-center">No Items in Cart!</h3>
                        <a href="{{ route('shop.index') }}" class="btn btn-outline-primary mt-2">Continue Shopping</a>
                    @endif


                    @if(Cart::instance('saveForLater')->count() > 0)
                    <h3 class="mt-2">Save for later section</h3>
                    <h2 class="font-weight-bold p-3">
                        {{ Cart::instance('saveForLater')->count() }} Item(s) saved for later
                    </h2>
                    <div class="my-5">
                        <!-- save for later -->
                            <div class="save-for-later border border-y-secondary cart-body">
                                @foreach(Cart::instance('saveForLater')->content() as $item)
                                <div class="row text-center py-4">
                                    <div class="col-sm-4">
                                        <a href="{{ route('shop.show', $item->model->slug ) }}">
                                            {{-- <img src="{{ asset('img/products/'.$item->model->slug.'.png')  }}" style='height: 80%; width: 80%; object-fit: contain' alt="product"> --}}
                                            <img src="{{ productImage($item->model->image) }}" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="{{ route('shop.show', $item->model->slug ) }}"><p class="product name font-weight-bold mb-2">{{ $item->model->name }}</p></a>
                                        <p class="text-secondary">{{ $item->model->details }}</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="cart-options">Remove</button>
                                        </form>
                                        <form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            <button type="submit" class="cart-options mt-2">Move to Cart</button>
                                        </form>
                                        <h2 class="product price">{{ $item->model->formatPrice() }}</h2>
                                    </div>
                                </div>
                                @endforeach
                            </div> <!-- end save for later-->
                    </div> <!-- end div -->

                    @else
                        <h4 class="text-center mt-2">You have no items saved for later!</h4>
                    @endif

                </div> <!-- end col -->
                <div class="col-sm-12 col-lg-8"></div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    @include('partials.alike-products')
@endsection

@section('extra-js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function(){
            const classname = document.querySelectorAll('.qty')
            //=>nodeList

            Array.from(classname).forEach(function(element){
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    const productQuantity = element.getAttribute('data-productQuantity')
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
                })
            })
        })();
    </script>
@endsection

