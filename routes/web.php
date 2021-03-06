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

// Contact Download

Route::get('/contact/download', \App\Http\Livewire\Admin\Contact\Download::class)
    ->middleware(['auth'])
    ->name('contact.download');

// verification Email
Route::get('verification_email/{email}',\App\Http\Controllers\VerificationEmailController::class);

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

// Map
Route::post('department',[\App\Http\Controllers\Form\MapController::class, 'store'])
    ->middleware(['throttle:60,1','identity']);
