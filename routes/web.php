<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentication\AuthenticationController;
use App\Http\Controllers\users\UserDashboard;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\PublicationController; 
use App\Http\Controllers\admin\GenreController;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\RegionController;
use App\Http\Controllers\admin\PressPackageController;
use App\Http\Controllers\TryController\trycontroller;

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
Route::post('/admin-loginproc',[AuthenticationController::class,'adminLoginProc'])->name('admin-login');
Route::get('/logout',[AuthenticationController::class,'logout']);
Route::get('/user-dashboard',[UserDashboard::class,'index']);


//Admin routes
Route ::group(['middleware' =>['is_admin']],function(){
    Route::get('/admin-dashboard',[AdminDashboardController::class,'index']);
    Route::get('/admin-dashboard/publications',[PublicationController::class,'index']);
    Route::get('/admin-dashboard/genre',[GenreController::class, 'index']);
    Route::any('/genre-add',[GenreController::class,'genreAdd']);
    Route::get('/admin-dashboard/publications',[PublicationController::class,'index']);
    Route::get('/admin-dashboard/insert-publications',[PublicationController::class,'publicationInsert']);
    Route::post('/addPublication',[PublicationController::class,'addPublication']);


    Route::get('/admin-dashboard/article',[ArticleController::class,'index']);
    Route::post('/admin-dashboard/article/add',[ArticleController::class,'articleAdd'])->name('article-add');
    Route::post('/admin-dashboard/article/action',[ArticleController::class,'action'])->name('article-action');

    //regioncontroller
    Route::get('/admin-dashboard/regions',[RegionController::class,'index']);

    Route::post('/admin-dashboard/regions/add',[RegionController::class,'addProc'])->name('region-add');
    Route::post('/admin-dashboard/regions/action',[RegionController::class,'action'])->name('region-action');

    //Routes for press package
    Route::get('/admin-dashboard/press-package',[PressPackageController::class,'index']);
    Route::post('/addPackageBundle',[PressPackageController::class,'addPackageBundle']);
    Route::get('/admin-dashboard/package-category',[PressPackageController::class,'packageCategory']);
    Route::post('/packagecategory-add',[PressPackageController::class,'addPackageCategory']);

    Route::get('/admin-dashboard/package-list',[PressPackageController::class,'packageList']);
    
});



Route::get('/trycode',[trycontroller::class,'index']);
Route::any('/trycodes',[trycontroller::class,'adddata']);