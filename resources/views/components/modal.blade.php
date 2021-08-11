<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content  blur-dark">
            <div class="modal-body">
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="feather-x text-info"></i></span>
                </button> --}}
                @foreach (\App\Genre::all() as $g)
                    <a href="{{ route('pbg.index', $g->id) }}" class="badge badge-success text-black-50">{{ $g->name }}
                        <span style="color: rgb(5 62 66)">
                            {{ \App\Genre::find($g->id)->getPost->count() }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
