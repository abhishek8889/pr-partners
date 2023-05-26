<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentication\AuthenticationController;
use App\Http\Controllers\users\UserDashboard;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\PublicationController; 
use App\Http\Controllers\admin\GenreController;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\RegionController;
use App\Http\Controllers\admin\UserAccessToken;
use App\Http\Controllers\admin\PressPackageController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\PressReleaseController;
use App\Http\Middleware\UserCheck;
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
Route::post('loginprocc',[AuthenticationController::class,'userLoginProc'])->name('login-proc');
Route::get('/admin-login',[AuthenticationController::class,'adminLogin']);
Route::post('/admin-loginproc',[AuthenticationController::class,'adminLoginProc'])->name('admin-login');
Route::get('/logout',[AuthenticationController::class,'logout']);
Route::get('/userlogout',[AuthenticationController::class,'userlogout']);
Route::get('/user-dashboard',[UserDashboard::class,'index'])->Middleware(UserCheck::class);
Route::post('/search-filter',[UserDashboard::class,'filterData'])->name('search-filter');



//Admin routes
Route ::group(['middleware' =>['is_admin']],function(){
    Route::get('/admin-dashboard',[AdminDashboardController::class,'index']);

    //Genre
    Route::get('/admin-dashboard/genre',[GenreController::class, 'index']);
    Route::any('/genre-add',[GenreController::class,'genreAdd']);

    //Publication 
    Route::get('/admin-dashboard/publications',[PublicationController::class,'index']);
    Route::get('/admin-dashboard/insert-publications',[PublicationController::class,'publicationInsert']);
    Route::post('/addPublication',[PublicationController::class,'addPublication']);
    Route::post('/publication-remove',[PublicationController::class,'removePublication']);
    Route::get('/admin-dashboard/update-publications/{id}',[PublicationController::class,'updatePublication']);
    Route::post('/updatePublication',[PublicationController::class,'publicationUpdate']);

    //article
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
    Route::get('/admin-dashboard/press-package-update/{id}',[PressPackageController::class,'updatepressPackage']);
    Route::post('/updatePackageBundle',[PressPackageController::class,'updatePackageBundle']);
    Route::post('/remove-PackageBundle',[PressPackageController::class,'remove']);

    // Other Services
    Route::get('/admin-dashboard/services-list',[ServiceController::class,'index']);
    Route::get('/admin-dashboard/services-insert/',[ServiceController::class,'insertService']);
    Route::post('/addService',[ServiceController::class,'addService']);
    Route::get('/admin-dashboard/services-update/{id}',[ServiceController::class,'updateService']);
    Route::post('/updateService',[ServiceController::class,'ServiceUpdate']);
    Route::post('/remove-service',[ServiceController::class,'remove']);

    //Press_release
    Route::get('/admin-dashboard/press-release',[PressReleaseController::class, 'index']);
    Route::post('/addPressRelease',[PressReleaseController::class ,'addPressRelease']);
    Route::post('/update-release',[PressReleaseController::class, 'updatePressRelease']);
    Route::post('/remove-release',[PressReleaseController::class, 'remove']);
    
    // User password
    Route::get('admin-dashboard/update-token',[UserAccessToken::class,'index']);
    Route::post('update-token-procc',[UserAccessToken::class,'creatproc'])->name('update-token-procc');
});



// Route::get('/trycode',[trycontroller::class,'index']);
// Route::any('/trycodes',[trycontroller::class,'adddata']);