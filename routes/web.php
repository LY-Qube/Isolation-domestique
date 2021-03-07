<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// Auth
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware(['guest', 'identity'])
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['guest', 'identity']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware(['auth', 'identity'])
    ->name('logout');

// Dashboard
Route::get('/dashboard', \App\Http\Livewire\Admin\Dashboard\Dashboard::class)
    ->middleware(['auth', 'identity'])
    ->name('dashboard');

// Contact Download
Route::get('/contact/download', \App\Http\Livewire\Admin\Contact\Download::class)
    ->middleware(['auth'])
    ->name('contact.download');

// verification Email
Route::get('verification_email/{email}', \App\Http\Controllers\VerificationEmailController::class)
    ->middleware('identity');

//Home
Route::get('/', \App\Http\Livewire\Guest\Home\Home::class)
    ->middleware('identity')
    ->name('welcome');

// Call
Route::get('/call-me', \App\Http\Livewire\Call\CallMe::class)
    ->middleware('identity')
    ->name('call-me');

// Map
Route::post('department', [\App\Http\Controllers\Form\MapController::class, 'store'])
    ->middleware(['throttle:60,1', 'identity']);

// E-book
Route::middleware(['throttle:60,1', 'identity'])->get('e-book', \App\Http\Livewire\Ebook\Ebook::class)->name('book');
Route::middleware(['throttle:60,1', 'identity'])->get('e-book/form', \App\Http\Livewire\Ebook\EbookForm::class)->name('book.form');

// services
Route::get('combles-perdus', \App\Http\Livewire\Services\RoofLost::class)
    ->middleware(['throttle:60,1', 'identity'])
    ->name('services.combles-perdus');

Route::get('combles-amenageables-et-sous-rampants', \App\Http\Livewire\Services\RoofConvertible::class)
    ->middleware(['throttle:60,1', 'identity'])
    ->name('services.combles-amenageables');

Route::get('vide-sanitaire', \App\Http\Livewire\Services\CrawlSpace::class)
    ->middleware(['throttle:60,1', 'identity'])
    ->name('services.vide-sanitaire');

Route::get('sous-sol-et-cave-garage', \App\Http\Livewire\Services\Garage::class)
    ->middleware(['throttle:60,1', 'identity'])
    ->name('services.garage');

Route::get('murs', \App\Http\Livewire\Services\Murs::class)
    ->middleware(['throttle:60,1', 'identity'])
    ->name('services.murs');

Route::get('renovation', \App\Http\Livewire\Services\Renovation::class)
    ->middleware(['throttle:60,1', 'identity'])
    ->name('services.renovation');
