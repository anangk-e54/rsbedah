@extends ('layout/main')

@section ('content')

<div class="">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-head">
                        <h4 class="header-tittle">New Facility</h4>
                        <p cals="text-muted font-14 mb-3"> Please complete all field in this form </p>
                    </div>
                    <form method="post" action="/facility/store" enctype="multipart/form-data">
                        @csrf
                        <section>
                            <div class="mt-1">
                                <div class="row">
                                    <div class="col-xs-4 col-md-10">
                                        <div class="form-group">
                                            <!-- <h5>Informasi Kendaraan</h5> -->
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="facility_name" class="">Name</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="text" name="facility_name"
                                                        class="form-control form-control-sm @error ('facility_name') is-invalid @enderror"
                                                        id="facility_name" value="{{ old('facility_name')}}">
                                                    @error ('facility_name')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Nomor
                                                        Kendaraan terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="description" class="">Description</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <textarea name="description"
                                                        class="form-control form-control-sm @error ('description') is-invalid @enderror"
                                                        id="description" value="{{ old('description')}}">
                                                    </textarea>
                                                    @error ('description')
                                                    <div class="alert alert-danger invalid-feedback">Mohon
                                                        description terlebih dahulu ! | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="facility_img" class="">Picture</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="file" name="facility_img"
                                                        class="form-control form-control-sm @error ('facility_img') is-invalid @enderror"
                                                        id="facility_img" value="{{ old('facility_img')}}">
                                                    @error ('facility_img')
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