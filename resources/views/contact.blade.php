@extends ('layout/main')

@section ('tittle', 'Contact Support')

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
<h4 class="page-title pull-left">Contact</h4>
<ul class="breadcrumbs pull-left">
    <li><a href="{{ url('orders')}}">Home</a></li>
    <li><span>Contact Support</span></li>
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
                                <div class="iv-left col-6">
                                    <span>Contact Support</span>
                                    <p>Layanan Pemeliharaan Sistem Informasi Rumah Sakit Bedah Mitra Sehat Lamongan.</p>
                                    <p></p>
                                </div>
                                <div class="iv-right col-6 text-md-right">
                                    <br>
                                    <span>Hubungi kami : </span><br>
                                    <!-- Large modal -->
                                    <button type="button" class="btn btn-outline-warning btn-xs" data-toggle="modal"
                                        data-target=".editorder">Lihat Informasi Kontak
                                    </button>
                                    <div class="modal fade editorder">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Technical Support !</h5>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal"><span>&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- <form method="post" action="">
                                                            @method('patch')
                                                            @csrf -->

                                                    <div class="form-group">
                                                        <div class="row  mt-2">
                                                            <div class="col-xs-4 col-md-2 ">
                                                                <label for="customer" class="">Name </label>
                                                            </div>
                                                            <div class="col-xs-4 col-md-10">
                                                                <input type="text" name="customer"
                                                                    class="form-control form-control-sm @error ('customer') is-invalid @enderror"
                                                                    id="customer" value="Anang Khoirianto" disabled>
                                                                @error ('customer')
                                                                <div class="alert alert-danger invalid-feedback">
                                                                    {{ $message}}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row  mt-2">
                                                            <div class="col-xs-4 col-md-2 ">
                                                                <label for="address" class="">Departmen</label>
                                                            </div>
                                                            <div class="col-xs-4 col-md-10">
                                                                <input type="text" name="address"
                                                                    class="form-control form-control-sm @error ('address') is-invalid @enderror"
                                                                    id="address" value="Product Development" disabled>
                                                                @error ('address')
                                                                <div class="alert alert-danger invalid-feedback">
                                                                    {{ $message}}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row  mt-2">
                                                            <div class="col-xs-4 col-md-2 ">
                                                                <label for="phone" class="">Telp.</label>
                                                            </div>
                                                            <div class="col-xs-4 col-md-10">
                                                                <input type="text" name="phone"
                                                                    class="form-control form-control-sm @error ('phone') is-invalid @enderror"
                                                                    id="phone" value="0822 2921 1313" disabled>
                                                                @error ('phone')
                                                                <div class="alert alert-danger invalid-feedback">
                                                                    {{ $message}}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Tutup</button>
                                                    <a href="https://api.whatsapp.com/send?phone=6282229211313&text=&source=&data=&app_absent="
                                                        class="btn btn-primary" target="_blank">Hubungi melalui
                                                        WhatsApp</a>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Large Modal End here -->
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="invoice-address">
                                    <h3>Dukungan Layanan Perawatan</h3>

                                </div>
                            </div>
                            <div class="col-md-4 text-md-left">
                                <ul class="invoice-date">
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="invoice-table table-responsive mt-2">
                            <table class="table table-bordered table-hover text-right">
                                <thead>
                                    <tr class="text-capitalize">
                                        <th class="text-center" style="width: 3%;">#</th>
                                        <th class="text-left">Deskripsi Layanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" style="width: 3%;">1</th>
                                        <th class="text-left">Perbaikan Bug System</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 3%;">2</th>
                                        <th class="text-left">Panduan Penggunaan Perangkat Lunak</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 3%;">3</th>
                                        <th class="text-left">Perawatan hosting dan domain</th>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="text-center"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="invoice-buttons text-right">
                        <a href="https://api.whatsapp.com/send?phone=6282229211313&text=&source=&data=&app_absent="
                            class="invoice-btn" target="_blank">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Large modal -->
<div class="modal fade addorder">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <!-- <form method="post" action="/orderitems"> -->
                @csrf


                <div class="form-group">
                    <input type="hidden" name="order_id" class="form-control mt-2" value=""
                        placeholder="nomor transaksi">
                    <div class="row  mt-2">
                        <div class="col-xs-4 col-md-2 ">
                            <label for="item" class="">Nama Barang</label>
                        </div>
                        <div class="col-xs-4 col-md-10">
                            <input type="text" name="item"
                                class="form-control form-control-sm @error ('item') is-invalid @enderror" id="item"
                                value="">
                            @error ('item')
                            <div class="alert alert-danger invalid-feedback">{{ $message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-xs-4 col-md-2 ">
                            <label for="qty" class="">Quantity</label>
                        </div>
                        <div class="col-xs-4 col-md-10">
                            <input type="text" name="qty"
                                class="form-control form-control-sm @error ('qty') is-invalid @enderror" id="qty"
                                value="">
                            @error ('qty')
                            <div class="alert alert-danger invalid-feedback">{{ $message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-xs-4 col-md-2 ">
                            <label for="uom" class="">UoM</label>
                        </div>
                        <div class="col-xs-4 col-md-10">
                            <input type="text" name="uom"
                                class="form-control form-control-sm @error ('uom') is-invalid @enderror" id="uom"
                                value="">
                            @error ('uom')
                            <div class="alert alert-danger invalid-feedback">{{ $message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-xs-4 col-md-2 ">
                            <label for="desc" class="">Keterangan</label>
                        </div>
                        <div class="col-xs-4 col-md-10">
                            <input type="text" name="desc"
                                class="form-control form-control-sm @error ('desc') is-invalid @enderror" id="desc"
                                value="">
                            @error ('desc')
                            <div class="alert alert-danger invalid-feedback">{{ $message}}</div>
                            @enderror
                        </div>
                    </div>
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



<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

@endsection