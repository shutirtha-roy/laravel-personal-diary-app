<div class="col-12 col-sm-6 col-md-4 mt-3">
    <div class="card">
        <img src="{{ asset('images/'.$note->image) }}" class="card-img-top" style="width:100%; height: 35vh;">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $note->title }}</h5>
            <p class="card-text">{!! substr($note->content, 0, 80) !!}</p>

            @if(Route::is('note.showNote'))
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            @endif
            
        </div>
    </div>
</div>