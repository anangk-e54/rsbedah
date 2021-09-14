@extends ('layout/main')

@section ('content')

<div class="">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-head">
                        <h4 class="header-tittle">New Service</h4>
                        <p cals="text-muted font-14 mb-3"> Please write headline max 225 character </p>
                    </div>
                    <form method="post" action="/service/{{$service->id}}" enctype="multipart/form-data">
                        @csrf
                        <section>
                            <div class="mt-1">
                                <div class="row">
                                    <div class="col-xs-4 col-md-10">
                                        <div class="form-group">
                                            <!-- <h5>Informasi Kendaraan</h5> -->
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="service_name" class="">Name</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="text" name="service_name"
                                                        class="form-control form-control-sm @error ('service_name') is-invalid @enderror"
                                                        id="service_name" value="{{ $service->service_name}}">
                                                    @error ('service_name')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Nomor
                                                        judul terlebih dahulu | {{ $message}}</div>
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
                                                        id="description" value="{{ $service->description }}"> {{ $service->description }}
                                                    </textarea>
                                                    @error ('description')
                                                    <div class="alert alert-danger invalid-feedback">Mohon
                                                        description terlebih dahulu ! | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="service_img" class="">Image</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <img src="{{  $service->getservice_img() }}" class="card-img-top"
                                                        alt="...">
                                                    <input type="file" name="service_img"
                                                        class="form-control form-control-sm @error ('service_img') is-invalid @enderror"
                                                        id="service_img" value="{{ $service->service_img }}">
                                                    @error ('service_img')
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