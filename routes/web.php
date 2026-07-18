<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('Hello World');
});

Route::get('/hello', [UserController::class, 'hello']);