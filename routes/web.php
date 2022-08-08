<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;


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

Route::get('/',[RegController::class,'LoginUser']);
Route::post('/',[RegController::class,'CheckLoginUser']);

Route::get('/login',[RegController::class,'CreateUser']);
Route::post('/login',[RegController::class,'RegisteringUser']);

Route::get('/AdminDashboard',[AdminController::class,'AdminDashBoardView']);
Route::get('/AdminAddEvents',[AdminController::class,'AdminAddingEvents']);
Route::post('/AdminAddEvents',[AdminController::class,'AdminStoreEvents']);
Route::get('viewmoreevents/{id}',[AdminController::class,'ViewEventDescription']);
Route::get('/ViewUsersList',[AdminController::class,'UserDetailsProfile']);
Route::post('UpdateEventByAdmin/{id}',[AdminController::class,'Update']);
Route::get('DeleteEventByAdmin/{id}',[AdminController::class,'DeleteEvent']);
Route::get('UpdateEventByAdmin/{id}/',[AdminController::class,'UpdateEvent']);

Route::get('/UserDashboard',[UserController::class,'UserDashBoardView']);
Route::get('Userviewmoreevents/{id}',[UserController::class,'UserViewEventDescription']);

Route::post('pay',[PaymentController::class,'pay'])->name('payment');


