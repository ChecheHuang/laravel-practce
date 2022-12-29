<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ShowProfile;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Test;

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
    return view('welcome');
});
//基本控制器
Route::get('/test/{id}', [TestController::class, 'test']);
//單行為控制器
Route::get('/user/{id}', ShowProfile::class);




//補充資源控制器
Route::get('photos/popular', [PhotoController::class, 'popular']);

//資源型控制器
// Route::resource('photo',PhotoController::class);

//部分資源路由
Route::resource('photo', PhotoController::class)->only([
    'index', 'show'
])->names([
    //為部分路由的命名重新設置
    'index' => 'photos.YYYY'
])->parameters([
    //重新設置路由參數
    'photo' => 'photo2'
]);
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);
