<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Note;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $allNotes = Note::where('public', 1)->paginate(12);
        return view('welcome', ['allNotes' => $allNotes]);
    }
}
