@extends ('layout/horizontalnav')

@section ('content')


<div class="container mb-5">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-area">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="invoice-address">
                                    <img src="{{  $doctor->getDoctorphoto() }}" class="card-img-top rounded-pill "
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="invoice-address">
                                    <h3>{{ $doctor->doctorname}}</h3>
                                    <h5>{{ $doctor->doctorspecialist}}</h5>
                                    <p>NIK &nbsp; &nbsp; &nbsp; : {{ $doctor->doctornik }}</p>
                                    <p>Telp. &nbsp; &nbsp; : {{ $doctor->doctorphone }}</p>
                                    <p>Email &nbsp; : {{ $doctor->doctoremail }}</p>
                                </div>
                            </div>

                            <!-- basic table start -->
                            <div class="col-lg-6 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Jadwal Praktik</h4>
                                        <div class="single-table">
                                            <div class="table-responsive">
                                                <table class="table text-center">
                                                    <thead class="text-uppercase">
                                                        <tr>
                                                            <th scope="col">Hari</th>
                                                            <th scope="col">Mulai</th>
                                                            <th scope="col">Selesai</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($doctor->schedule as $schedule)
                                                        <tr>
                                                            <td>{{ $schedule->day }}</td>
                                                            <td>{{ $schedule->starttime }}</td>
                                                            <td>{{ $schedule->endtime }}</td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- basic table end -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection