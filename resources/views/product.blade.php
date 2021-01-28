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
                                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                                    <li class="breadcrumb-item active">Item</li>
                                </ul>
                            </nav> <!-- end nav -->
                        </div>
                    </div>
                </div>
        </section>

        <section class="my-5 productDescription">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 mainProduct">
                        <div class="card text-center p-4">
                            <div class="card-body">
                                <img src="img/laptop.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 p-2 px-5">
                        <h1 class="product name font-weight-bold mb-2">Laptop</h1>
                        <h4 class="text-secondary">15 inch, 1TB SSD, 16GB RAM</h4>
                        <h2 class="product price">3.500 Lei</h2>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat a tempore, odio distinctio harum debitis dolores maxime dicta voluptatibus placeat.</p>
                        <a href="#"  type="button" class="btn btn-lg btn-outline-dark font-weight-bold btn-rounded">Add to cart</a>
                    </div>
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
                                <li class="breadcrumb-item"><a href="{{ route('shop.index') }}">Shop</a></li>
                                <li class="breadcrumb-item active">Item</li>
                            </ul>
                        </nav> <!-- end nav -->
                    </div>
                    @include('partials.search')
                </div>
            </div>
    </section>
@endsection
@section('featured')
<section class="my-5 productDescription">
        <div class="container">
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
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mainProduct">
                    <div class="card text-center p-4">
                        <div class="card-body">
                            <img src="{{ productImage($product->image) }}" style='height: 80%; width: 80%; object-fit: contain' alt="product" id="currentImage" class="active">
                            {{-- <img src="{{ asset('img/products/'.$product->slug. '.png') }}" style='height: 80%; width: 80%; object-fit: contain' alt="product"> --}}
                        </div>
                    </div>
                    <div class="product-section-images mt-3">
                        <div class="product-section-thumbnail selected">
                            <img src="{{ productImage($product->image) }}" alt="product">
                        </div>
                        @if ($product->images)
                            @foreach (json_decode($product->images, true) as $image)
                                <div class="product-section-thumbnail">
                                    <img src="{{ productImage($image) }}" alt="product">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 p-2 px-5">
                    <h1 class="product name font-weight-bold mb-2">{{ $product->name }}</h1>
                    <h4 class="text-secondary">{{ $product->details }}</h4>
                    <div>{!! $inStock !!}</div>
                    <h2 class="product price">{{ $product->formatPrice() }}</h2>
                    <p class="description">{!! $product->description !!}</p>
                    {{-- <a href="{{ route() }}"  type="button" class="btn btn-lg btn-outline-dark font-weight-bold btn-rounded">Add to cart</a> --}}
                    @if($product->quantity > 0)
                        <form action="{{ route('cart.store') }} " method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <button type="submit" class="btn btn-lg btn-outline-dark font-weight-bold btn-rounded">Add to cart</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @include('partials.alike-products')
@endsection

@section('extra-js')

<script>
    (function(){
        const currentImage = document.querySelector('#currentImage');
        const images = document.querySelectorAll('.product-section-thumbnail');
        images.forEach((element) => element.addEventListener('click', thumbnailClick));
        function thumbnailClick(e) {

            currentImage.classList.remove('active');
            currentImage.addEventListener('transitionend', () => {
                currentImage.src = this.querySelector('img').src;
                currentImage.classList.add('active')
            })
            images.forEach((element) => element.classList.remove('selected'));
            this.classList.add('selected');
        }
    })();
</script>
@endsection



