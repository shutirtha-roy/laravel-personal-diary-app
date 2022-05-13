<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//HOME
Route::get('/home', [HomeController::class, 'index'])->name('home');


//Note
Route::prefix('/note')->name('note.')->group(function() {
    Route::get('showNote', [NoteController::class, 'showNote'])->name('showNote');
    Route::get('create', [NoteController::class, 'create'])->name('create');
    Route::post('store-note', [NoteController::class, 'store'])->name('store');
});
