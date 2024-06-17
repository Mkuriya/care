<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [DoctorController::class, 'index'])->name('home'); 

Route::get('/doctor/register',[ DoctorController::class, 'doctorRegister']);// display the registration
Route::get('/doctor/login',[ DoctorController::class, 'doctorLogin']);// display the login 
Route::get('/doctor/dashboard',[ DoctorController::class, 'doctorDashboard'])->name('doctor.dashboard')->middleware('auth:doctors');// display the dashboard

Route::post('/doctor/registeration', [DoctorController::class, 'register']);// to put the value of register to database
Route::post('/doctor/dashboard/upload', [DoctorController::class, 'upload']);
Route::get('/doctor/dashboard/upload', [DoctorController::class, 'doctorUpload'])->name('doctor.upload')->middleware('auth:doctors'); //display the upload form

Route::get('/user/login',[ UserController::class, 'userLogin']); //display the login
Route::get('/user/register',[ UserController::class, 'userRegister']); //display the registration

Route::get('/user/dashboard',[ UserController::class, 'userDashboard'])->name('user.dashboard')->middleware('auth:users'); // display the dashboard
Route::post('/user/registration', [UserController::class, 'register']); // to put the value of register to database


Route::post('/doctor/loginprocess', [DoctorController::class, 'doctorLoginProcess']); //for login process
Route::post('/doctor/logout', [DoctorController::class, 'doctorLogout']); //for logout process


Route::post('/user/logout', [UserController::class, 'userLogout']); //for logout process

Route::post('/user/loginprocess', [UserController::class, 'userLoginProcess']); //for login process


Route::get('/doctor/dashboard/profile/{doctors}', [DoctorController::class, 'doctorProfile'])->name('doctor.profile')->middleware('auth:doctors'); // display the profile

Route::put('/doctor/dashboard/profile/{doctors}', [DoctorController::class, 'doctorUpdate']); //for update process


Route::put('/doctor/dashboard/editprocess/{programs}', [DoctorController::class, 'itemUpdate']); // for update process



Route::delete('/doctor/dashboard/delete/{programs}', [DoctorController::class, 'deleteItems']); // for delete process
Route::get('/doctor/dashboard/edit/{programs}', [DoctorController::class, 'editItems']); // for edit display
Route::get('/doctor/dashboard/view/{programs}', [DoctorController::class, 'viewItems'])->name('doctor.view')->middleware('auth:doctors'); // for view display


Route::get('/user/dashboard/view/{programs}', [UserController::class, 'viewItems'])->name('user.view')->middleware('auth:users'); // for view display

Route::get('/user/dashboard/profile/{users}', [UserController::class, 'userProfile'])->name('user.profile')->middleware('auth:users');// display the profile


Route::put('/user/dashboard/profile/{users}', [UserController::class, 'userUpdate']); //for update process

Route::get('/doctor/dashboard/search',[DoctorController::class, 'search']);
Route::get('/doctor/dashboard/chat',[DoctorController::class, 'chat'])->name('doctor.chat')->middleware('auth:doctors');
Route::get('/user/dashboard/chat',[UserController::class, 'chat'])->name('user.chat')->middleware('auth:users');


Route::get('/admin/login', [AdminController::class, 'login']);// for display the login form of admin
Route::post('/admin/loginprocess', [AdminController::class, 'adminLoginProcess']); //for login process
Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']); //for dashboard output
Route::get('/admin/dashboard/doctorlist',[AdminController::class, 'doctorlist']);
Route::get('/admin/dashboard/userlist',[AdminController::class, 'userlist']);
Route::post('/admin/logout', [AdminController::class, 'adminLogout']); //for logout process
Route::delete('/admin/dashboard/doctor/delete/{doctor}', [AdminController::class, 'deleteAdmin']); // for delete process
Route::delete('/admin/dashboard/user/delete/{user}', [AdminController::class, 'deleteUser']); // for delete process