<?php

use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;



Route::get('/musics', [MusicController::class, 'index'])->name('musics.index');
Route::get('/musics/create', [MusicController::class, 'create'])->name('musics.create');
Route::post('/musics', [MusicController::class, 'store'])->name('musics.store');
Route::get('/musics/{music}', [MusicController::class, 'show'])->name('musics.show');
Route::get('/musics/{music}/edit', [MusicController::class, 'edit'])->name('musics.edit');
Route::put('/musics/{music}', [MusicController::class, 'update'])->name('musics.update');
Route::delete('/musics/{music}', [MusicController::class, 'destroy'])->name('musics.destroy');

Route::resource('/musics', MusicController::class);
