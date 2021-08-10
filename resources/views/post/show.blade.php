<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @component('components.meta')
    @endcomponent
    <title>Myanmar Porn</title>
    @component('components.css')
    @endcomponent
    <style>
        #loader {
            border: 12px solid #08C18A;
            border-radius: 50%;
            border-top: 12px solid #444444;
            width: 70px;
            height: 70px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        .center {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        html,
        body {
            background: #0E1217;
        }

        .my-white-text {
            color: #cfd6e6;
        }

    </style>
</head>

<body>
    <div class="container">
        <div id="loader" class="center"></div>
        <div class="row">
            <div class="col-12 overflow-hidden">
                <div class="mb-5">
                    @component('components.nav')
                    @endcomponent
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="btn btn-success btn-sm p-1" href="{{ route('post.index') }}"><i class=" feather-arrow-left mr-2"></i>Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="my-3">
                    <a href="#" class="badge badge-info"><i class="feather-layers mr-2"></i>{{ \App\Category::find($post->category_id)->name }}</a>
                    <a href="#" class="badge badge-success"><i class="feather-calendar mr-2"></i>{{ $post->created_at->diffForHumans() }}</a>
                    <a href="#" class="badge badge-primary"><i class="feather-eye mr-2"></i>{{ $post->viewers }}</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="my-2">
                    <p class="text-success text-bold">{{ $post->title }}</p>
                    <div class="text-light">{!! $post->content !!}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-2">
                <small class="text-success">Hot Videos 🔥</small>
            </div>
            @foreach ($relateds as $r)
                <div class="col-4 px-1">
                    <div class="w-100 shadow">
                        <div class="thumbnail rounded position-relative" style="background-image: url('{{ asset('storage/poster/' . $r->poster) }}')">
                            <div class="thumbnail-button-wrapper blur-dark justify-content-center align-items-center">
                                <a class="thumbnail-view btn btn-success btn-sm" href="{{ route('post.show', $r->id) }}">View</a>
                            </div>
                            <div class="info position-absolute p-1 blur">
                                <div class="text-right">
                                    <small class="text-success text-right"><i class="feather-eye mr-2"></i>{{ $r->viewers }}</small>
                                </div>
                                <div class="text-right">
                                    @for ($i = 0; $i < $r->ratings; $i++)
                                        <img src="{{ asset('css/mine/fire.png') }}" alt="" style="width: 10px" class="text-right">
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div>
                            <small class="text-left text-white-50">{{ $r->title }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @component('components.js')
    @endcomponent
</body>

</html>
