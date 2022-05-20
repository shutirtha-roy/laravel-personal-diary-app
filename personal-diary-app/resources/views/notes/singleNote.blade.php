@extends('layouts.app')

@section('title', 'Show Personal Diary')

@section('content')

        <div class="row">
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
                        <p class="card-text">{!! $note->content !!}</p>
            
                        <div class="d-flex justify-content-center">
                            @if(Route::is('notes.showSingleNote', ['id' => $note->id]))
                                @include('notes.partials.edit-delete-option')
                            @endif
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

@endsection