<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/admin', 'backend.module',['header'=>'網站標題管理','module'=>'Title']);
Route::get('/admin/{module}', function($module){
    switch ($module) {
        case 'title':
            return view('backend.module',['header'=>'網站標題管理','module'=>'Title']);
            break;
        case 'ad':
            return view('backend.module',['header'=>'動態文字廣告管理','module'=>'Ad']);
            break;
        case 'image':
            return view('backend.module',['header'=>'校園映像圖片管理','module'=>'Image']);
            break;
        case 'mvim':
            return view('backend.module',['header'=>'動畫圖片管理']);
            break;
        case 'total':
            return view('backend.module',['header'=>'進站人數管理']);
            break;
        case 'bottom':
            return view('backend.module',['header'=>'頁尾版權管理']);
            break;
        case 'news':
            return view('backend.module',['header'=>'最新消息管理']);
            break;
        case 'admin':
            return view('backend.module',['header'=>'管理者管理']);
            break;
        case 'menu':
            return view('backend.module',['header'=>'選單管理']);
            break;
        
        default:
            return view('backend.module',['header'=>'網站標題管理']);
            break;
    }
});

//modals
Route::view("/modals/addTitle",'modals.base_modal',['modal_header'=>'新增網站標題']);
Route::view("/modals/addAd",'modals.base_modal',['modal_header'=>'新增動態文字廣告']);
Route::view("/modals/addImage",'modals.base_modal',['modal_header'=>'新增校園映像圖片']);


// 群組
// Route::view('/admin', 'backend.title');
// Route::view('/admin/title', 'backend.title');
// 等於
// Route::prefix('admin')->group(function(){
//     Route::view('/', 'backend.title');
//     Route::view('/title', 'backend.title');
// });

// Route::get('/', function () {
//     return view('welcome');
// });
