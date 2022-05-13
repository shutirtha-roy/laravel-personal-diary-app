@extends('layouts.app')

@section('title', 'Show Personal Diary')

@section('content')

        <div class="row">
            @forelse($allNotes as $note)
                @include('notes.partials.note-card')
            @empty
                <h1>Empty</h1>
            @endforelse
        </div>

@endsection