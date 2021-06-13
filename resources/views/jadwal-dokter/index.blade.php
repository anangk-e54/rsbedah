@extends ('layout/horizontalnav')

@section ('content')

<!-- Profile start here -->
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-sm-3">
            <div class="card bg-light">
                <img src="{{asset('assets/images/team/doctor-man.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body  text-center">
                    <h5>Bidang Spesialis</h5>
                    <p class="card-text">dr. Dewa Arimasen</p>
                    <a href="{{ url('/jadwaldokter')}}" class="btn btn-xs btn-primary">Lihat Jadwal</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-light">
                <img src="{{asset('assets/images/team/doctor-woman.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5>Bidang Spesialis</h5>
                    <p class="card-text">dr. Fulana ikimasho</p>
                    <a href="{{ url('/jadwaldokter')}}" class="btn btn-xs btn-primary">Lihat Jadwal</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile end here -->
@endsection