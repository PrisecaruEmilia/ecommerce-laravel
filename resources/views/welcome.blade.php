{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Splash</title>


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
              <div class="hero container">
                  <div class="row">
                    <div class="hero-copy col-sm-12 col-lg-6">
                        <h1>Splash website</h1>
                        <p class="font-weight-bold">A very friendly ecommerce for non-techies</p>
                        <div class="hero-buttons">
                            <a href="#"  type="button" class="btn btn-lg btn-outline-dark font-weight-bold mr-2">View products</a>
                            <a href="#"  type="button" class="btn btn-lg btn-outline-dark font-weight-bold">See offers</a>
                        </div>
                    </div> <!-- end hero-copy -->
                    <div class="hero-image col-sm-12 col-lg-6">
                        <picture>
                            <source media="(max-width: 992px)" srcset="img/huawei.png">
                            <img src="img/iphones.png" style='height: 100%; width: 100%; object-fit: contain' alt="hero image">
                        </picture>
                    </div>
                  </div> <!-- end row -->

              </div> <!-- end hero -->
        </header> <!-- end header -->
        <section class="featured mt-5">
            <div class="container text-center">
                <h1>Splash Ecommerce</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis et sunt sapiente, ea natus quod est exercitationem debitis minima itaque alias quo similique voluptates consectetur deleniti rerum sint facilis iste necessitatibus quisquam totam unde? Facilis minus explicabo nesciunt pariatur repudiandae voluptate quibusdam, amet magni soluta voluptatem ipsum doloremque, quia id!</p>
            </div>
            <div class="container mt-5">
                <div class="row text-center">
                  <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
                    <img src="img/laptop.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                    <p class="product name font-weight-bold mb-0 mb-0">Laptop</p>
                    <p class="product price">3.500 Lei</p>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
                     <img src="img/cellphone.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                     <p class="product name font-weight-bold mb-0 my-0">Phone</p>
                     <p class="product price ">3.500 Lei</p>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
                     <img src="img/smartwatches.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                     <p class="product name font-weight-bold mb-0 my-0">Smart Watch</p>
                     <p class="product price ">3.500 Lei</p>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
                     <img src="img/macdesktop.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                     <p class="product name font-weight-bold mb-0 my-0">Desktop</p>
                     <p class="product price ">3.500 Lei</p>
                  </div>
                  <!-- -->
                  <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
                    <img src="img/macdesktop.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                    <p class="product name font-weight-bold mb-0 my-0">Desktop</p>
                    <p class="product price ">3.500 Lei</p>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
                     <img src="img/smartwatches.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                     <p class="product name font-weight-bold mb-0 my-0">Smart Watch</p>
                     <p class="product price ">3.500 Lei</p>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
                     <img src="img/cellphone.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                     <p class="product name font-weight-bold mb-0 my-0">Phone</p>
                     <p class="product price ">3.500 Lei</p>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
                     <img src="img/laptop.png" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                     <p class="product name font-weight-bold mb-0 my-0">Laptop</p>
                     <p class="product price ">3.500 Lei</p>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-sm-12 text-center">
                    <a href="#"  type="button" class="btn btn-lg btn-outline-dark font-weight-bold mr-2">View more products</a>
                  </div>
                </div>
              </div>
        </section> <!-- end section -->

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

@section('hero')
        <div class="hero container">
            <div class="row">
            <div class="hero-copy col-sm-12 col-lg-6">
                <h1>Splash website</h1>
                <p class="font-weight-bold">A very friendly ecommerce for non-techies</p>
                <div class="hero-buttons">
                    <a href="{{ route('shop.index') }}"  type="button" class="btn btn-lg btn-outline-dark font-weight-bold mr-2">View products</a>
                    <a href="#"  type="button" class="btn btn-lg btn-outline-dark font-weight-bold">See offers</a>
                </div>
            </div> <!-- end hero-copy -->
            <div class="hero-image col-sm-12 col-lg-6">
                <picture>
                    <source media="(max-width: 992px)" srcset="img/huawei.png">
                    <img src="img/iphones.png" style='height: 100%; width: 100%; object-fit: contain' alt="hero image">
                </picture>
            </div>
            </div> <!-- end row -->

        </div> <!-- end hero -->
@endsection
@section('featured')
        <section class="featured mt-5">
            <div class="container text-center">
                <h1>Splash Ecommerce</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis et sunt sapiente, ea natus quod est exercitationem debitis minima itaque alias quo similique voluptates consectetur deleniti rerum sint facilis iste necessitatibus quisquam totam unde? Facilis minus explicabo nesciunt pariatur repudiandae voluptate quibusdam, amet magni soluta voluptatem ipsum doloremque, quia id!</p>
            </div>
            <div class="container mt-5">
                <div class="row text-center">
                    @foreach($products as $product)
                        <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
                            <a href="{{ route('shop.show', $product->slug) }}">
                                {{-- <img src="{{ asset('img/products/'.$product->slug. '.png') }}" style='height: 80%; width: 80%; object-fit: contain' alt="product"> --}}
                                <img src="{{ productImage($product->image) }}" style='height: 80%; width: 80%; object-fit: contain' alt="product">
                            </a>
                            <a href="{{ route('shop.show', $product->slug) }}"><p class="product name font-weight-bold mb-0 mb-0">{{ $product->name }}</p></a>
                            <p class="product price">{{ $product->formatPrice() }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                <div class="col-sm-12 text-center">
                    <a href="{{ route('shop.index') }}"  type="button" class="btn btn-lg btn-outline-dark font-weight-bold mr-2">View more products</a>
                </div>
                </div>
            </div>
        </section> <!-- end section -->
@endsection
