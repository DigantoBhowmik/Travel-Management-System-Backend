<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\editController;
use App\Http\Controllers\packageController;
use App\Http\Controllers\userBooking;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//user
Route::post('/login', [loginController::class, 'loginConfirm']);
Route::get('/profile/{id}', [editController::class, 'editProfile']);
Route::post('/register', [registerController::class, 'registration']);
Route::post('/profile', [editController::class, 'updateData']);
Route::get('/mybookingPackage/{id}', [userBooking::class, 'mybookingPackage']);
Route::get('/mybookingEvent/{id}', [userBooking::class, 'mybookingEvent']);

// Admin Login and Profile Routes
Route::post('/Alogin', [ApiController::class, 'adminloginConfirm']);
Route::get('/Aprofile/{id}', [ApiController::class, 'admineditProfile']);
Route::post('/Aprofile', [ApiController::class, 'adminupdateData']);
// Admins Routes
Route::get('/admins/list', [ApiController::class, 'Adminslist']);
Route::get('/admindetails/{id}', [ApiController::class, 'Adminedit']);
Route::post('/admincreate', [ApiController::class, 'AdminCreate']);

Route::post('/userdelete/{id}', [ApiController::class, 'Userdelete']);


//Admin Packages Routes
Route::get('adminpackages/list', [ApiController::class, 'Packageslist']);
Route::get('/adminpackagedetails/{id}', [ApiController::class, 'Packageedit']);

//Admin Events Routes
Route::get('/events/list', [ApiController::class, 'Eventlist']);
Route::get('/eventdetails/{id}', [ApiController::class, 'Eventsedit']);

//Admin Agent List Route
Route::get('/agents/list', [ApiController::class, 'Agentlist']);

//Admin User List Route
Route::get('/users/list', [ApiController::class, 'Userlist']);
//Package
Route::get('/packages', [packageController::class, 'packagelist']);
Route::get('/packagedetails/{id}', [packageController::class, 'packdetails']);

//Agent
Route::post('/createpackages', [packageController::class, 'createpackages']);
Route::get('/createpackages/{id}', [packageController::class, 'package']);
Route::get('/book/{id}', [packageController::class, 'whoBooked']);
Route::get('/packagedelete/{id}', [packageController::class, 'delete']);
Route::get('/editpackage/{id}', [packageController::class, 'editpackage']);
Route::post('/editpackage/{id}', [packageController::class, 'updatePackage']);
Route::post('/packagedetails', [orderController::class, 'confirmPackage']);
