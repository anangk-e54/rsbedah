@extends ('layout/main')

@section ('tittle', 'article')

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
<h4 class="page-title pull-left"> Article List</h4>
<ul class="breadcrumbs pull-left">
    <li><a href="{{ url('/')}}">Home</a></li>
    <li><span>Article</span></li>
</ul>
@endsection

@section ('content')
<div class="">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="header-title mt-3"> Article List</h4>
                        </div>
                        <div class="col-4">
                            <div class="pull-right">
                                <a class="btn btn-outline-primary btn-sm mb-3" href="/article/create"><i
                                        class="ti-plus">&nbsp; New Article</i></a>
                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="data-tables">
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tittle</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Editor</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $articles as $article)
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>{{ $article->tittle }}</td>
                                    <td>{{ $article->author }}</td>
                                    <td>{{ $article->editor}}</td>
                                    <td>{{ $article->created_at }}</td>
                                    <td class=>
                                        <a href="/article/{{ $article->id }}"
                                            class="btn btn-rounded btn-primary btn-xs "><i
                                                class="ti-flickr-alt"><span>&nbsp;View</span></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <!-- <a href="/articles/{{ $article->id }}/edit" class="btn btn-rounded btn-warning btn-xs " ><i class="ti-pencil-alt"><span>&nbsp;Edit</span></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                                        <form action="/article/{{ $article->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-rounded btn-danger btn-xs"
                                                onclick="return confirm('Are you sure Delete this Data?')"><i
                                                    class="ti-trash"></i><span>&nbsp;Delete</span></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div class="invoice-buttons text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section ('stylejs')

<!-- Start datatable js -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

@endsection