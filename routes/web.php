<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TypeController;

// Route::get('/', function (){
//     return view('pages.index');
// });

Route::get('/', [ProjectController ::class, 'index'])
    ->name('project.index');

Route::get('/types', [TypeController ::class, 'index'])
    ->name('type.index');


Route::get('/projects/create', [ProjectController :: class, 'create'])
    ->name('project.create');

Route :: post('/projects/create', [ProjectController :: class, 'store'])
    -> name('project.store');

// Route :: get('/project/{id}', [ProjectController :: class, 'show'])
//     -> name('project.show');

// Route :: get('/project/{id}/edit', [ProjectController :: class, 'edit'])
//     -> name('project.edit');
// Route :: put('/project/{id}/edit', [ProjectController :: class, 'update'])
//     -> name('project.update');