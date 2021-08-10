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
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Actions</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $a)
                                    <tr>
                                        <td>{{ $a->id }}</td>
                                        <td class="text-nowrap">{{ Str::substr($a->title, 0, 40) }}</td>
                                        <td>{{ \App\User::find($a->user_id)->name }}</td>
                                        <td class="text-nowrap">
                                            <a href="{{ route('article.show', $a->id) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="feather-more-horizontal "></i>
                                            </a>
                                            <a href="{{ route('article.edit', $a->id) }}" class="btn btn-sm btn-outline-success">
                                                <i class="feather-edit-3"></i>
                                            </a>
                                            <form action="{{ route('article.destroy', $a->id) }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-sm btn-danger" type="submit"><i class="feather-trash"></i></button>
                                            </form>
                                        </td>
                                        <td class="text-nowrap">{{ $a->created_at->diffForHumans() }}</td>
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
