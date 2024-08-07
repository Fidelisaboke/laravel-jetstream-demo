<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\LockScreenController;
use App\Http\Middleware\AuthGates;
use App\Http\Middleware\CheckIfLocked;

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
    })->name('dashboard')->middleware((CheckIfLocked::class));

    // Lock screen routes
    Route::get('/lock', [LockScreenController::class, 'show'])->name('lock');
    Route::post('/unlock', [LockScreenController::class, 'unlock'])->name('unlock');

    // Resources
    Route::resource('tasks', Controllers\TaskController::class)->middleware(CheckIfLocked::class);
    Route::resource('users', Controllers\UserController::class)->middleware([CheckIfLocked::class, AuthGates::class]);
});

Route::get('/test-mail', [Controllers\TestMailController::class, 'index']);
Route::get('/welcome-mail', [Controllers\WelcomeMailController::class, 'index']);
Route::get('/welcome-notification', [Controllers\WelcomeNotificationController::class, 'index']);
