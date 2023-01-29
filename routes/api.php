<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SongController;
use App\Http\Controllers\Api\PlaylistController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function (){
    Route::post('/logout', [UserController::class, 'logout']);
});

Route::post('/song/store', [SongController::class, 'store']);
Route::get('/songs', [SongController::class, 'index']);
Route::get('/song/latest', [SongController::class, 'latest_song']);
Route::get('/playlist/songs/{id}', [SongController::class, 'playlist_song']);
Route::get('/playlists', [PlaylistController::class, 'index']);
Route::post('/playlists/store', [SongController::class, 'store_in_playList']);
Route::post('/playlists/create', [SongController::class, 'create_playList']);
Route::get('/playlists/delete/{id}', [SongController::class, 'remove_playList']);
Route::post('/playlists/update-listened-playlist', [SongController::class, 'updateListenedPlaylist']);


Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
