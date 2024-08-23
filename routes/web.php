<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ApplicationController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\UserController;

Route::get('/', [ApplicationController::class, 'index'])->name('index');
Route::get('about', [ApplicationController::class, 'about'])->name('about');
Route::get('contact', [ApplicationController::class, 'contact'])->name('contact');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::any('/register', [LoginController::class, 'register'])->name('register');


Route::group(['namespace' => 'Backend', 'prefix' => 'company-backend', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/users', [UserController::class, 'index'])->name('users');
});
