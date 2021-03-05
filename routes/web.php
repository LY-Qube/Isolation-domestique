<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
 * Auth
 */

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

/*
 * Dashboard
 */

Route::get('/dashboard', \App\Http\Livewire\Admin\Dashboard\Dashboard::class)
    ->middleware(['auth'])
    ->name('dashboard');

/*
 * Home
 */

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
