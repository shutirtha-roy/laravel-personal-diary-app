<a href="{{ route('notes.editNote', ['id' => $note->id]) }}" class="btn btn-primary">Edit</a>
<form action="{{ route('notes.noteDelete', ['id' => $note->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="Delete!">
</form>