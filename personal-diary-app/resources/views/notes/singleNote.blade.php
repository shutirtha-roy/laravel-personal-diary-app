@extends('layouts.app')

@section('title', 'Show Personal Diary')

@section('content')

    <div class="col-12">
        <div class="text-center">
            <img src="{{ asset('images/'.$note->image) }}" class="card-img-top text-center" style="width:50%; height: 45vh;">
            <div class="text-center">
    
                <span class="h3">Category: </span>
                @forelse($note->category as $category)
                    <span class="h3"><button class="btn btn-info mb-3">{{ $category->category_type }}</button></span>
                @empty
                    <h1></h1>
                @endforelse
    
                <h5 class="h1">{{ $note->title }}</h5>
                <h5 class="h4">{!! $note->content !!}</h5>

                <div class="d-flex justify-content-center">
                    @if(Route::is('notes.showSingleNote', ['id' => $note->id]) && $note->user_id == Auth::id())
                        @include('notes.partials.edit-delete-option')
                    @endif
                </div>
                
            </div>
        </div>
    </div>

@endsection