@extends ('layout/horizontalnav')

@section ('content')


<!-- Banner Carusel start here -->
<div id="carouselExampleIndicators" class="carousel carousel-banner slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner" style="height:960px;">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/bg/IMG_7788.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/bg/IMG_7786.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <!-- <div class="carousel-item">
            <img src="{{ asset('assets/images/bg/bg-medical.jpg') }}" class="d-block w-100" alt="...">
        </div> -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Banner Carusel end here -->


<!-- Tim Dokter Start here -->
<!-- <div class="bg-rsb-blue mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 mb-3 text-white">
                <h3> Tim Dokter</h3>
            </div>
            <div class="col-md-6 text-right mt-5 mb-3 text-white">
                <a href="{{ url('/tim-dokter')}}" class="btn btn-xs btn-outline-info">Lihat semua dokter</a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="row ml-3">
                @foreach( $articles as $article)
                <div class="col-sm-3 ">
                    <div class="card bg-light">
                        <img src="{{  $article->getHeadline() }}" class="card-img-top" alt="...">
                        <div class="card-body  text-center">
                            <h5>{{ $article->tittle }}</h5>
                            <p class="card-text">{{ $article->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
</div>
</div>
</div> -->
<!-- Tim Dokter End Here-->

<div class="container">

    @foreach( $articles as $article)
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-5">
                        <img class="media-headline-tumbnail mr-4" style="max-width=360px;"
                            src="{{  $article->getHeadline() }}" alt="image">
                        <div class="media-body ">
                            <h4 class="mb-3">{{ $article->tittle }}</h4>
                            <p>Author : {{ $article->author }} &nbsp; Editor : {{ $article->editor }} &nbsp;
                                {{ $article->created_at }}</p>
                            <p class="mt-3 text-justify max-headline">{{ $article->headline }} </p>

                            <a href="/artikel-berita/{{ $article->id }}" class="btn btn-xs btn-primary mt-3">Lihat
                                selengkapnya ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach



    <!-- Article area start -->
    <div class="row">
        @foreach( $articles as $article)
        <div class="col-xl-12 col-lg-12 mt-5">
            <div class="card">
                <div class="card-body ">
                    <div class="">
                        <div class="article-preview-large-item-large">
                            <div class="article-preview-large-img">
                                <img src="{{  $article->getHeadline() }}" alt="author image">
                            </div>
                            <div class="article-preview-large-content ">
                                <h4 class="article-preview-large-name mt-3">{{ $article->tittle }}</h4>
                                <p>Author : {{ $article->author }} &nbsp; Editor : {{ $article->editor }} &nbsp;
                                    {{ $article->created_at }}</p>
                                <p class="max-headline mt-3">{{ $article->headline }}</p>
                                <a href="/artikel-berita/{{ $article->id }}" class="btn btn-xs btn-primary mt-3">Lihat
                                    selengkapnya ...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Article area end -->

</div>
@endsection