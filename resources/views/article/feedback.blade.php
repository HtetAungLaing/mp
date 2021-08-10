@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body p-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active"><a href="{{ route('article.index') }}">Article Lists</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @inject('cat', '\App\Category')
            <div class="col-12 mt-">
                <div class="card shadow-sm">
                    <div class="card-body">
                        @if (session('del-status'))
                            {!! session('del-status') !!}
                        @endif
                        <h5 class="mb-4">Article Lists</h5>
                        <table class="table table-hovered mb-0 at-list table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Description</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedbacks as $f)
                                    <tr>
                                        <td>{{ $f->id }}</td>
                                        <td>{{ $f->description }}</td>
                                        <td class="text-nowrap">{{ $f->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('table').DataTable({
            "order": [
                [0, "desc"]
            ]
        });

    </script>
@endsection
