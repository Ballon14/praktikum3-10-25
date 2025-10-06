<?php

use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/videos', [VideosController::class, 'index'],);
