<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\RatingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

// Show main view
Route::get('/', [ViewController::class, 'index']);

// Show play view
Route::get('/play/{movie}', [ViewController::class, 'play'])->name('play');

// Show info view
Route::get('/info/{movie}', [ViewController::class, 'info'])->name('info');

// Show create view
Route::get('/create', [ViewController::class, 'create'])->name('create');

// Store new movie
Route::post('/store', [MovieController::class, 'store'])->name('store');

// Show edit movie view
Route::get('/edit/{movie}', [ViewController::class, 'edit'])->name('edit');

// Update existing movie
Route::put('/update/{movie}', [MovieController::class, 'update'])->name('update');

// Delete existing movie
Route::get('/delete/{movie}', [MovieController::class, 'destroy'])->name('delete');

// Submit rating
Route::post('/submitRating/{movie}', [RatingController::class, 'rating'])->name('submitRating');
