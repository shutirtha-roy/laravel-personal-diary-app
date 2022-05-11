<?php

namespace App\Http\Controllers;

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
        $userName = $this->getLoggedInUserInfo()['name'];
        return view('note.create', compact('userName'));
    }
}
