<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Landing Page
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::get('/forgot-password', [AuthController::class, 'getForgotPassword']);
Route::get('/register', [AuthController::class, 'getRegister']);
Route::get('/tentang-kami', [HomeController::class, 'getTentangKami']);
Route::get('/statistik', [HomeController::class, 'getStatistik']);

// Dashboard

Route::get('/dashboard', [AdminController::class, 'getIndex']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
