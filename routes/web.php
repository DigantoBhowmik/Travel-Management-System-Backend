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
use App\Http\Controllers\orderController;
use App\Http\Controllers\userBooking;

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
Route::get('/profile', [editController::class, 'editProfile'])->name('editprofile')->middleware('ValidUser');
Route::post('/profile', [editController::class, 'updateData'])->name('editprofile')->middleware('ValidUser');

//package
Route::get('/packages', [packageController::class, 'packagelist'])->name('packages');
Route::get('/packagedetails/{id}', [packageController::class, 'packdetails'])->name('packdetails');
Route::post('/createpackages', [packageController::class, 'createpackages'])->name('createpackages')->middleware('ValidUser')->middleware('CheckRole');
Route::get('/createpackages', [packageController::class, 'package'])->name('createpackages')->middleware('ValidUser')->middleware('CheckRole');
Route::get('package/delete/{id}', [packageController::class, 'delete'])->middleware('CheckRole');
Route::get('/book/{id}', [packageController::class, 'whoBooked'])->middleware('CheckRole');
Route::get('/editpackage/{id}', [packageController::class, 'editpackage'])->name('editpackage')->middleware('ValidUser')->middleware('CheckRole');
Route::post('/editpackage', [packageController::class, 'updatePackage'])->name('editpackage')->middleware('ValidUser')->middleware('CheckRole');
Route::post('/packagedetails', [orderController::class, 'confirmPackage'])->name('confirmpackage')->middleware('ValidUser');

//userbooking 
Route::get('/mybooking', [userBooking::class, 'mybooking'])->name('mybooking')->middleware('ValidUser');

//event
Route::get('/events', [eventController::class, 'eventlist'])->name('events');
Route::get('/eventdetails/{id}', [eventController::class, 'eventdetails'])->name('eventdetails');
Route::post('/createevents', [eventController::class, 'createevents'])->name('createevents')->middleware('ValidUser')->middleware('CheckRole');
Route::get('/createevents', [eventController::class, 'event'])->name('createevents')->middleware('ValidUser')->middleware('CheckRole');
Route::get('/delete/{id}', [eventController::class, 'delete'])->middleware('ValidUser')->middleware('CheckRole');
Route::get('/editevent/{id}', [eventController::class, 'editevent'])->name('editevent')->middleware('ValidUser')->middleware('CheckRole');
Route::post('/editevent', [eventController::class, 'updateEvent'])->name('editevent')->middleware('ValidUser')->middleware('CheckRole');
Route::get('/bookevent/{id}', [packageController::class, 'whoBookedEvent'])->middleware('ValidUser')->middleware('CheckRole');
Route::post('/eventdetails', [orderController::class, 'confirmevent'])->name('confirmevent')->middleware('ValidUser');



//AGENT
Route::post('/createpackages', [packageController::class, 'createpackages'])->name('createpackages')->middleware('ValidUser')->middleware('CheckRole');
Route::get('/createpackages', [packageController::class, 'package'])->name('createpackages')->middleware('ValidUser')->middleware('CheckRole');
Route::post('/createevents', [eventController::class, 'createevents'])->name('createevents')->middleware('ValidUser')->middleware('CheckRole');
Route::get('/createevents', [eventController::class, 'event'])->name('event')->middleware('ValidUser')->middleware('CheckRole');


//Admin Part

//Admin Profile
Route::get('/adminprofile', [editController::class, 'admineditProfile'])->name('admineditprofile')->middleware('ValidAdmin');
Route::post('/adminprofile', [editController::class, 'adminupdateData'])->name('admineditprofile')->middleware('ValidAdmin');

//AdminLogin
Route::get('/admin', [loginController::class, 'adminlogin'])->name('admin');
Route::post('/admin', [loginController::class, 'adminloginConfirm'])->name('admin');

//Admin dashboard
Route::get('/admin/dash', [pageController::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin');

//Create Admin
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
Route::get('/admins/orderlist/{id}/{name}',[adminsController::class,'orderlist']);


//Admin Package List
Route::get('/admins/Packagelist', [adminsController::class, 'Packagelist'])->name('admins.packagelist');
Route::get('/admins/Packageedit/{id}/{name}',[adminsController::class,'Packageedit']);
Route::post('/admins/Packageedit',[adminsController::class,'PackageeditSubmit'])->name('admin.Packageedit');
Route::get('/admins/Packagedelete/{id}/{name}',[adminsController::class,'Packagedelete']);


//Admin Agent List
Route::get('/admins/Agent', [adminsController::class, 'Agentlist'])->name('admins.Agentlist');
Route::get('/admins/Agentedit/{id}/{name}',[adminsController::class,'Agentedit']);
Route::post('/admins/Agentedit',[adminsController::class,'AgenteditSubmit'])->name('admin.Agentedit');
Route::get('/admins/Agentdelete/{id}/{name}',[adminsController::class,'Agentdelete']);
Route::get('/admins/item/{id}/{name}',[adminsController::class,'item']);

//Admin Event list
Route::get('admin/events', [eventController::class, 'Admineventlist'])->name('admins.events');
Route::get('admin/eventdetails/{id}/{name}', [eventController::class, 'Admineventdetails'])->name('admins.eventdetails');


//logout
Route::get('/adminlogout', [loginController::class, 'Alogout'])->name('Alogout');
