@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-black fw-bolder fs-5">{{ __('Dashboard') }}</div>

                <div class="card-body fs-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are free to add your personal notes') }}

                    <a href="{{ route('notes.create') }}" class="btn btn-info btn-lg">Add Note</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
