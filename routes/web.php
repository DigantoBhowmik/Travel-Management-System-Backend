<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\editController;
use App\Http\Controllers\packageController;
use App\Http\Controllers\adminsController;
use Illuminate\Http\Request;
use App\Http\Controllers\eventController;

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
Route::get('/packagedetails/{id}', [packageController::class, 'packdetails'])->name('packdetails');
Route::post('/createpackages', [packageController::class, 'createpackages'])->name('createpackages');
Route::get('/createpackages', [packageController::class, 'package'])->name('createpackages');
Route::get('/delete/{id}', [packageController::class, 'delete']);
Route::get('/editpackage/{id}', [packageController::class, 'editpackage'])->name('editpackage');
Route::post('/editpackage', [packageController::class, 'updatePackage'])->name('editpackage');

//event
Route::get('/events', [eventController::class, 'eventlist'])->name('events');



//AGENT
Route::post('/createpackages', [packageController::class, 'createpackages'])->name('createpackages')->middleware('ValidUser')->middleware('CheckRole');
Route::get('/createpackages', [packageController::class, 'package'])->name('createpackages')->middleware('ValidUser')->middleware('CheckRole');


//Admin Part

//AdminLogin
Route::get('/admin', [loginController::class, 'adminlogin'])->name('admin');
Route::post('/admin', [loginController::class, 'adminloginConfirm'])->name('admin');
//Admin dashboard
Route::get('/admin/dash', [pageController::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin');
//Create AdminAdmin
Route::get('/admins/create',[adminsController::class,'create'])->name('admins.create');
Route::post('/admins/create',[adminsController::class,'createSubmit'])->name('admins.create');

//Admin List
Route::get('/admins/list', [adminsController::class, 'list'])->name('admins.list');
//Admin Edit And Delete
Route::get('/admins/edit/{id}/{name}',[adminsController::class,'edit']);
Route::post('/admins/edit',[adminsController::class,'editSubmit'])->name('admin.edit');
Route::get('/admins/delete/{id}/{name}',[adminsController::class,'delete']);

//Admin User List
Route::get('/admins/Users', [adminsController::class, 'Userlist'])->name('admins.Userlist');
Route::get('/admins/Useredit/{id}/{name}',[adminsController::class,'Useredit']);
Route::post('/admins/Useredit',[adminsController::class,'UsereditSubmit'])->name('admin.Useredit');
Route::get('/admins/Userdelete/{id}/{name}',[adminsController::class,'Userdelete']);

//Admin Package List
Route::get('/admins/Packagelist', [adminsController::class, 'Packagelist'])->name('admins.Packagelist');







//Admin Agent List
Route::get('/admins/Agent', [adminsController::class, 'Agentlist'])->name('admins.Agentlist');
Route::get('/admins/Agentedit/{id}/{name}',[adminsController::class,'Agentedit']);
Route::post('/admins/Agentedit',[adminsController::class,'AgenteditSubmit'])->name('admin.Agentedit');
Route::get('/admins/Agentdelete/{id}/{name}',[adminsController::class,'Agentdelete']);
