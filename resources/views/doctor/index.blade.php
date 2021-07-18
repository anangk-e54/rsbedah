@extends ('layout/horizontalnav')

@section ('content')


<div class="container">
    <div class="row mt-5 mb-5">
        @foreach( $doctors as $doctor)
        <div class="col-sm-3 mb-5">
            <div class="card bg-light">
                <img src="{{asset('assets/images/team/doctor-man.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body  text-center">
                    <h5>{{ $doctor->doctorname }}</h5>
                    <p class="card-text">{{ $doctor->doctorphone }}</p>
                    <a href="{{ url('/jadwaldokter')}}" class="btn btn-xs btn-primary">Lihat Jadwal</a>
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