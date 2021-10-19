<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
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

Route::get('/', [pageController::class, 'home'])->name('home');
//login Controller
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login', [loginController::class, 'loginConfirm'])->name('login');
//logout
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/register', [registerController::class, 'register'])->name('register');
Route::post('/register', [registerController::class, 'registration'])->name('register');


