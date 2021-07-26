@extends ('layout/main')

@section ('content')

<div class="">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-head">
                        <h4 class="header-tittle">New Article</h4>
                        <p cals="text-muted font-14 mb-3"> Please write headline max 225 character </p>
                    </div>
                    <form method="post" action="/article/store" enctype="multipart/form-data">
                        @csrf
                        <section>
                            <div class="mt-1">
                                <div class="row">
                                    <div class="col-xs-4 col-md-10">
                                        <div class="form-group">
                                            <!-- <h5>Informasi Kendaraan</h5> -->
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="tittle" class="">Tille</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="text" name="tittle"
                                                        class="form-control form-control-sm @error ('tittle') is-invalid @enderror"
                                                        id="tittle" value="{{ $article->tittle}}">
                                                    @error ('tittle')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Nomor
                                                        judul terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="author" class="">Author</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="text" name="author"
                                                        class="form-control form-control-sm @error ('author') is-invalid @enderror"
                                                        id="author" value="{{ $article->author }}">
                                                    @error ('author')
                                                    <div class="alert alert-danger invalid-feedback">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="editor" class="">Editor</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="text" name="editor"
                                                        class="form-control form-control-sm @error ('editor') is-invalid @enderror"
                                                        id="editor" value="{{ $article->editor }}">
                                                    @error ('editor')
                                                    <div class="alert alert-danger invalid-feedback">{{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="resource" class="">Resource</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="text" name="resource"
                                                        class="form-control form-control-sm @error ('resource') is-invalid @enderror"
                                                        id="resource" value="{{ $article->resource }}">
                                                    @error ('resource')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi sumber
                                                        berita terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="headline" class="">Headline</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <textarea name="headline"
                                                        class="form-control form-control-sm @error ('headline') is-invalid @enderror"
                                                        id="headline" value="{{ $article->headline }}"> {{ $article->headline }}
                                                    </textarea>
                                                    @error ('headline')
                                                    <div class="alert alert-danger invalid-feedback">Mohon
                                                        headline terlebih dahulu ! | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="headline_img" class="">Headline Image</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="file" name="headline_img"
                                                        class="form-control form-control-sm @error ('headline_img') is-invalid @enderror"
                                                        id="headline_img" value="{{ $article->headline_img }}">
                                                    @error ('headline_img')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Jenis
                                                        Kendaraan terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="firstparagraph" class="">firstparagraph</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <textarea name="firstparagraph"
                                                        class="form-control form-control-sm @error ('firstparagraph') is-invalid @enderror"
                                                        id="firstparagraph" value="{{ $article->firstparagraph }}"> {{ $article->firstparagraph }}
                                                    </textarea>
                                                    @error ('firstparagraph')
                                                    <div class="alert alert-danger invalid-feedback">Mohon
                                                        firstparagraph terlebih dahulu ! | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="firstparagraph_img" class="">firstparagraph
                                                        Image</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="file" name="firstparagraph_img"
                                                        class="form-control form-control-sm @error ('firstparagraph_img') is-invalid @enderror"
                                                        id="firstparagraph_img"
                                                        value="{{ $article->firstparagraph_img }}">
                                                    @error ('firstparagraph_img')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Jenis
                                                        Kendaraan terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="secondparagraph" class="">secondparagraph</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <textarea name="secondparagraph"
                                                        class="form-control form-control-sm @error ('secondparagraph') is-invalid @enderror"
                                                        id="secondparagraph" value="{{ $article->secondparagraph }}"> {{ $article->secondparagraph }}
                                                    </textarea>
                                                    @error ('secondparagraph')
                                                    <div class="alert alert-danger invalid-feedback">Mohon
                                                        secondparagraph terlebih dahulu ! | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="secondparagraph_img" class="">secondparagraph
                                                        Image</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="file" name="secondparagraph_img"
                                                        class="form-control form-control-sm @error ('secondparagraph_img') is-invalid @enderror"
                                                        id="secondparagraph_img"
                                                        value="{{ $article->secondparagraph_img }}">
                                                    @error ('secondparagraph_img')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Jenis
                                                        Kendaraan terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="thirdparagraph" class="">thirdparagraph</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <textarea name="thirdparagraph"
                                                        class="form-control form-control-sm @error ('thirdparagraph') is-invalid @enderror"
                                                        id="thirdparagraph" value="{{ $article->thirdparagraph }}"> {{ $article->thirdparagraph }}
                                                    </textarea>
                                                    @error ('thirdparagraph')
                                                    <div class="alert alert-danger invalid-feedback">Mohon
                                                        thirdparagraph terlebih dahulu ! | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="thirdparagraph_img" class="">thirdparagraph
                                                        Image</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="file" name="thirdparagraph_img"
                                                        class="form-control form-control-sm @error ('thirdparagraph_img') is-invalid @enderror"
                                                        id="thirdparagraph_img"
                                                        value="{{ $article->thirdparagraph_img}}">
                                                    @error ('thirdparagraph_img')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Jenis
                                                        Kendaraan terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="fourthparagraph" class="">fourthparagraph</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <textarea name="fourthparagraph"
                                                        class="form-control form-control-sm @error ('fourthparagraph') is-invalid @enderror"
                                                        id="fourthparagraph" value="{{ $article->fourthparagraph}}"> {{ $article->fourthparagraph}}
                                                    </textarea>
                                                    @error ('fourthparagraph')
                                                    <div class="alert alert-danger invalid-feedback">Mohon
                                                        fourthparagraph terlebih dahulu ! | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="fourthparagraph_img" class="">fourthparagraph
                                                        Image</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <input type="file" name="fourthparagraph_img"
                                                        class="form-control form-control-sm @error ('fourthparagraph_img') is-invalid @enderror"
                                                        id="fourthparagraph_img"
                                                        value="{{ $article->fourthparagraph_img}}">
                                                    @error ('fourthparagraph_img')
                                                    <div class="alert alert-danger invalid-feedback">Mohon isi Jenis
                                                        Kendaraan terlebih dahulu | {{ $message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row  mt-2">
                                                <div class="col-xs-4 col-md-2 ">
                                                    <label for="footline" class="">footline</label>
                                                </div>
                                                <div class="col-xs-4 col-md-9">
                                                    <textarea name="footline"
                                                        class="form-control form-control-sm @error ('footline') is-invalid @enderror"
                                                        id="footline" value="{{ $article->footline}}"> {{ $article->footline}}
                                                    </textarea>
                                                    @error ('footline')
                                                    <div class="alert alert-danger invalid-feedback">Mohon
                                                        footline terlebih dahulu ! | {{ $message}}</div>
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