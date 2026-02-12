<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControl;
use App\Http\Controllers\AboutControl;
use App\Http\Controllers\FirstControl;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeControl::class, 'index']);
Route::get('/about', [AboutControl::class, 'index']);
Route::get('/first', [FirstControl::class, 'index']);