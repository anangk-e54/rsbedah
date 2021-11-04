@extends('layout/horizontalnav')

@section('tittle', 'RSB Mitra Sehat lamongan')
@section ('content')

<!-- Banner Carusel start here -->
<div id="carouselExampleIndicators" class="carousel carousel-banner slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner" style="height:960px;">
        <div class="carousel-item active">
            <img src="{{  $service->getservice_img() }}" class="d-block w-100" alt="...">
        </div>
    </div>
</div>
<!-- Banner Carusel end here -->


<!-- Profile start here -->
<div class="container">
    <div class="card  mt-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="card text-center bg-dark text-white">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselDescriptionIndicators" data-slide-to="0" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{  $service->getService_img() }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="card-img-overlay">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-left">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$service->service_name}}</h5>
                        <p class="card-text text-justify">{{ $service->description}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile end here -->


<section class=" ">
    <!-- Maps & Information Start Here -->
    <div class="container">
        <div class="row">
            <!-- map area start -->
            <div class="col-xl-6 col-lg-6 mt-5 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Lokasi RSB Mitra Sehat Lamongan</h4>
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
            <!-- timeline area start -->
            <div class="col-xl-6 col-lg-6 mt-5 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Informasi Kontak RSB Mitra Sehat Lamongan</h4>
                        <div class="timeline-area">
                            <div class="timeline-task">
                                <div class="icon bg2">
                                    <i class="fa fa-map-signs"></i>
                                </div>
                                <div class="tm-title">
                                    <h4>Jl. Raya Lamongan-Babat Km.5 Desa Karanglangit Lamongan</h4>
                                </div>
                                <p>Jawa Timur - Indonesia ,62251
                                </p>
                            </div>
                            <div class="timeline-task">
                                <div class="icon bg3">
                                    <i class="ti-time"></i>
                                </div>
                                <div class="tm-title">
                                    <h4>Jam Operasional</h4>
                                    <span class="time"><i class="ti-time"></i>09:35 - 20.30</span>
                                </div>
                            </div>
                            <div class="timeline-task">
                                <div class="icon bg1">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="tm-title">
                                    <h4>Alamat Email</h4>
                                </div>
                                <p>rsbms_lamongan@yahoo.co.id
                                </p>
                            </div>
                            <div class="timeline-task">
                                <div class="icon bg3">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="tm-title">
                                    <h4>Telepon</h4>
                                </div>
                                <p>(0322) 317997
                                </p>
                            </div>
                            <div class="timeline-task">
                                <div class="icon bg2">
                                    <i class="fa fa-fax"></i>
                                </div>
                                <div class="tm-title">
                                    <h4>Alamat Fax</h4>
                                </div>
                                <p>(0322) 317998
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- timeline area end -->
        </div>
    </div>
    <!-- Maps & Information End Here -->
</section>



@endsection