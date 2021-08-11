<div id="carouselExampleIndicators" class="carousel slide overflow-hidden" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        @php
            $a = \App\Article::latest()
                ->limit(4)
                ->get();
        @endphp
        <div class="carousel-item active">
            <div class="slide-box rounded" style="background: url('{{ asset('storage/poster/' . $a[0]->poster) }}');">
            </div>
            {{-- <img class="d-block" style="width: 100%;" src="{{ asset('storage/poster/' . $a[0]->poster) }}" alt=" {{ $a[0]->title }}"> --}}
        </div>
        <div class="carousel-item">
            <div class="slide-box rounded" style="background: url('{{ asset('storage/poster/' . $a[1]->poster) }}');">
            </div>
            {{-- <img class="d-block" style="width: 100%;" src="{{ asset('storage/poster/' . $a[0]->poster) }}" alt=" {{ $a[0]->title }}"> --}}
        </div>
        <div class="carousel-item">
            <div class="slide-box rounded" style="background: url('{{ asset('storage/poster/' . $a[2]->poster) }}');">
            </div>
            {{-- <img class="d-block" style="width: 100%;" src="{{ asset('storage/poster/' . $a[0]->poster) }}" alt=" {{ $a[0]->title }}"> --}}
        </div>
        <div class="carousel-item">
            <div class="slide-box rounded" style="background: url('{{ asset('storage/poster/' . $a[3]->poster) }}');">
            </div>
            {{-- <img class="d-block" style="width: 100%;" src="{{ asset('storage/poster/' . $a[0]->poster) }}" alt=" {{ $a[0]->title }}"> --}}
        </div>
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
