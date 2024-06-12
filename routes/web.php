<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/blogs');
Route::controller(BlogController::class)->group(function () {
    Route::get('/blogs', 'index')->name('blog.index');
    Route::post('/blogs', 'store')->name('blog.store');
    Route::get('/blogs/list', 'editableList')->name('blog.list');
    Route::get('/blogs/create', 'create')->name('blog.create');
    Route::get('/blogs/{blog:id}', 'show')->name('blog.show');
    Route::get('/blogs/{blog:id}/edit', 'edit')->name('blog.edit');
    Route::put('/blogs/{blog:id}', 'update')->name('blog.update');
    Route::delete('/blogs/{blog:id}', 'destroy')->name('blog.delete');
});
