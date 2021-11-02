@extends ('layout/horizontalnav')

@section ('tittle', 'Jadwal Dokter')

@section ('stylecss')

<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">

@endsection

@section ('content')

<!-- Banner Carusel start here -->
<div id="carouselExampleIndicators" class="carousel carousel-banner slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner" style="height:960px;">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/bg/medical1.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
</div>
<!-- Banner Carusel end here -->


<!-- data table start -->
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Jadwal Praktek Dokter</h4>
            <div class="data-tables">
                <table id="dataTable" class="text-center">
                    <thead class="bg-light text-capitalize">
                        <tr>
                            <th>Dokter</th>
                            <th>Spesialis</th>
                            <th>Hari</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($schedules as $schedule)
                        <tr>
                            <td>{{ $schedule->doctor->doctorname }}</td>
                            <td>{{ $schedule->doctor->doctorspecialist }}</td>
                            <td>{{ $schedule->day }}</td>
                            <td>{{ $schedule->starttime }}</td>
                            <td>{{ $schedule->endtime }}</td>
                            <td><a href="/profil-dokter/{{ $schedule->doctor_id }}"
                                    class="btn btn-rounded btn-primary btn-xs "><i
                                        class="ti-flickr-alt"><span>&nbsp;Lihat Profil Dokter</span></i></a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- data table end -->

@endsection

@section ('stylejs')

<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

@endsection