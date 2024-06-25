<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//перенаправляет на страницу dashboard, если пользователь уже залогинился
//Route::get('/register', [RegisterController::class, 'actionIndex'])->middleware('guest')->name('register');
//Route::post('/register', [RegisterController::class, 'store'])->middleware('guest') ;

Route::get('/register', [RegisterController::class, 'actionIndex'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'actionIndex'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'actionIndex'])->middleware('auth')->name('dashboard');
