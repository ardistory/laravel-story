<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

Route::middleware([Authenticate::class])->controller(UserController::class)->group(function () {
    Route::get('/', 'getDashboard')->name('dashboard');
    Route::get('/ip', 'getIp')->name('ip');
    Route::get('/users', 'getUsers')->name('users');
    Route::get('/documentation', 'getDocumentation')->name('documentation');
    Route::get('/checklist', 'getChecklist')->name('checklist');
});

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/login', Login::class)->name('login');
});

Route::fallback(function () {
    return response()->view('errors.404');
});