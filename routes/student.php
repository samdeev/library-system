<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index'])
    ->name('student.index');
Route::get('/students/create', [StudentController::class, 'create'])
    ->name('student.create');
