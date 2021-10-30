<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\editController;
use App\Http\Controllers\packageController;
use App\Http\Controllers\adminsController;
use Illuminate\Http\Request;
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
//registration
Route::get('/register', [registerController::class, 'register'])->name('register');
Route::post('/register', [registerController::class, 'registration'])->name('register');

//editprofile
Route::get('/profile', [editController::class, 'editProfile'])->name('editprofile');
Route::post('/profile', [editController::class, 'updateData'])->name('editprofile');

//package
Route::get('/packages', [packageController::class, 'packagelist'])->name('packages');





//Admin Part

//AdminLogin
Route::get('/admin', [loginController::class, 'adminlogin'])->name('admin');
Route::post('/admin', [loginController::class, 'adminloginConfirm'])->name('admin');
//Admin dashboard
Route::get('/admin/dash', [pageController::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin');
//Admin List
Route::get('/admins/list', [adminsController::class, 'list'])->name('admins.list');
//Admin Edit And Delete
Route::get('/admins/edit/{id}/{name}',[adminsController::class,'edit']);
Route::post('/admins/edit',[adminsController::class,'editSubmit'])->name('admin.edit');
Route::get('/admins/delete/{id}/{name}',[adminsController::class,'delete']);
//Create AdminAdmin
Route::get('/admins/create',[adminsController::class,'create'])->name('admins.create');
Route::post('/admins/create',[adminsController::class,'createSubmit'])->name('admins.create');
//
