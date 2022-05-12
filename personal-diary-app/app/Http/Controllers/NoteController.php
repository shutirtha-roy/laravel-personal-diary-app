<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    private $noteRequirements = [
        'title' => 'required',
        'content' => 'required',
        'public_opinion' => 'required'
    ];
    
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
        $request->validate($this->noteRequirements);

        $note = new Note();
        $user = $this->getLoggedInUserInfo();

        $note->title = $request->title;
        $note->content = $request->content;

        if($request->public_opinion == "yes")
            $note->public = 1;
        else if($request->public_opinion == "no")
            $note->public = 0;

        $user->note()->save($note);

        return redirect('/');
    }
}
