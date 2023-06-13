<?php

use App\Http\Controllers\DcController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;



Route::get('/', [PageController::class, 'index'])->name('home');
Route::resource('dccomics', DcController::class );
