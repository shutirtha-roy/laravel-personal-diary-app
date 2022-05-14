@extends('layouts.app')



@section('content')
    <h1 class="text-center">Welcome to Personal Diary </h1>
    <h1 class="text-center h4 mb-5">Please check out your previously recorded (only public diaries)</h1>

    <div class="row">
        @forelse($allNotes as $note)
            @include('notes.partials.note-card')
        @empty
            <h1>Empty</h1>
        @endforelse
    </div>

    {{ $allNotes->links() }}
@endsection

