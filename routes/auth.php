<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::view('/login', 'login');
    Route::post('/login', LoginController::class);

    Route::view('/register', 'register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::delete('/logout', LogoutController::class)
    ->middleware('auth');
