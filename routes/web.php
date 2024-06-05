<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

require 'auth.php';

Route::get('/', [JobController::class, 'index']);


Route::view('/jobs/create', 'jobs.create')
    ->middleware('auth');
Route::post('/jobs', [JobController::class, 'store'])
    ->name('jobs.store')
    ->middleware('auth');
Route::get('/jobs/manage', [JobController::class, 'manage'])
    ->middleware('auth')
    ->name('jobs.manage');
Route::put('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->name('jobs.edit');
Route::delete('/jobs/{job}/delete', [JobController::class, 'delete'])
    ->middleware('auth')
    ->name('jobs.delete');
Route::get('/user/{company}', [JobController::class, 'company'])
    ->name('user.show');
Route::post('/companies/make', [CompanyController::class, 'store'])
    ->name('companies.store')
    ->middleware('auth');
Route::get('/companies/create', [CompanyController::class, 'create'])
    ->name('companies.create')
    ->middleware('auth');
Route::get('/companies', [CompanyController::class, 'index'])
    ->name('companies.index')
    ->middleware('auth');
Route::get('/companies/{company}', [CompanyController::class, 'show'])
    ->name('companies.show')
    ->middleware('auth');
