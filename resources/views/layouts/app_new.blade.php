<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'IT TODAY 2019') }}</title>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!-- CSS ============================================= -->
    <link rel="stylesheet" href="{{ asset('css_new/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css_new/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css_new/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css_new/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css_new/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css_new/hexagons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css_new/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css_new/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css_new/main.css') }}">
</head>

<body>
    <header id="header" id="home">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="/"><img src="{{ asset('img_new/logo.png') }}" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="/">Home</a></li>
                        <li class="menu-has-children"><a href="">Competition</a>
                            <ul>
                                <li><a href="{{ route('appstoday') }}">Appstoday</a></li>
                                <li><a href="{{ route('hacktoday') }}">Hacktoday</a></li>
                                <li><a href="{{ route('daming') }}">Data Mining Competition</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="">Event</a>
                            <ul>
                                <li><a href="#">Seminar</a></li>
                                <li><a href="#">Workshop</a></li>
                            </ul>
                        </li>
                        <li><a href="himalkom.cs.ipb.ac.id">Himalkom IPB</a></li>
                        <li class="menu-has-children"><a href="">Login</a>
                            <ul>
                                <li><a href="#" onclick="alert('Belum tersedia')">Login</a></li>
                                <li><a href="#" onclick="alert('Belum tersedia')">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
    @yield('content')
    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                </div>
                <div class="col-lg-4  col-md-12">
                    <div class="single-footer-widget">
                        <h6>IT TODAY 2019</h6>
                        <ul class="footer-nav">
                            <li>Sekretariat Himalkom IPB</li>
                            <li>Gedung Student Center FMIPA IPB</li>
                            <li>Jalan Meranti • Kampus IPB Dramaga • Bogor</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4  col-md-12">
                </div>
            </div>
            <div class="row footer-bottom d-flex">
                <!--             <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                Copyright &copy;<script>
                document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
            </p>
             -->
                <div class="col-lg-4 col-sm-4"></div>
                <div class="col-lg-4 col-sm-4 footer-social">
                    <a href="https://facebook.com/ipbittoday/"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/ittoday_ipb"><i class="fa fa-twitter"></i></a>
                    <a href="https://instagram.com/ittoday_ipb"><i class="fa fa-instagram"></i></a>
                </div>
                <div class="col-lg-4 col-sm-4"></div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('js_new/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js_new/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js_new/easing.min.js') }}"></script>
    <script src="{{ asset('js_new/hoverIntent.js') }}"></script>
    <script src="{{ asset('js_new/superfish.min.js') }}"></script>
    <script src="{{ asset('js_new/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js_new/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js_new/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js_new/hexagons.min.js') }}"></script>
    <script src="{{ asset('js_new/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js_new/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js_new/waypoints.min.js') }}"></script>
    <script src="{{ asset('js_new/mail-script.js') }}"></script>
    <script src="{{ asset('js_new/main.js') }}"></script>
</body>

</html>