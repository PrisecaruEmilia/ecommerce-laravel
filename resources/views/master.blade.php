<!DOCTYPE html>
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
                        <a class="navbar-brand" href="{{ route('welcome-page') }}">SPLASH</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon">
                            <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
                          </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            {{-- <ul class="navbar-nav">

                            </ul> --}}
                            <!-- main menu -->
                          {{ menu('main', 'partials.menus.main')}}
                        </div>
                    </nav>
                </div> <!-- end top-nav -->
                @yield('hero')
        </header> <!-- end header -->

        @yield('breadcrumbs')
        @yield('featured')
        @yield('content')
        <footer class="mt-5" id="sticky_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                            <h5 class="my-2 font-weight-bold">Register for free</h5>
                            <a href="{{ route('register') }}"  type="button" class="btn btn-lg btn-outline-light font-weight-bold btn-rounded">Sign up!</a>
                    </div>
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-md-12 pt-3">
                        <div class="mb-2 text-center">
                            {{-- <a href="#" class="fb-ic">
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
                            </a> --}}

                            {{ menu('footer', 'partials.menus.footer') }}
                        </div>
                    </div>

                </div> <!-- end row-->

            </div> <!-- end container-->

            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="#" class="font-weight-bold"> SPLASHCorp.com</a>
            </div> <!-- end copyright -->


        </footer> <!-- end footer -->

        @yield('extra-js')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>
    </body>
</html>
