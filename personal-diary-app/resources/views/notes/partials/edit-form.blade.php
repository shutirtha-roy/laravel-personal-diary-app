<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control bg-white" id="title" name="title" value="{{ $note->title }}"">                        
</div>

<div class="mb-3">
    <label for="title" class="form-label">Content</label>
    <textarea id="mytextarea" name="content">{{ $note->content }}</textarea>
</div>

<div class="mb-3">
    <label for="title" class="form-label bold">Upload Your Image</label>
    <input type="file" class="form-control" type="file" name="image" value="{{ asset('images/'.$note->image) }}">
    <img id="previewImg" src="{{ asset('images/'.$note->image) }}" alt="" class="ms-5 ps-5" width="300px">
</div>

<button type="submit" class="btn btn-primary">Update Diary</button>