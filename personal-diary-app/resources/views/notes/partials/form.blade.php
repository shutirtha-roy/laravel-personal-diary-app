<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control bg-white" id="title" name="title" value="{{ old('title') }}"">                        
</div>

<div class="mb-3">
    <label for="title" class="form-label">Content</label>
    <textarea id="mytextarea" name="content">{{ old('content') }}</textarea>
</div>

<div class="mb-3">
    <label for="title" class="form-label bold">Upload Your Image</label>
    <input class="form-control" type="file" name="image">
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
    <select name="categories[]" class="form-select" multiple="multiple">
        <option value="" disabled selected>Choose your option for categories</option>
        @foreach ($allCategories as $category)
            <option value="{{ $category->id }}">{{ $category->category_type }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-primary">Add Diary</button>