@extends ('layout/horizontalnav')

@section ('content')


<!-- Banner Jumbotron start here -->
<!-- <div class="container py-5"> -->
<div class="jumbotron text-white jumbotron-image shadow" style="background-image: url({{  $article->getHeadline() }});">
    <h2 class="mb-4 text-center">
        {{ $article->tittle }}
    </h2>
    <!-- <p class="mb-4">
        Hey, check this out.
    </p>
    <a href="https://bootstrapious.com/snippets" class="btn btn-primary">More Bootstrap Snippets</a> -->
</div>
<!-- </div> -->
<!-- Banner Jumbotron end here -->

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-5">
                        <div class="media-body">
                            <h1 class="mb-3 text-center">{{ $article->tittle }}</h1>
                            <p class="text-center">| &nbsp; Author : {{ $article->author }} &nbsp; | &nbsp; Editor :
                                {{ $article->editor }} &nbsp; | &nbsp;
                                {{ $article->created_at }} &nbsp; | &nbsp; {{ $article->resource }} &nbsp; |</p>
                            <div class="container">
                                <p class=" text-justify mt-3">{{ $article->headline }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="jumbotron text-white jumbotron-image shadow"
                        style="background-image: url({{  $article->getFirstparagraph() }});">
                    </div>
                    <div class="media mb-5">
                        <div class="media-body">
                            <p class="text-justify"> {{ $article->firstparagraph }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="jumbotron text-white jumbotron-image shadow"
                        style="background-image: url({{  $article->getSecondparagraph() }});">
                    </div>
                    <div class="media mb-5">
                        <div class="media-body">
                            <p class="text-justify"> {{ $article->secondparagraph }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="jumbotron text-white jumbotron-image shadow"
                        style="background-image: url({{  $article->getThirdparagraph() }});">
                    </div>
                    <div class="media mb-5">
                        <div class="media-body">
                            <p class="text-justify"> {{ $article->thirdparagraph }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="jumbotron text-white jumbotron-image shadow"
                        style="background-image: url({{  $article->getFourthparagraph() }});">
                    </div>
                    <div class="media mb-5">
                        <div class="media-body">
                            <p class="text-justify"> {{ $article->fourthparagraph }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="media mb-5">
                        <div class="media-body">
                            <p class="text-justify"> {{ $article->footline }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection