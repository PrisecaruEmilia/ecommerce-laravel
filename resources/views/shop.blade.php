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
                                    <li class="breadcrumb-item active">Shop</li>
                                </ul>
                            </nav> <!-- end nav -->
                        </div>
                    </div>
                </div>
        </section>
        <section class="featureProducts">
            <div class="container pt-5">
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <h6 class="text-center font-weight-bold pt-3 mb-5">By Category</h6>
                            <ul class="nav flex-column text-center font-weight-bold">
                                <li class="nav-item border border-secondary rounded-pill mb-2">
                                  <a class="nav-link active" href="#">Laptops</a>
                                </li>
                                <li class="nav-item border border-secondary rounded-pill mb-2">
                                  <a class="nav-link" href="#">Phones</a>
                                </li>
                                <li class="nav-item border border-secondary rounded-pill mb-2">
                                  <a class="nav-link" href="#">Smart Watches</a>
                                </li>
                                <li class="nav-item border border-secondary rounded-pill mb-2">
                                  <a class="nav-link" href="#">Desktops</a>
                                </li>
                                <li class="nav-item border border-secondary rounded-pill mb-2">
                                  <a class="nav-link" href="#">Tablets</a>
                                </li>
                                <li class="nav-item border border-secondary rounded-pill mb-2">
                                  <a class="nav-link" href="#">TVs</a>
                                </li>
                                <li class="nav-item border border-secondary rounded-pill mb-2">
                                  <a class="nav-link" href="#">Digital Cameras</a>
                                </li>
                              </ul>
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <div class="row font-weight-bold">
                                <div>
                                    <h1>Featured</h1>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                                    <img src="img/laptop.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                    <p class="product name font-weight-bold my-0">Laptop</p>
                                    <p class="product price">3.500 Lei</p>
                                  </div>
                                  <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                                     <img src="img/cellphone.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                     <p class="product name font-weight-bold my-0">Phone</p>
                                     <p class="product price ">3.500 Lei</p>
                                  </div>
                                  <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                                     <img src="img/smartwatches.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                     <p class="product name font-weight-bold my-0">Smart Watch</p>
                                     <p class="product price ">3.500 Lei</p>
                                  </div>
                                  <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                                     <img src="img/macdesktop.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                     <p class="product name font-weight-bold my-0">Desktop</p>
                                     <p class="product price ">3.500 Lei</p>
                                  </div>
                                  <!-- -->
                                  <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                                    <img src="img/macdesktop.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                    <p class="product name font-weight-bold my-0">Desktop</p>
                                    <p class="product price ">3.500 Lei</p>
                                  </div>
                                  <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                                     <img src="img/smartwatches.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                     <p class="product name font-weight-bold my-0">Smart Watch</p>
                                     <p class="product price ">3.500 Lei</p>
                                  </div>
                                  <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                                     <img src="img/cellphone.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                     <p class="product name font-weight-bold my-0">Phone</p>
                                     <p class="product price ">3.500 Lei</p>
                                  </div>
                                  <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                                     <img src="img/laptop.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                     <p class="product name font-weight-bold my-0">Laptop</p>
                                     <p class="product price ">3.500 Lei</p>
                                  </div>
                                  <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                                    <img src="img/cellphone.png" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                    <p class="product name font-weight-bold my-0">Phone</p>
                                    <p class="product price ">3.500 Lei</p>
                                 </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>

        <footer class="mt-5">
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
                                <li class="breadcrumb-item active">Shop</li>
                            </ul>
                        </nav> <!-- end nav -->
                    </div>
                    @include('partials.search')
                </div>
        </div>
    </section>
@endsection
@section('featured')
    <section class="featureProducts">
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
        <div class="container pt-5">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <h6 class="text-center font-weight-bold pt-3 mb-5">By Category</h6>
                        <ul class="nav flex-column text-center font-weight-bold">
                            @foreach ($categories as $category)
                                <li class="nav-item border border-secondary rounded-pill mb-2 {{ setActiveCategory($category->slug) }}">
                                <a class="nav-link active" href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-9 show-product" style="min-height: calc(100vh - 450px);">
                        <div class="row font-weight-bold">
                            <div class="col-sm-6">
                                <h1>{{ $categoryName }}</h1>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex justify-content-end">
                                    <div class="pr-1"><strong>Price: </strong></div>
                                    <div class="border-right border-danger pr-1"><a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'low_high ']) }}" class="text-secondary">Low to High</a></div>
                                    <div class="px-1"><a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'high_low ']) }}" class="text-secondary">High to Low</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                             @forelse ($products as $product)
                                <div class="col-sm-12 col-md-6 col-lg-4 pb-3">
                                    <a href="{{ route('shop.show', $product->slug) }}">
                                        {{-- <img src="{{ asset('img/products/'.$product->slug. '.png') }}" style='height: 70%; width: 70%; object-fit: contain' alt="product"> --}}
                                        <img src="{{ productImage($product->image) }}" style='height: 70%; width: 70%; object-fit: contain' alt="product">
                                    </a>
                                    <a href="{{ route('shop.show', $product->slug) }}"><p class="product name font-weight-bold my-0">{{ $product->name }}</p></a>
                                    <p class="product price">{{ $product->formatPrice()}}</p>
                                </div>
                            @empty
                                <div>
                                    <h2>No items found</h2>
                                </div>
                            @endforelse


                            {{-- {{ $products->links() }} --}}
                            {{ $products->appends(request()->input())->links() }}

                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
