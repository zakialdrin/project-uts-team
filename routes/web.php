<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // <-- Import Controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route untuk Halaman Home
Route::get('/', [PageController::class, 'home'])->name('home');

// Route untuk Halaman About
Route::get('/about', [PageController::class, 'about'])->name('about');
