<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentication\AuthenticationController;
use App\Http\Controllers\users\UserDashboard;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\PublicationController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AuthenticationController::class,'index']);
Route::get('/admin-login',[AuthenticationController::class,'adminLogin']);
Route::get('/user-dashboard',[UserDashboard::class,'index']);

// Admin Controller:
Route::get('/admin-dashboard',[AdminDashboardController::class,'index']);
Route::get('/publications',[PublicationController::class,'index']);

