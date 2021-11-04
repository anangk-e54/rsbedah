<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <title>@yield('tittle')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('assets/images/author/logo.jpg') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />

    @yield('stylecss')

    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>


    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="#"><img src="{{ asset('assets/images/author/logo.jpg') }}" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-palette"></i><span>Dashboard</span></a>
                                <ul class="collapse">
                                    <li class=""><a href="{{ url('/')}}" target="_blank">Homepage</a></li>
                                    <li><a href="{{ url('/tutorials')}}">Tutorial</a></li>
                                    <li><a href="{{ url('/profiles')}}">Profile Author</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/doctor')}}"><i class="ti-user"></i><span>Doctor</span></a>
                            </li>
                            <li><a href="{{ url('/article')}}"><i class="ti-write"></i><span>Article</span></a></li>
                            <li><a href="{{ url('/facility')}}"><i class="ti-wallet"></i><span>Facility</span></a></li>
                            <li><a href="{{ url('/service')}}"><i class="ti-wallet"></i><span>Service</span></a></li>
                            <!-- <li class="">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-truck"></i><span>Maintenance</span></a>
                                <ul class="collapse">
                                    <li class=""><a href="{{ url('/maintenances')}}">Report</a></li>
                                    <li><a href="{{ url('/transports')}}">Transport</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="true"><i
                                        class="ti-wallet"></i><span>Finance</span></a>
                                <ul class="collapse">
                                    <li class=""><a href="{{ url('/journals')}}">Journal</a></li>
                                    <li><a href="{{ url('/cashes')}}">Cash/Bank</a></li>
                                </ul>
                            </li> -->
                            <li class="">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user "></i><span>User
                                        Management</span></a>
                                <ul class="collapse">
                                    <li class=""><a href="{{ url('/doctor')}}">Doctor Account</a></li>
                                    <li><a href="{{ url('/contacts')}}">Contact Support</a></li>
                                </ul>
                            </li>
                            <!-- <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i>
                                    <span>Multi
                                        level menu</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Item level (1)</a></li>
                                    <li><a href="#">Item level (1)</a></li>
                                    <li><a href="#" aria-expanded="true">Item level (1)</a>
                                        <ul class="collapse">
                                            <li><a href="#">Item level (2)</a></li>
                                            <li><a href="#">Item level (2)</a></li>
                                            <li><a href="#">Item level (2)</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Item level (1)</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-4 col-sm-6 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="breadcrumbs-area clearfix">
                            @yield('breadcrumbs')
                            <!-- <p>Breadcumb</p> -->
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-2 clearfix">
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile ">
                                <img class="avatar user-thumb" src="{{ asset('assets/images/team/doctor-man.jpg') }}"
                                    alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><i
                                        class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <!-- <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a> -->
                                    <a class="dropdown-item" href="/logout">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <!-- <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                        @yield('breadcrumbs')
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="{{asset ('assets/images/author/avatar.png') }}" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Anang K <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="{{ url('/logout')}}">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- MAIN CONTENT GOES HERE -->
                @yield('content')
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area ">
                <p>© Copyright 2021. All right reserved. Created by <a href="https://www.instagram.com/boxout.studios/"
                        target="_blank">NexgenInnovate</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->

    <!-- Origin started -->
    <!-- <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script> -->

    <!-- New Version in2020 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

    @yield('stylejs')


    <!-- others plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

</body>

</html>