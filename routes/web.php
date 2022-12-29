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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/foo', function () {
    return "Hello World!";
});
//多個請求
Route::match(['get', 'post'], '/match', function () {
    dd("match");
});
//重定向
Route::redirect('/foo', '/match', 301);
//視圖路由
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
//必填参数
Route::get('user/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');
//可選參數
Route::get('article/{id?}', function ($id = 0) {
    return $id;
});
//路由命名
Route::get('user/profile', function () {
    $url = route('profile');
    dd($url);
})->name('profile');


//帶參數的路由命名
Route::get('user/{id}/profile1', function ($id) {
    //只有一個參數，可以直接寫
    $url = route('user.profile1', $id);
    dd($url);
})->name('user.profile1');
//帶參數的路由命名,多個參數
Route::get('user/{id}/{test}/profile', function ($id,$test) {
    //第二個參數傳遞路由參數
    $url = route('user.profile', ['id' => $id,'test'=>$test]);
    dd($url);
})->name('user.profile');


