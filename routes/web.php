<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::get('/forgot-password', [AuthController::class, 'getForgotPassword']);
Route::get('/register', [AuthController::class, 'getRegister']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
