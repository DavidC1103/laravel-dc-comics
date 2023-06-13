<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\MovieController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::resource('movies', MovieController::class );
