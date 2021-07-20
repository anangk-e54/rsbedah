@extends ('layout/main')

@section ('tittle', 'doctor')

@section ('stylecss')

<!-- Start datatable css -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">

@endsection

@section ('breadcrumbs')
<h4 class="page-title pull-left"> doctor List</h4>
<ul class="breadcrumbs pull-left">
    <li><a href="{{ url('/')}}">Home</a></li>
    <li><span>doctor</span></li>
</ul>
@endsection

@section ('content')
<div class="">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="header-title mt-3"> Doctor List</h4>
                        </div>
                        <div class="col-4">
                            <div class="pull-right">
                                <a class="btn btn-outline-primary btn-sm mb-3" href="/doctor/create"><i
                                        class="ti-plus">&nbsp; New Doctor</i></a>
                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="data-tables">
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Telp.</th>
                                    <th scope="col">Email</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $doctors as $doctor)
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td><img src="{{  $doctor->getDoctorphoto() }}" class="rounded-circle" width="50px"
                                            alt="...">
                                    </td>
                                    <td>{{ $doctor->doctorname }}</td>
                                    <td>{{ $doctor->doctornik }}</td>
                                    <td>{{ $doctor->doctorphone}}</td>
                                    <td>{{ $doctor->doctoremail }}</td>
                                    <td class=>
                                        <a href="/doctor/{{ $doctor->id }}"
                                            class="btn btn-rounded btn-primary btn-xs "><i
                                                class="ti-flickr-alt"><span>&nbsp;View</span></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <!-- <a href="/doctors/{{ $doctor->id }}/edit" class="btn btn-rounded btn-warning btn-xs " ><i class="ti-pencil-alt"><span>&nbsp;Edit</span></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                                        <form action="/doctor/{{ $doctor->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-rounded btn-danger btn-xs"
                                                onclick="return confirm('Are you sure Delete this Data?')"><i
                                                    class="ti-trash"></i><span>&nbsp;Delete</span></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div class="invoice-buttons text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section ('stylejs')

<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

@endsection