<form method="POST" action="{{ url('note/store-note') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control bg-white" id="title" name="title">                        
    </div>

    <div class="mb-3">
        <label for="title" class="form-label">Content</label>
        <textarea id="mytextarea" name="content"></textarea>
    </div>

    
    <button type="submit" class="btn btn-primary">Add Diary</button>
</form>