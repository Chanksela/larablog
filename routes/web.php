<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blogs/list', [BlogController::class, 'editableList'])->name('blog.list');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
Route::get('/blogs/{blog:id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blogs/{blog:id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blogs/{blog:id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blogs/{blog:id}', [BlogController::class, 'destroy'])->name('blog.delete');
