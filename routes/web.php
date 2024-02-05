<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ViewController::class, 'index']);

Route::get('/play/{movie}', [ViewController::class, 'play']);

Route::get('/showInfo/{movie}', [ViewController::class, 'info']);

Route::get('/editMovie/{movie}', [ViewController::class, 'edit']);

Route::get('/delete/{movie}', [ViewController::class, 'delete']);

Route::put('/edit/{movie}', [ViewController::class, 'editData']);

Route::get('/createMovie', [ViewController::class, 'createMovie']);

Route::post('/create', [ViewController::class, 'create']);

Route::post('/submitRating/{movie}', [ViewController::class, 'rating']);
