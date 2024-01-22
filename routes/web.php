<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Livewire\AddMac;
use Illuminate\Support\Facades\Route;

Route::middleware([Authenticate::class])->controller(UserController::class)->group(function () {
    Route::get('/', 'getDashboard')->name('dashboard');
    Route::get('/ip', 'getIp')->name('ip');
});

Route::middleware([RedirectIfAuthenticated::class])->controller(UserController::class)->group(function () {
    Route::get('/login', [UserController::class, 'getLogin'])->name('login');
});
