<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TypeController;


Route::get('/project', [ProjectController ::class, 'index'])
    ->name('project.index');

Route::get('/', [TypeController ::class, 'index'])
    ->name('type.index');
