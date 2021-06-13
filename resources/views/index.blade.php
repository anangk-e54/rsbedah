@extends('layout/horizontalnav')

@section('tittle', 'RS Mitra Mitra Sehat lamongan')
@section ('content')

<!-- Banner Carusel start here -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/bg/bg-medical.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/bg/sigin-bg.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/bg/bg-medical.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Banner Carusel end here -->

<!-- Top Menu start here -->
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-sm-3">
            <div class="card text-center bg-dark text-black">
                <img src="{{ asset('assets/images/card/card-img1.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Dokter Spesialis</h5>
                    <a href="{{ url('/jadwaldokter')}}" class="btn btn-primary">Lihat Jadwal Dokter</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center bg-dark text-black">
                <img src="{{ asset('assets/images/card/card-img1.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Instalasi Gawat Darurat</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center bg-dark text-black">
                <img src="{{ asset('assets/images/card/card-img1.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Konsultasi Medis</h5>
                    <a href="{{ url('/jadwaldokter')}}" class="btn btn-primary">Lihat Jadwal Dokter</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center bg-dark text-black">
                <img src="{{ asset('assets/images/card/card-img1.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Layanan 24/7</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
        <!-- <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> -->
    </div>
</div>

<!-- Profile start here -->
<div class="container">
    <div class="card  mt-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="card text-center bg-dark text-white">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselDescriptionIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselDescriptionIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselDescriptionIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/bg/bg-medical.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/bg/sigin-bg.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/bg/bg-medical.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselDescriptionIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselDescriptionIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-img-overlay">
                        <!-- <h5 class="card-title">Layanan 1</h5>
                        <p class="card-text">Deskripsi </p> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-left">
                    <div class="card-body">
                        <h5 class="card-title text-center">Special title treatment</h5>
                        <p class="card-text text-justify">Rumah Sakit Bedah Mitra Sehat Lamongan merupakan salah satu
                            Rumah
                            Sakit
                            Khusus Bedah swasta yang ada di kota Lamongan. Rumah sakit ini didirikan oleh Yayasan Rumah
                            Sakit Mitra Sehat yang beralamat di Jl. Raya Lamongan-Babat Km 5, Ds. Karanglangit Lamongan.
                            Rumah sakit ini didirikan berdasarkan Akte Notaris Pendirian Yayasan Nomor: 7, tanggal 28
                            April 2008 yang disahkan oleh Notaris di Lamongan, Juanita Sari Dewi, SH. Yang saat ini
                            telah berganti nama menjadi Yayasan Mitra Sehat Lamongan Nomor : 10/KET.CUTI-MPPN/VIII/2019
                            tanggal 24 Agustus 2019 yang di sahkan oleh Notaris di Lamongan, Guntur Mahdar, SE, SH, MKn.
                            Rumah Sakit Bedah Mitra Sehat Lamongan mulai berdiri dan beroperasi pada tanggal 25 Mei
                            2012. </p>
                        <a href="#Sejarah" class="btn btn-primary">Baca selengkapnya...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile end here -->

