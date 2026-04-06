<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',  [PageController::class, 'homepage'])->name('homepage');

Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
