<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MvimController;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\BottomController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;

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

Route::view('/', 'home');
Route::view('/home', 'home');
Route::redirect('/admin', '/admin/title'); 
Route::prefix('/admin')->group(function(){
    Route::get('/title', [TitleController::class,'index']);
    Route::get('/ad', [AdController::class,'index']);
    Route::get('/image', [ImageController::class,'index']);
    Route::get('/mvim', [MvimController::class,'index']);
    Route::get('/total', [TotalController::class,'index']);
    Route::get('/bottom', [BottomController::class,'index']);
    Route::get('/news', [NewsController::class,'index']);
    Route::get('/admin', [AdminController::class,'index']);
    Route::get('/menu', [MenuController::class,'index']);
});

//modals
Route::view("/modals/addTitle",'modals.base_modal',['modal_header'=>'新增網站標題']);
Route::view("/modals/addAd",'modals.base_modal',['modal_header'=>'新增動態文字廣告']);
Route::view("/modals/addImage",'modals.base_modal',['modal_header'=>'新增校園映像圖片']);

// 預設
// Route::get('/', function () {
//     return view('welcome');
// });
