<?php

use  App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/register', [IndexController::class, 'showRegister'])->name('register.show');
Route::post('/register', [UserController::class, 'store'])->name('register.store');


Route::get('/login', [IndexController::class, 'showLogin'])->name('login.show');
Route::post('/login', [UserController::class, 'login'])->name('login.perform');