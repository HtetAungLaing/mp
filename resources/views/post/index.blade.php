<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @component('components.meta')
        <!-- Primary Meta Tags -->
        <meta name="title" content="Inngyinnews Myanmar Porn Website">
        <meta name="description" content="Free Myanmar Porn Videos.">
        <meta name="keywords" content="porn,myanmar porn,myanmar xxx,myanmar xvideo,myanmar all car,burmese sex,myanmar sex,sex,myanmar fuck,ingyinnews">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
    @endcomponent
    <title>My Darkside Collection</title>
    @component('components.css')
    @endcomponent
    <style>
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
        <div class="row">
            <div class="col-12 overflow-hidden">
                <div>
                    @component('components.nav')
                    @endcomponent
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 overflow-hidden">
                <div class="mt-5">
                    @component('components.slider')
                    @endcomponent
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-12 overflow-hidden">
                <div class="w-75 mx-auto p-1 mt-2 blur rounded">
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="#"><i class="feather-facebook my-white"></i></a>
                        <a href="#"><i class="feather-mail my-white"></i></a>
                        <a href="#"><i class="feather-smartphone my-white"></i></a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            {{-- @foreach (\App\Category::all() as $a) --}}
            @for ($c = 0; $c < \App\Category::all()->count(); $c++)
                <div class="col-12">
                    <div class="mt-3 mb-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="my-green mr-1 text-nowrap">{{ \App\Category::all()[$c]->name }}<i class="feather-layers ml-2"></i></p>
                            <a href="{{ route('pbc.index', \App\Category::all()[$c]->id) }}" class="btn btn-sm btn-outline-success">More<i class="feather-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
                @foreach (\App\Article::where('category_id', $c + 1)->latest()->limit(3)->get()
    as $p)
                    <div class="col-4 px-1">
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
            @endfor
            {{-- @endforeach --}}

        </div>
        <div class="row">
            <div class="col-12">
                <div>
                    <p class="text-light">Find Us Here <i class="feather-navigation text-success ml-2"></i></p>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a target="__blink" class="mx-2" href="mailto:aaaa@df.com"><img style="width: 25px;" src="{{ asset('css/mine/mail.png') }}" alt=""></a>
                    <a target="__blink" class="mx-2" href="https://www.facebook.com/ShaneMangaReader/"><img style="width: 25px;" src="{{ asset('css/mine/facebook.png') }}" alt=""></a>
                    <a target="__blink" class="mx-2" href="tel:+959794758316"><img style="width: 25px;" src="{{ asset('css/mine/phone.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    @component('components.js')
    @endcomponent
</body>

</html>
