@extends ('layout/horizontalnav')

@section('tittle', 'Tim Doker | RSB Mitra Sehat lamongan')

@section ('content')

<section class="bg-white">
    <!-- Banner Carusel start here -->
    <div id="carouselExampleIndicators" class="carousel carousel-banner slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height:960px;">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/bg/medical2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/bg/IMG_7786.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/bg/IMG_7788.jpg') }}" class="d-block w-100" alt="...">
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
                                <!-- <li data-target="#carouselDescriptionIndicators" data-slide-to="2"></li> -->
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/images/team/anang.jpg')}}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/images/team/anang.jpg')}}" class="d-block w-100"
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
                <div class="col-sm-6">
                    <div class="card text-left">
                        <div class="card-body">
                            <h5 class="card-title text-center">Biografi Kepala Tim Dokter</h5>
                            <p class="card-text text-justify">Rumah Sakit Bedah Mitra Sehat Lamongan merupakan salah
                                satu
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Risus in hendrerit gravida rutrum quisque. Fermentum leo
                                vel
                                orci porta non pulvinar. A condimentum vitae sapien pellentesque habitant morbi
                                tristique
                                senectus et. Dolor morbi non arcu risus. Nulla facilisi cras fermentum odio eu feugiat
                                pretium. Urna duis convallis convallis tellus. Quis auctor elit sed vulputate mi sit
                                amet.
                                Laoreet id donec ultrices tincidunt arcu. Dictumst quisque sagittis purus sit amet
                                volutpat
                                consequat mauris. Fermentum iaculis eu non diam phasellus vestibulum lorem sed. Quis
                                varius
                                quam quisque id diam vel. Pellentesque dignissim enim sit amet venenatis urna cursus.
                                Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque sit. Nisl condimentum
                                id
                                venenatis a condimentum vitae sapien pellentesque habitant. Cras sed felis eget velit.
                                Quisque sagittis purus sit amet volutpat consequat. Hac habitasse platea dictumst
                                vestibulum
                                rhoncus est pellentesque elit. Cursus in hac habitasse platea dictumst. Velit dignissim
                                sodales ut eu sem integer vitae justo. Bibendum arcu vitae elementum curabitur vitae.
                                Gravida dictum fusce ut placerat orci. Velit ut tortor pretium viverra suspendisse
                                potenti.
                                Fringilla est ullamcorper eget nulla facilisi etiam dignissim. Volutpat odio facilisis
                                mauris sit amet massa vitae tortor. Eget est lorem ipsum dolor sit amet. Sed tempus urna
                                et
                                pharetra pharetra massa massa ultricies. Eget nunc scelerisque viverra mauris. Dignissim
                                suspendisse in est ante. Feugiat in ante metus dictum at tempor commodo. Aliquet enim
                                tortor
                                at auctor urna nunc id cursus. Tellus orci ac auctor augue mauris. Diam quam nulla
                                porttitor
                                massa id neque. Aliquam purus sit amet luctus venenatis lectus magna. Nibh mauris cursus
                                mattis molestie a. Quis risus sed vulputate odio ut enim. Auctor augue mauris augue
                                neque
                                gravida in fermentum et sollicitudin. Ultrices eros in cursus turpis massa. Ut venenatis
                                tellus in metus vulputate. Mollis aliquam ut porttitor leo a diam sollicitudin. Arcu
                                felis
                                bibendum ut tristique. Aliquet sagittis id consectetur purus ut faucibus pulvinar
                                elementum.
                                Risus nec feugiat in fermentum. Imperdiet sed euismod nisi porta. Adipiscing elit duis
                                tristique sollicitudin nibh sit. Eros in cursus turpis massa. Fringilla est ullamcorper
                                eget
                                nulla facilisi etiam dignissim diam. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Profile end here -->
<div class="container">
    <div class="row mt-5 mb-5">
        @foreach( $doctors as $doctor)
        <div class="col-sm-3 mb-5">
            <div class="card bg-light">
                <img src="{{  $doctor->getDoctorphoto() }}" class="card-img-top" alt="...">
                <div class="card-body  text-center">
                    <h5>{{ $doctor->doctorspecialist }}</h5>
                    <p class="card-text">{{ $doctor->doctorname }}</p>
                    <a href="/profil-dokter/{{ $doctor->id }}" class="btn btn-xs btn-primary">Lihat Jadwal</a>
                </div>
            </div>
        </div>

        <!-- <tr>
    <th scope="row">{{ $loop->iteration}}</th>
    <td>{{ $doctor->doctorname }}</td>
    <td>{{ $doctor->doctornik }}</td>
</tr> -->
        @endforeach
    </div>
</div>

@endsection