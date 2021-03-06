@extends('layouts.app')

@section('title', 'Add Note')

@section('content')

    <div class="col-md-12">
        <h1>Edit Diary</h1>
        <form action="{{ route('notes.updateNote', ['id' => $note->id]) }}" enctype="multipart/form-data"  method="POST"> 
            @csrf
            @method('PUT')
            @include('notes.partials.edit-form')
        </form>
    </div>

@endsection