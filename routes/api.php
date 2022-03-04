<?php

use App\Http\Controllers\Admin\ComicsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HomePageEtcController;
use App\Http\Controllers\Admin\InfomationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Contact From Route
Route::post('/contactsend',[ContactController::class,'onContactSend']);
//Comics
Route::get('/getcomichome',[ComicsController::class,'getComicHomePage']);
Route::get('/getallcomic',[ComicsController::class,'getComicAll']);
Route::get('/getnewcomic',[ComicsController::class,'getComicNew']);
Route::get('/deletecomic/{id}',[ComicsController::class,'deleteComicById']);
Route::get('/comicdetails/{id}',[ComicsController::class,'onSelectDetail']);
Route::get('/getfooter',[FooterController::class,'getFooter']);
Route::get('/getabout',[InfomationController::class,'getInfomation']);

Route::get('/getservice',[ServiceController::class,'getService']);
//home etc
Route::get('/titlehome',[HomePageEtcController::class,'selectTitleHome']);
Route::get('/totalhome',[HomePageEtcController::class,'selectToTalHome']);
Route::get('images', [ImageController::class, 'index'])->name('images');
Route::post('images', [ImageController::class, 'upload'])->name('images');
Route::post('addnewcomic', [ComicsController::class, 'addNewComic']);
Route::post('updatecomic', [ComicsController::class, 'updateComic']);


