<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
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


Route::controller(WelcomeController::class)->group(function() {
    Route::get('/', 'index')->name('welcome');
    Route::get('/welcome/note/{id}', 'showWelcomeNote')->where('id', '[0-9]+');
});


Auth::routes();

//HOME
Route::get('/home', [HomeController::class, 'index'])->name('home');


//Note
Route::prefix('/note')->name('note.')->group(function() {
    Route::controller(NoteController::class)->group(function() {
        Route::get('showNote', 'showNote')->name('showNote');
        Route::get('create', 'create')->name('create');
        Route::post('store-note', 'store')->name('store');
    });
});
