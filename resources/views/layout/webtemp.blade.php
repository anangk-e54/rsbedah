<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>RS Bedah Mitra Sehat Lamongan</title>
    <!--
Elegance Template
https://templatemo.com/tm-528-elegance
-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('webpages/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('webpages/css/font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('webpages/css/fullpage.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('webpages/css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('webpages/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('webpages/css/templatemo-style.css') }}">

    <link rel="stylesheet" href="{{ asset('webpages/css/responsive.css') }}">

</head>

<body>


    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#" id="logo" title="Elegance by TemplateMo">
                        RS BEDAH MITRA SEHAT
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <li data-menuanchor="slide01" class="active"><a href="#slide01">Beranda</a></li>
                                    <li data-menuanchor="slide02"><a href="#slide02">Tentang</a></li>
                                    <li data-menuanchor="slide03"><a href="#slide03">Layanan</a></li>
                                    <li data-menuanchor="slide04"><a href="#slide04">Jadwal Dokter</a></li>
                                    <!-- <li data-menuanchor="slide05"><a href="#slide05">My Work</a></li> -->
                                    <li data-menuanchor="slide07"><a href="#slide07">Kontak</a></li>
                                    <li data-menuanchor="slide06"><a href="#slide06">Masuk</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
            <source src="images/video-bg.mp4" type="video/mp4">
        </video>

        <div id="fullpage" class="fullpage-default">

            @yield('content')

            <div class="section animated-row" data-section="slide07">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-7 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Contact</span>
                                <h2>Get In Touch!</h2>
                            </div>
                            <div class="contact-section">
                                <div class="row">
                                    <div class="col-md-6 animate" data-animate="fadeInUp">
                                        <div class="contact-box">
                                            <div class="contact-row">
                                                <i class="fa fa-map-marker"></i> 123 New Street Here, Wonderful City
                                                10220
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-phone"></i> 090 080 0210
                                            </div>
                                            <div class="contact-row">
                                                <i class="fa fa-envelope"></i> info@company.co
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 animate" data-animate="fadeInUp">
                                        <form id="ajax-contact" method="post" action="#">
                                            <div class="input-field">
                                                <input type="text" class="form-control" name="name" id="name" required
                                                    placeholder="Name">
                                            </div>
                                            <div class="input-field">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    required placeholder="Email">
                                            </div>
                                            <div class="input-field">
                                                <textarea class="form-control" name="message" id="message" required
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <button class="btn" type="submit">Submit</button>
                                        </form>
                                        <div id="form-messages" class="mt-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </div>



    <script src="{{ asset('webpages/js/jquery.js') }}"></script>

    <script src="{{ asset('webpages/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('webpages/js/fullpage.min.js') }}"></script>

    <script src="{{ asset('webpages/js/scrolloverflow.js') }}"></script>

    <script src="{{ asset('webpages/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('webpages/js/jquery.inview.min.js') }}"></script>

    <script src="{{ asset('webpages/js/form.js') }}"></script>

    <script src="{{ asset('webpages/js/custom.js') }}"></script>


</body>

</html>