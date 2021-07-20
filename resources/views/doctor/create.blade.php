@extends ('layout/main')

@section ('content')

<div class="">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-head">
                        <h4 class="header-tittle">New Doctor</h4>
                        <p cals="text-muted font-14 mb-3"> Please complete all field in this form </p>
                    </div>
                    <form method="post" action="/doctor/store" enctype="multipart/form-data">
                        @csrf
                        <section>
                            <div class="mt-1">
                                <div class="row">
                                    <div class="col-xs-4 col-md-10">
                                        <div class="form-group">
                                            <!-- <h5>Informasi Kendaraan</h5> -->
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="doctorname" class="">Name</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="text" name="doctorname"
                                                        class="form-control form-control-sm @error ('doctorname') is-invalid @enderror"
                                                        id="doctorname" value="{{ old('doctorname')}}">
                                                    @error ('doctorname')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Nomor
                                                        Kendaraan terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="doctornik" class="">ID. Number</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="text" name="doctornik"
                                                        class="form-control form-control-sm @error ('doctornik') is-invalid @enderror"
                                                        id="doctornik" value="{{ old('doctornik')}}">
                                                    @error ('doctornik')
                                                    <div class="alert alert-danger invalid-feedback">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="doctorphone" class="">Telp. Number</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="text" name="doctorphone"
                                                        class="form-control form-control-sm @error ('doctorphone') is-invalid @enderror"
                                                        id="doctorphone" value="{{ old('doctorphone')}}">
                                                    @error ('doctorphone')
                                                    <div class="alert alert-danger invalid-feedback">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="doctoremail" class="">Email</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="email" name="doctoremail"
                                                        class="form-control form-control-sm @error ('doctoremail') is-invalid @enderror"
                                                        id="doctoremail" value="{{ old('doctoremail')}}">
                                                    @error ('doctoremail')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Jenis
                                                        Kendaraan terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="doctorspecialist" class="">Email</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="text" name="doctorspecialist"
                                                        class="form-control form-control-sm @error ('doctorspecialist') is-invalid @enderror"
                                                        id="doctorspecialist" value="{{ old('doctorspecialist')}}">
                                                    @error ('doctorspecialist')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Jenis
                                                        Bidang Spesialis dari Dokter ini ! | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="doctorphoto" class="">Profile Picture</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="file" name="doctorphoto"
                                                        class="form-control form-control-sm @error ('doctorphoto') is-invalid @enderror"
                                                        id="doctorphoto" value="{{ old('doctorphoto')}}">
                                                    @error ('doctorphoto')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Jenis
                                                        Kendaraan terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <td><input type="submit" name="" value="Submit" class="btn btn-primary btn-xs"></td>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection