<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
 * Auth
 */

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware(['guest', 'identity'])
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['guest', 'identity']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware(['auth', 'identity'])
    ->name('logout');

/*
 * Dashboard
 */

Route::get('/dashboard', \App\Http\Livewire\Admin\Dashboard\Dashboard::class)
    ->middleware(['auth', 'identity'])
    ->name('dashboard');

/*
 * Home
 */

Route::get('/', \App\Http\Livewire\Guest\Home\Home::class)
    ->middleware('identity')
    ->name('welcome');
// Call


Route::get('/call-me', \App\Http\Livewire\Call\CallMe::class)
    ->middleware('identity')
    ->name('call-me');
