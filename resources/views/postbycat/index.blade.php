<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @component('components.meta')
    @endcomponent
    <title>My Darkside Collection</title>
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
    <div id="loader" class="center"></div>
    <div class="container">
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
                <a href="{{ route('post.index') }}">
                    <div class=" mx-2">
                        <button class="btn btn-success btn-sm p-1"><i class=" feather-arrow-left mr-2"></i>Back</button>
                        <p class="text-success d-inline-block">{{ \App\Category::where('id', $article[0]->category_id)->get()[0]->name }}</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-center">
            <script async type="application/javascript" src="https://a.realsrv.com/ad-provider.js"></script>
            <ins class="adsbyexoclick" data-zoneid="4384350"></ins>
            <script>
                (AdProvider = window.AdProvider || []).push({
                    "serve": {}
                });
            </script>
        </div>

        @component('components.modal')

        @endcomponent
        <div class="row">
            @foreach ($article as $p)
                <div class="col-6 px-1">
                    <div class="w-100 shadow">
                        <div class="thumbnail rounded position-relative" style="background-image: url('{{ asset('storage/poster/' . $p->poster) }}')">
                            <div class="thumbnail-button-wrapper blur-dark justify-content-center align-items-center">
                                <a class="thumbnail-view btn btn-success btn-sm" href="{{ route('post.show', $p->id) }}">View</a>
                            </div>
                            <div class="info position-absolute p-1 blur">
                                <div class="text-right">
                                    <small class="text-success text-right"><i class="feather-eye mr-2"></i>{{ $p->viewers }}</small>
                                </div>
                                <div class="text-right">
                                    @for ($i = 0; $i < $p->ratings; $i++)
                                        <img src="{{ asset('css/mine/fire.png') }}" alt="" style="width: 10px" class="text-right">
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div>
                            <small class="text-left text-white-50">{{ $p->title }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <script async type="application/javascript" src="https://a.realsrv.com/ad-provider.js"></script>
                <ins class="adsbyexoclick" data-zoneid="4384344"></ins>
                <script>
                    (AdProvider = window.AdProvider || []).push({
                        "serve": {}
                    });
                </script>
            </div>
        </div>
    </div>
    @component('components.js')
    @endcomponent
</body>

</html>
