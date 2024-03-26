<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\StudentLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->prefix('login')->group(function () {
   Route::get('/', [AdminLoginController::class, 'create'])->name('admin.create');
   Route::post('/', [AdminLoginController::class, 'login'])->name('admin.login');

   Route::get('teacher', [AdminLoginController::class, 'create'])->name('teacher.create');

   Route::get('student', [StudentLoginController::class, 'create'])->name('student.create');
});

Route::get('logout', AuthenticatedSessionController::class);

Route::get('dashboard', function () {
    return 'Dashboard';
})->name('dashboard');

//basis
//https://www.kashipara.com/project/laravel-php/8085/laravel-document-library-system
