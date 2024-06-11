<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/list', [BlogController::class, 'editableList'])->name('blog.list');
Route::get('/blogs/{blog:id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blogs/{blog:id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::delete('/blogs/{blog:id}', [BlogController::class, 'destroy'])->name('blog.delete');
