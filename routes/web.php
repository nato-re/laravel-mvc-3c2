<?php

use App\Http\Controllers\MusicController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return "view('welcome')";
});

Route::get('/users', function () {
    $users = User::all();

    return $users;
});


Route::resource('/musics', MusicController::class);

Route::get('/musics', [MusicController::class, 'index'])->name('musics.index');
Route::get('/musics/create', [MusicController::class, 'create'])->name('musics.create');
Route::post('/musics', [MusicController::class, 'store']);
Route::get('/musics/{music}', [MusicController::class, 'show']);