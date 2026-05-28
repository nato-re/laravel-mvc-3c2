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
    Log::info('Chamei rota user');
    // $pdo->query("SELECT * FROM users;") 
    return $users;
});


Route::resource('/musics', MusicController::class);

Route::get('/musics', [MusicController::class, 'index']);
Route::get('/musics/create', [MusicController::class, 'create']);
Route::post('/musics', [MusicController::class, 'store']);
Route::post('/musics/{id}', [MusicController::class, 'show']);