<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


//перенаправляет на страницу dashboard, если пользователь уже залогинился
Route::get('/', [MainController::class, 'actionIndex'])->name('main');


Route::get('/register', [RegisterController::class, 'actionIndex'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest') ;

//для отладки, позволяет попадать на страницы без аутентификации
//Route::get('/register', [RegisterController::class, 'actionIndex'])->name('register');
//Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'actionIndex'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/dashboard', [DashboardController::class, 'actionIndex'])->middleware('auth')->name('dashboard');

Route::get('/forgot-password', [ForgotPasswordController::class, 'actionIndex'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->middleware(['guest','throttle:3,1'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'actionIndex'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'store'])->middleware('guest')->name('password.update');
