<div class="col-12 col-sm-6 col-md-4 mt-3">
    <div class="card">
        <img src="{{ asset('images/'.$note->image) }}" class="card-img-top" style="width:100%; height: 35vh;">
        <div class="card-body text-center">

            <span class="h4">Category: </span>
            @forelse($note->category as $category)
                <span class="h3"><button class="btn btn-info mb-3">{{ $category->category_type }}</button></span>
            @empty
                <h1></h1>
            @endforelse

            <h5 class="card-title"><a href="{{ url('notes/' . $note->id) }}">{{ $note->title }}</a></h5>
            <p class="card-text">{!! substr($note->content, 0, 80) !!}</p>

            @if(Route::is('notes.showNote'))
                <a href="{{ url('notes/' . $note->id . '/edit') }}" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            @endif
            
        </div>
    </div>
</div>