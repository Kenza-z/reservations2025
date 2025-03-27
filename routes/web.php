<?php

use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/artists', [ArtistController::class, 'index']  {
    return view('artist.index');
});