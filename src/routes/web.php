<?php

use Illuminate\Support\Facades\Route;
use Sohan065\Crud\Http\Controllers\CrudController;


Route::get('crud', [CrudController::class, 'index']);
Route::post('insert', [CrudController::class, 'create'])->name('insert');
