<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{blog:id}', [BlogController::class, 'show'])->name('blog');
