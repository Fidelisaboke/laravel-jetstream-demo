<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Task routes
Route::resource('tasks', Controllers\TaskController::class);

// User routes
Route::resource('users', Controllers\UserController::class);
