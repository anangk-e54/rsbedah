<!doctype html>
<html lang="en-gb" class="no-js">

<head>
    <meta charset="utf-8">
    <title>@yield('tittle')</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!--styles -->
    <link href="{{ asset('webassets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webassets/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('webassets/js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('webassets/js/owl-carousel/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('webassets/js/owl-carousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('webassets/css/magnific-popup.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('webassets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('webassets/css/etlinefont.css') }}">
    <link href="{{ asset('webassets/css/style.css') }}" type="text/css" rel="stylesheet" />

    @yield('stylecss')

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body data-spy="scroll" data-target="#main-menu">


    <!--Start Page loader -->
    <div id="pageloader">
        <div class="loader">
            <img src="{{ asset('webassets/images/progress.gif') }}" alt='loader' />
        </div>
    </div>
    <!--End Page loader -->


    <!--Start Navigation-->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--Start Logo -->
                    <div class="logo-nav">
                        <a href="index.html">
                            <img src="images/logo.png" alt="Company logo" />
                        </a>
                    </div>
                    <!--End Logo -->
                    <div class="clear-toggle"></div>
                    <div id="main-menu" class="collapse scroll navbar-right">
                        <ul class="nav">

                            <li class="active"> <a href="#home">Beranda</a> </li>

                            <li class="nav-item dropdown submenu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tentang Kami
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profile RS</a>
                                    <a class="dropdown-item" href="#">Tim Dokter</a>
                                    <!-- <div class="dropdown-divider"></div> -->
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>

                            <li> <a href="#history">Layanan</a> </li>

                            <li> <a href="#works">Jadwal Dokter</a> </li>

                            <li> <a href="#team">Artikel</a> </li>

                        </ul>
                    </div><!-- end main-menu -->
                </div>
            </div>
        </div>
    </header>
    <!--End Navigation-->

    @yield('content')

    <!--Start Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <!--Start copyright-->
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="copyright">
                        <p>Copyright © 2016 All Rights reserved by: <a href="http://templatestock.co">Template Stock</a>
                        </p>
                    </div>
                </div>
                <!--End copyright-->

                <!--start social icons-->
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--End social icons-->
            </div> <!-- /.row-->
        </div> <!-- /.container-->
    </footer>
    <!--End Footer-->

    <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
    <script type="text/javascript" src="{{ asset('webassets/js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('webassets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('webassets/js/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('webassets/js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('webassets/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('webassets/js/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('webassets/js/jquery.easypiechart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('webassets/js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('webassets/js/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('webassets/js/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('webassets/js/custom.js') }}"></script>

    @yield('stylejs')

</body>

</html>