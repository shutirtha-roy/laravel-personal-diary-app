<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNote;
use App\Models\Category;
use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getLoggedInUserInfo()
    {
        return User::findOrFail(Auth::id());
    }

    

    public function showNote()
    {
        $allNotes = Note::where('user_id', Auth::id())->paginate(8);
        
        return view('notes.showNote', ['allNotes' => $allNotes]);
    }

    public function create() 
    {
        $allCategories = Category::all();
        return view('notes.create', ['allCategories' => $allCategories]);
    }
   
    public function store(StoreNote $request)
    {
        $validated = $request->validated();

        $newImageName = time() . '-' . $validated['title'] . '.' . 
                        $validated['image']->extension();

        $validated['image']->move(public_path('images'), $newImageName);

        $note = new Note();
        $user = $this->getLoggedInUserInfo();

        $note->title = $validated['title'];
        $note->content = $validated['content'];
        $note->image = $newImageName;

        if($validated['public_opinion'] == "yes")
            $note->public = 1;
        else if($validated['public_opinion'] == "no")
            $note->public = 0;

        $categoryIds = array_map('intval', $validated['categories']);

        $user->note()->save($note);
        $note->category()->attach($categoryIds);

        session()->flash('status', 'Your diary is Added!');

        return redirect()->route('notes.showNote');
    }

    
}
