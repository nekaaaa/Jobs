<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

require 'auth.php';

Route::get('/', [JobController::class, 'index']);

Route::view('/jobs/create', 'jobs.create')
    ->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])
    ->name('jobs.store')
    ->middleware('auth');
