<?php

use Illuminate\Support\Facades\Route;
use Sohan065\Crud\Http\Controllers\CrudController;
use Sohan065\Crud\Http\Controllers\PostController;

Route::get('dashboard', [PostController::class, 'index'])->name('dashboard');

Route::prefix('post')->group(function () {
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('/update/{id}', [PostController::class, 'update'])->name('post.update');
    Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
});
