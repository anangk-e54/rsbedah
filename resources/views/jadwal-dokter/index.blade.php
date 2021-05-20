@extends ('layout/webpage')

@section ('content')

<!-- Profile start here -->
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-sm-3">
            <div class="card bg-light">
                <img src="{{asset('assets/images/author/author-img1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-light">
                <img src="{{asset('assets/images/author/author-img1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Profile end here -->
@endsection