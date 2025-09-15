<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'registerForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

});

Route::middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('home');
    Route::resource('products', ProductController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
