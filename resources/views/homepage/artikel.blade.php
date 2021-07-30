@extends ('layout/horizontalnav')

@section ('content')


<div class="container">

    @foreach( $articles as $article)
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-5">
                        <img class="media-headline-tumbnail mr-4" style="max-width=360px;"
                            src="{{  $article->getHeadline() }}" alt="image">
                        <div class="media-body">
                            <h4 class="mb-3">{{ $article->tittle }}</h4>
                            <p>Author : {{ $article->author }} &nbsp; Editor : {{ $article->editor }} &nbsp;
                                {{ $article->created_at }}</p>
                            <p class="mt-3">{{ $article->headline }} </p>

                            <a href="/profil-dokter/{{ $article->id }}" class="btn btn-xs btn-primary mt-3">Lihat
                                selengkapnya ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection