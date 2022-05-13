@extends('layouts.app')

@section('title', 'Add Note')

@section('content')

    <div class="col-md-12">
        <h1>Create Diary</h1>
        @include('notes.partials.form')
    </div>

@endsection