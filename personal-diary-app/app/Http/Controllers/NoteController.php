<?php

namespace App\Http\Controllers;

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
        return User::find(Auth::id());
    }

    public function create() 
    {
        return view('note.create');
    }
   
    public function store(Request $request)
    {
        $noteRequirements = [
            'title' => 'required',
            'content' => 'required'
        ];

        $request->validate($noteRequirements);

        $note = new Note();
        $user = $this->getLoggedInUserInfo();

        $note->title = $request->title;
        $note->content = $request->content;
        $user->note()->save($note);

        return redirect('/');
    }
}
