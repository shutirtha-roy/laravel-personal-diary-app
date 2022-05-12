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

    <div class="mb-3">
        <label for="title" class="form-label h3">Do you want to share it to the public?</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="public_opinion" id="flexRadioDefault1" value="yes">
            <label class="form-check-label h5" for="flexRadioDefault1">
                Yes
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="public_opinion" id="flexRadioDefault2"  value="no">
            <label class="form-check-label h5" for="flexRadioDefault2">
                No
            </label>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-check-label h5" for="flexRadioDefault2">
            Please select the desired category
        </label>

        <select name="category_id" class="form-select">
            @foreach ($allCategories as $category)
                <option value="{{ $category->id }}">{{ $category->category_type }}</option>
            @endforeach
        </select>
    </div>
    


    <button type="submit" class="btn btn-primary">Add Diary</button>
</form>