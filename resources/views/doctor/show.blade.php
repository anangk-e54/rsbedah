@extends ('layout/main')

@section ('tittle', 'Doctor')

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
<h4 class="page-title pull-left">Preview</h4>
<ul class="breadcrumbs pull-left">
    <li><a href="{{ url('/transports')}}">Transport</a></li>
    <li><span>Doctor Information</span></li>
</ul>
@endsection

@section ('content')
<div class="">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-area">
                        <div class="invoice-head">
                            <div class="row">
                                <div class="text-center col-11">
                                    <span>RS. Bedah Mitra Sehat Lamongan</span>
                                    <p>JL. IKAN MUNGSING VI-A NO.14, SURABAYA</p>
                                    <p>082131971851 / 082234691117 </p>
                                </div>
                                <div class="iv-right col-1 text-md-right">
                                    <br><br>
                                    <!-- <span>INVOICE</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <div class="invoice-address">
                                    <img src="{{  $doctor->getDoctorphoto() }}" class="card-img-top rounded-pill "
                                        alt="...">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="invoice-address">
                                    <h3>{{ $doctor->doctorname}}</h3>
                                    <h5>{{ $doctor->doctorspecialist}}</h5>
                                    <p>NIK &nbsp; &nbsp; &nbsp; : {{ $doctor->doctornik }}</p>
                                    <p>Telp. &nbsp; &nbsp; : {{ $doctor->doctorphone }}</p>
                                    <p>Email &nbsp; : {{ $doctor->doctoremail }}</p>
                                </div>
                                <!-- </div>
                            <div class="col-md-2 text-md-right"> -->

                                <!-- Large modal -->
                                <button type="button" class="btn btn-outline-primary btn-xs mt-3" data-toggle="modal"
                                    data-target=".edittransport">Edit Doctor Information
                                </button>
                                <div class="modal fade edittransport">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Doctor Information</h5>
                                                <button type="button" class="close"
                                                    data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="/doctor/{{$doctor->id}}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="doctorname" class="form-control mt-2"
                                                            value="{{ $doctor->doctorname }}"
                                                            placeholder="nomor kendaraan" disabled>
                                                        <input type="text" name="doctornik" class="form-control mt-2"
                                                            value="{{ $doctor->doctornik }}"
                                                            placeholder="merek kendaraan">
                                                        <input type="text" name="doctorphone" class="form-control mt-2"
                                                            value="{{ $doctor->doctorphone }}"
                                                            placeholder="model kendaraan">
                                                        <input type="text" name="doctoremail" class="form-control mt-2"
                                                            value="{{ $doctor->doctoremail}}"
                                                            placeholder="jenis kendaraan">
                                                        <input type="text" name="doctorspecialist"
                                                            class="form-control mt-2"
                                                            value="{{ $doctor->doctorspecialist}}"
                                                            placeholder="jenis kendaraan">
                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Large Modal End here -->
                            </div>
                        </div>



                        <div class="data-tables mt-5">
                            <table id="dataTable" class="text-center">
                                <h5>Data Ritase Armada</h5>
                                <!-- <button type="button" class="btn btn-outline-info btn-xs" data-toggle="modal" data-target=".addmaintenance">
                                        <i class="ti-plus"> Tambah Ritase Armada </i></button> -->
                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <thead>
                                    <tr class="text-capitalize">
                                        <th class="text-center" style="width: 3%;">#</th>
                                        <th class="text-center">Tanggal</th>
                                        <th class="text-left">Orderan</th>
                                        <th class="text-left">Vendor</th>
                                        <th class="">Harga</th>
                                        <th class="">Akomodasi</th>
                                        <th class="">Kerusakan</th>
                                        <th class="">Sisa</th>
                                        <th class="">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <table class="table table-bordered table-hover text-right">
                                <tfoot>

                                    <tr class="btn-info">

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="invoice-buttons text-right">
                        <a href="/transports/{{ $doctor->id }}/cetak_pdf" class="invoice-btn" target="_blank">print
                            ritase</a>
                        <a href="{{ url('/transports')}}" class="invoice-btn">Lihat semua armada</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Large modal -->
<div class="modal fade addmaintenance">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Ritase Armada</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/maintenances">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="transport_id" class="form-control mt-2" value="{{ $doctor->id }}"
                            placeholder="nomor transaksi">
                        <input type="date" name="mntdate" class="form-control mt-2" placeholder="Tanggal">
                        <input type="text" name="mntorder" class="form-control mt-2" placeholder="Order" required>
                        <input type="text" name="mntvendor" class="form-control mt-2" placeholder="Vendor">
                        <input type="text" name="mntprice" class="form-control mt-2 mntprice" placeholder="Harga">
                        <input type="text" name="mntacomodation" class="form-control mt-2 mntacomodation"
                            placeholder="Akomodasi">
                        <input type="text" name="mntrepair" class="form-control mt-2 mntrepair"
                            placeholder="Biaya Perbaikan Kerusakan">
                        <input type="text" name="mntresidual" class="form-control mt-2 mntresidual" placeholder="Sisa">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Large Modal End here -->

@endsection

@section ('stylejs')

<!-- Start Multiple Insert -->

<!-- End Multiple Insert -->

<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

@endsection