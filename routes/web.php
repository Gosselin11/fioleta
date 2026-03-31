<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ArtworkController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/galerie', [ArtworkController::class, 'index'])->name('artworks.index');
Route::get('/galerie/{artwork:slug}', [ArtworkController::class, 'show'])->name('artworks.show');

Route::get('/a-propos', AboutController::class)->name('about');

Route::get('/evenements', [EventController::class, 'index'])->name('events.index');
Route::get('/evenements/{event:slug}', [EventController::class, 'show'])->name('events.show');

Route::get('/archives', ArchiveController::class)->name('archives.index');

Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/auth.php';
