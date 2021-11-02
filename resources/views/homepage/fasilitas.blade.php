@extends('layout/horizontalnav')

@section('tittle', 'RSB Mitra Sehat lamongan')
@section ('content')


<!-- Banner Carusel start here -->
<div id="carouselExampleIndicators" class="carousel carousel-banner slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height:960px;">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/bg/medical1.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/bg/bg-rsb-front.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/bg/IMG_7786.jpg') }}" class="d-block w-100" alt="...">
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

<!-- Card Fasilitas -->
<div class="container">
    <div class="card-area">
        <div class="row">

            @foreach( $facilities as $facility)
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="card card-bordered">
                    <div class="use-image-crop-400">
                        <img class="card-img-top img-fluid" src="{{  $facility->getFacility_img() }}" alt="image">
                    </div>
                    <div class="card-body">
                        <h5 class="title">{{ $facility->facility_name}}</h5>
                        <p class="card-text max-description">{{ $facility->description }}
                        </p>
                        <a class="text-primary" data-toggle="modal" data-target=".readmodal">Read More....</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Card Fasilitas -->


<!-- Top Menu start here -->
<div class=" container-fluid">
    <div class="row mt-5 mb-5">
        <!-- <div class="col-sm-3">
            <div class="card text-center bg-dark text-black">
                <img src="{{ asset('assets/images/card/card-img1.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Dokter Spesialis</h5>
                    <a href="{{ url('/jadwaldokter')}}" class="btn btn-primary">Lihat Jadwal
                        Dokter</a>
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
                    <a href="{{ url('/jadwaldokter')}}" class="btn btn-primary">Lihat Jadwal
                        Dokter</a>
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
        </div> -->
        <!-- card style -->
        <!-- <div class="col-sm-3 mt-3">
            <div class="card text-center">
                <img src="{{ asset('assets/images/bg/bg-rsb-front.jpg') }}" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nama Fasilitas</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                        est laborum.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mt-3">
            <div class="card text-center">
                <img src="{{ asset('assets/images/bg/bg-rsb-front.jpg') }}" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nama Fasilitas</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                        est laborum.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mt-3">
            <div class="card text-center">
                <img src="{{ asset('assets/images/bg/bg-rsb-front.jpg') }}" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nama Fasilitas</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                        est laborum.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mt-3">
            <div class="card text-center">
                <img src="{{ asset('assets/images/bg/bg-rsb-front.jpg') }}" class="card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nama Fasilitas</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                        est laborum.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> -->
        <!-- end card style -->
    </div>
</div>

<!-- Youtube Start Here -->
<section class="">
    <div class="container ">
        <div class="row">
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
        </div>
    </div>

    <!-- Youtube  End Here-->

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
                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
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


    <!-- Large modal -->
    <div class="modal fade readmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $facility->facility_name}} Eror Modal</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">

                    <div class="">
                        <img class="card-img-top img-fluid" src="{{  $facility->getFacility_img() }}" alt="image">
                    </div>
                    <div class="card-body">
                        <p class="card-text max-description">{{ $facility->description }}
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Large Modal End here -->

    @endsection