<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\StudentLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__ . '/student.php';

Route::get('logout', AuthenticatedSessionController::class);

Route::fallback(function () {
   return view('not-found');
});

//basis
//https://www.kashipara.com/project/laravel-php/8085/laravel-document-library-system