<!-- List Doctor start here -->
<div class="container">
    <div class="row">
        <!-- seo fact area start -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-thumb-up"></i><a href="{{ url('/jadwaldokter')}}"
                                        class="btn btn-outline-light">Lihat Jadwal Dokter</a></div>
                                <h2>Our Team</h2>
                            </div>
                            <div class="row mt-5 mb-5 ml-3">
                                <div class="col-sm-3">
                                    <div class="card bg-light">
                                        <img src="{{asset('assets/images/team/doctor-man.jpg')}}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body  text-center">
                                            <h5>Bidang Spesialis</h5>
                                            <p class="card-text">dr. Dewa Arimasen</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card bg-light">
                                        <img src="{{asset('assets/images/team/doctor-woman.jpg')}}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body text-center">
                                            <h5>Bidang Spesialis</h5>
                                            <p class="card-text">dr. Fulana Ikimasho</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <canvas id="seolinechart1" height="50"></canvas> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-md-5 mb-3">
                    <div class="card">
                        <div class="center-content">
                            <iframe width="100%" height="720" src="https://www.youtube.com/embed/T4oVGgCFAJk"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <!-- <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-share"></i> Share</div>
                                <h2>3,984</h2>
                            </div>
                            <canvas id="seolinechart2" height="50"></canvas>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0">
                    <div class="card">
                        <div class="seo-fact sbg3">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">Impressions</div>
                                <canvas id="seolinechart3" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="seo-fact sbg4">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon">New Users</div>
                                <canvas id="seolinechart4" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- seo fact area end -->
        <!-- Social Campain area start -->
        <div class="col-lg-4 mt-5">
            <div class="card">
                <div class="card-body pb-0">
                    <h4 class="header-title">Social ads Campain</h4>
                    <div id="socialads" style="height: 245px;"></div>
                </div>
            </div>
        </div>
        <!-- Social Campain area end -->
        <!-- Statistics area start -->
        <div class="col-lg-8 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">User Statistics</h4>
                    <div id="user-statistics"></div>
                </div>
            </div>
        </div>
        <!-- Statistics area end -->
        <!-- Advertising area start -->
        <div class="col-lg-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Advertising & Marketing</h4>
                    <canvas id="seolinechart8" height="233"></canvas>
                </div>
            </div>
        </div>
        <!-- Advertising area end -->
        <!-- sales area start -->
        <div class="col-xl-8 col-lg-8 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Sales</h4>
                    <div id="salesanalytic"></div>
                </div>
            </div>
        </div>
        <!-- sales area end -->
        <!-- timeline area start -->
        <div class="col-xl-4 col-lg-4 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Timeline</h4>
                    <div class="timeline-area">
                        <div class="timeline-task">
                            <div class="icon bg1">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio
                                itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio
                                itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg2">
                                <i class="fa fa-exclamation-triangle"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="fa fa-bomb"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio
                                itaque at.
                            </p>
                        </div>
                        <div class="timeline-task">
                            <div class="icon bg3">
                                <i class="ti-signal"></i>
                            </div>
                            <div class="tm-title">
                                <h4>Rashed sent you an email</h4>
                                <span class="time"><i class="ti-time"></i>09:35</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio
                                itaque at.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- timeline area end -->
        <!-- map area start -->
        <div class="col-lg-5 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Marketing Area</h4>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="card"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.2011004300684!2d112.37195739276353!3d-7.102676979354222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e778c1486f87995%3A0xc37dcef7bcbe8f9e!2sRS%20Bedah%20Mitra%20Sehat!5e0!3m2!1sid!2sid!4v1623428644986!5m2!1sid!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- <div id="seomap">
                </div> -->
                </div>
            </div>
        </div>
        <!-- map area end -->
        <!-- testimonial area start -->
        <div class="col-lg-7 mt-5">
            <div class="card">
                <div class="card-body bg1">
                    <h4 class="header-title text-white">Client Feadback</h4>
                    <div class="testimonial-carousel owl-carousel">
                        <div class="tst-item">
                            <div class="tstu-img">
                                <img src="assets/images/team/team-author1.jpg" alt="author image">
                            </div>
                            <div class="tstu-content">
                                <h4 class="tstu-name">Abel Franecki</h4>
                                <span class="profsn">Designer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut
                                    nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                            </div>
                        </div>
                        <div class="tst-item">
                            <div class="tstu-img">
                                <img src="assets/images/team/team-author2.jpg" alt="author image">
                            </div>
                            <div class="tstu-content">
                                <h4 class="tstu-name">Abel Franecki</h4>
                                <span class="profsn">Designer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut
                                    nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                            </div>
                        </div>
                        <div class="tst-item">
                            <div class="tstu-img">
                                <img src="assets/images/team/team-author3.jpg" alt="author image">
                            </div>
                            <div class="tstu-content">
                                <h4 class="tstu-name">Abel Franecki</h4>
                                <span class="profsn">Designer</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laborum ut
                                    nihil numquam a aliquam alias necessitatibus ipsa soluta quam!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->
    </div>
</div>
<!-- List Doctor end here -->

<!-- page title area start here -->
<div class="main-content-inner">
    <div class="row">
        <div class="col mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-5">
                        <img class="img-fluid mr-4" src="assets/images/media/media1.jpg" alt="image">
                        <div class="media-body">
                            <h4 class="mb-3">Media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel
                            metus
                            scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                            turpis.
                        </div>
                    </div>
                    <div class="media">
                        <img class="img-fluid mr-4" src="assets/images/media/media2.jpg" alt="">
                        <div class="media-body">
                            <h4 class="mb-3">Media heading</h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel
                            metus
                            scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                            turpis.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page title area end here -->

@endsection