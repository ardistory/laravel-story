<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'getDashboard'])->name('dashboard');
Route::get('/ip', [UserController::class, 'getIp'])->name('ip');
