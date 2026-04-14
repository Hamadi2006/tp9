<?php

use  App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/register', [IndexController::class, 'showRegister'])->name('register.show');

Route::get('/login', [IndexController::class, 'showLogin'])->name('login.show');