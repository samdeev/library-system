<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\StudentLoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->prefix('login')->group(function () {
    Route::get('/', [AdminLoginController::class, 'create'])->name('admin.create');
    Route::post('/', [AdminLoginController::class, 'login'])->name('admin.login');

    Route::get('teacher', [StudentLoginController::class, 'create'])->name('teacher.create');

    Route::get('student', [StudentLoginController::class, 'create'])->name('student.create');
});

Route::post('logout', AuthenticatedSessionController::class)
    ->middleware('auth')
    ->name('logout');
