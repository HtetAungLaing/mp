<nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow shadow-sm py-0 px-md-3 px-2 m-0 blur-dark">
    <a class="navbar-brand text-success" href="{{ route('post.index') }}">My Darksite Collection</a>
    <!-- Button trigger modal -->
    <i type="button" class="feather-search text-info" data-toggle="modal" data-target="#exampleModal">
    </i>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation" style="outline: none; border: none">
        <i class="feather-align-right"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('post.index') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            @foreach (\App\Category::all() as $cat)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pbc.index', $cat->id) }}">{{ $cat->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
