<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

Route::middleware([Authenticate::class])->controller(UserController::class)->group(function () {
    Route::get('/', 'getDashboard')->name('dashboard');
    Route::get('/ip', 'getIp')->name('ip');
    Route::post('/logout', LogoutController::class)->name('logout');

});

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/login', Login::class)->name('login');
});
