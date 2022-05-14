@extends('layouts.app')

@section('title', 'Show Personal Diary')

@section('content')

        <div class="row">
            @include('notes.partials.note-card')
        </div>

@endsection