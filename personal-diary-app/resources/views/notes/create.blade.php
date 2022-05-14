@extends('layouts.app')

@section('title', 'Add Note')

@section('content')

    <div class="col-md-12">
        <h1>Create Diary</h1>
        <form  action="{{ route('notes.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            @include('notes.partials.form')
        </form>
    </div>

@endsection