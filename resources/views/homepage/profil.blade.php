@extends('layout/horizontalnav')

@section('tittle', 'RSB Mitra Sehat lamongan')
@section ('content')

<!-- Banner Carusel start here -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner" style="height:960px;">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/bg/IMG_7788.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/bg/IMG_7786.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <!-- <div class="carousel-item">
            <img src="{{ asset('assets/images/bg/bg-medical.jpg') }}" class="d-block w-100" alt="...">
        </div> -->
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


<!-- Profile start here -->
<div class="container">
    <div class="card  mt-5">
        <div class="row">
            <div class="col-sm-6 mt-5">
                <div class="card text-center bg-dark text-white mt-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselDescriptionIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselDescriptionIndicators" data-slide-to="1"></li>
                            <!-- <li data-target="#carouselDescriptionIndicators" data-slide-to="2"></li> -->
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/bg/IMG_7788.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/bg/IMG_7786.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <!-- <div class="carousel-item">
                                <img src="{{ asset('assets/images/bg/bg-medical.jpg') }}" class="d-block w-100"
                                    alt="...">
                            </div> -->
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
                        <h5 class="card-title text-center">Rumah Sakit Bedah Mitra Sehat Lamongan</h5>
                        <p class="card-text text-justify">Rumah Sakit Bedah Mitra Sehat Lamongan merupakan salah satu
                            Rumah Sakit Khusus Bedah swasta yang ada di kota Lamongan. Rumah sakit ini didirikan oleh
                            Yayasan Rumah Sakit Mitra Sehat yang beralamat di Jl. Raya Lamongan-Babat Km 5, Ds.
                            Karanglangit Lamongan. Rumah sakit ini didirikan berdasarkan Akte Notaris Pendirian Yayasan
                            Nomor: 7, tanggal 28 April 2008 yang disahkan oleh Notaris di Lamongan, Juanita Sari Dewi,
                            SH. Yang saat ini telah berganti nama menjadi Yayasan Mitra Sehat Lamongan Nomor :
                            10/KET.CUTI-MPPN/VIII/2019 tanggal 24 Agustus 2019 yang di sahkan oleh Notaris di Lamongan,
                            Guntur Mahdar, SE, SH, MKn. Rumah Sakit Bedah Mitra Sehat Lamongan mulai berdiri dan
                            beroperasi pada tanggal 25 Mei 2012. </p>
                        <p class="card-text text-justify">
                            Dalam melaksanakan aktivitas usahanya perusahaan berkantor pusat di Jln. Raya Lamongan –
                            Babat Km 5 Desa Karanglangit Kecamatan Turi Kabupaten Lamongan, pada tahun 2012 ijin rumah
                            sakit telah dilengkapi dengan prakrtek Dokter Spesialis, Instalasi Farmasi, Laboratorium,
                            Radiology, Kamar Operasi dan Rawat Inap dengan jumlah tempat tidur 51 bed.
                            Maka diharapkan dengan dibangunnya sebuah rumah sakit dengan fasilitas yang cukup lengkap
                            dan disertai tenaga medis handal akan menjawab sebagian tuntutan masyarakat untuk
                            mendapatkan penanganan kesehatan terbaik. Untuk menjawab permintaan tersebut maka, Yayasan
                            Rumah Sakit Mitra Sehat mencoba untuk memberikan pelayanan kesehatan dengan membangun rumah
                            sakit dengan nama Rumah Sakit Bedah Mitra Sehat. </p>
                        <p class="card-text text-justify">
                            Pembangunan Rumah Sakit Bedah Mitra Sehat ini ditujukan untuk masyarakat Lamongan dan
                            sekitarnya, dengan kelas menengah keatas. Namun, selain itu, tidak menutup kemungkinan
                            masyarakat ekonomi menengah ke bawah untuk berobat ke Rumah Sakit Bedah Mitra Sehat ini.
                            Pada akhirnya diharapkan Rumah Sakit Bedah Mitra Sehat dapat memberikan pelayanan yang
                            maksimal kepada seluruh masyarakat dengan memanfaatkan teknologi yang tersedia sehingga pada
                            akhirnya dapat meningkatkan derajat kesehatan masyarakat Lamongan khususnya dan masyarakat
                            sekitar pada umumnya. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile end here -->

<!-- Tim Dokter Start here -->
<div class="bg-rsb-blue mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 ">
                <h3 class="text-white text-center">Rumah Sakit Bedah Mitra Sehat lamongan</h3>
            </div>
        </div>
        <div class="row">
            <div class="row mt-5 mb-5 ml-3">
                <div class="col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body  text-center">
                            <h5>Visi</h5>
                            <p class="card-text">Memberikan pelayanan kesehatan secara menyeluruh yang baik dan bermutu
                                bagi masyarakat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <h5>Misi</h5>
                            <p class="card-text text-left">1. Memberikan pelayanan kesehatan secara utuh.</p>
                            <p class="card-text text-left">
                                2. Membangun kebudayaan pelayanan yang sempurna dalam penampilan, handal, tanggap, peka
                                dan tulus.</p>
                            <p class="card-text text-left">
                                3. Menjadi Rumah Sakit Khusus Swasta kelas Madya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <h5>Moto</h5>
                            <p class="card-text">Melayani dengan Senyum, Cepat, Ekonomis dan Mutu</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <canvas id="seolinechart1" height="50"></canvas> -->
        </div>
    </div>
</div>
<!-- Tim Dokter End Here-->

<!-- Youtube Start Here -->
<section>
    <div class="container">
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
</section>
<!-- Youtube  End Here-->

<section class="">
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