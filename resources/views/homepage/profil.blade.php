@extends('layout/horizontalnav')

@section('tittle', 'RSB Mitra Sehat lamongan')
@section ('content')


<section class="bg-white">
    <!-- Banner Carusel start here -->
    <div id="carouselExampleIndicators" class="carousel carousel-banner slide" data-ride="carousel">
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
            <h3 class="card-title text-center">IDENTITAS PEMRAKARSA RUMAH SAKIT BEDAH MITRA SEHAT LAMONGAN </h3>
            <div class="row">
                <div class="col-sm-6 mt-5">
                    <div class="card text-center bg-dark text-white">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselDescriptionIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselDescriptionIndicators" data-slide-to="1"></li>
                                <!-- <li data-target="#carouselDescriptionIndicators" data-slide-to="2"></li> -->
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/images/bg/IMG_7788.jpg') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/images/bg/IMG_7786.jpg') }}" class="d-block w-100"
                                        alt="...">
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
                <!-- Identitas Rumah Sakit Start Here -->
                <div class="col-sm-6">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Nama Rumah Sakit </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : Rumah Sakit Bedah Mitra Sehat Lamongan </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify">Alamat </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : Jalan Raya Lamongan-Babat Km. 5 Desa Karanglangit
                                    Kabupaten Lamongan 62251 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Telepon/Fax </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : (0322) 317997, Fax. (0322) 317998 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Email </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : rsbms_lamongan@yahoo.co.id </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Tanggal Pendirian </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : 25 Mei 2012 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Status Kepemilikan </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : Yayasan Mitra Sehat Lamongan </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Nama Pemilik </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : Trilina Kadarwati, MM.Kes. </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Nama Direktur </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> :dr. Bambang Pramono, MM. </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Nomor Registrasi RS </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : 3524043 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> No. &Tgl. Ijin Operasional RS </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : 445/1437/RS/413.111/2020 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Masa Berlaku </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : 25 Juli 2025 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Akreditasi </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : Lulus Tingkat PERDANA </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Nomor Akreditasi </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : KARS-SERT/1009/VII/2020 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Luas Lahan </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : 2.245 m2 </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="card-text text-justify"> Luas Bangunan </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="card-text text-justify"> : 4200 m2 <br> &nbsp; Lantai 1 : 2100 m2
                                    m2 <br> &nbsp; Lantai 2 : 2100 m2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile end here -->
</section>

<!-- Sejarah Start here -->
<div class=" mt-5">
    <div class="container">
        <div class="row ml-3">
            <!-- Sejarah Start Here -->
            <div class="col-lg-8 mt-5 mb-5 ">
                <div class="card text-left">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sejarah</h5>
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
            <!-- Sejarah End Here -->

            <!-- Visi MisiMoto Start Here -->
            <div class="col-xl-4 col-lg-4 mt-5 mb-5 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Informasi Kontak RSB Mitra Sehat Lamongan</h4>
                        <div class="timeline-area">
                            <div class="timeline-task">
                                <div class="icon bg2">
                                    <i class="fa fa-map-signs"></i>
                                </div>
                                <div class="tm-title">
                                    <h4>Visi</h4>
                                </div>
                                <p>Memberikan pelayanan kesehatan secara menyeluruh yang baik dan bermutu bagi
                                    masyarakat.
                                </p>
                            </div>
                            <div class="timeline-task">
                                <div class="icon bg3">
                                    <i class="ti-time"></i>
                                </div>
                                <div class="tm-title">
                                    <h4>Misi</h4>
                                </div>
                                <ol>
                                    <li>Memberikan pelayanan kesehatan secara utuh.</li>
                                    <li>Membangun kebudayaan pelayanan yang sempurna dalam penampilan, handal, tanggap,
                                        peka dan tulus.</li>
                                    <li>Menjadi Rumah Sakit Khusus Swasta kelas Madya.</li>
                                </ol>
                            </div>
                            <div class="timeline-task">
                                <div class="icon bg1">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="tm-title">
                                    <h4>Motto</h4>
                                </div>
                                <p>Melayani dengan Senyum, Cepat, Ekonomis dan Mutu
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Visi Misi Moto area end -->
        </div>
        <!-- <canvas id="seolinechart1" height="50"></canvas> -->
    </div>
</div>
<!-- Sejarah End Here-->

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
            <div class="col-xl-12 col-lg-12 mt-5 mb-3">
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
        </div>
    </div>
    <!-- Maps & Information End Here -->
</section>



@endsection