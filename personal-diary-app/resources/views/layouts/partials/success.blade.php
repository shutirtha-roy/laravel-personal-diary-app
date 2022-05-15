@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if(session('delete-status'))
    <div class="alert alert-danger">
        {{ session('delete-status') }}
    </div>
@endif