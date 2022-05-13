<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    private $noteRequirements = [
        'title' => 'required',
        'content' => 'required',
        'public_opinion' => 'required',
        'categories' => 'required'
    ];
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getLoggedInUserInfo()
    {
        return User::findOrFail(Auth::id());
    }

    public function create() 
    {
        $allCategories = Category::all();
        return view('note.create', ['allCategories' => $allCategories]);
    }
   
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate($this->noteRequirements);

        $newImageName = time() . '-' . $request->title . '.' . 
                        $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $note = new Note();
        $user = $this->getLoggedInUserInfo();

        $note->title = $request->title;
        $note->content = $request->content;
        $note->image = $newImageName;

        if($request->public_opinion == "yes")
            $note->public = 1;
        else if($request->public_opinion == "no")
            $note->public = 0;

        $categoryIds = array_map('intval', $request->categories);

        $user->note()->save($note);
        $note->category()->attach($categoryIds);

        return redirect('/');
    }
}
