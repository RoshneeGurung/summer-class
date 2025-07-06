<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/News', [NewsController::class, 'news']);
// Route::get('/Contact', [ContactController::class, 'contact']);
// Route::get('/About', [AboutController::class, 'about']);


// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\NewsController;
// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\AboutController;

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/news', [NewsController::class, 'news'])->name('news');
// Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
// Route::get('/about', [AboutController::class, 'about'])->name('about');

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/about', [AboutController::class, 'about'])->name('about');
