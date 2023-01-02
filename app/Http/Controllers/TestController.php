<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function __invoke(Request $request)
    {
        //響應字符串
        //    return 'Hello World';

        //響應JSON
        // return [1, 2, 3];
        // return ['name'=>'Carl','age'=>30];

        //完整響應
        // return response('Hello World', 200)
        //     ->header('Content-Type', 'text/plain')
        //     ->header('MyHeader', 'hello');
        //添加響應頭-處理跨域資源訪問比較常用
        // return response('添加響應頭')
        //     ->header('Content-Type', 'text/plain')
        //     ->header('X-Header-One', 'Header Value')
        //     ->header('X-Header-Two', 'Header Value');

        //添加cookie
        // return response('添加cookie')
        //     ->header('Content-Type', 'text/plain')
        //     ->cookie('name', 'value', '1');

        //重定向
        // return redirect('welcome');
        //返回上一頁
        // return back()->withInput();//數據提交有錯誤可返回
        //重定向到命名路由
        // return redirect()->route('test', ['id' => 1]);
        //重定向到外部域名
        // return redirect()->away('https://www.google.com');
        //重定向並使用閃存的Session數據
        // return redirect('welcome')->with('status', 'Profile updated!');

        //JSON 響應
        // return response()->json([
        //     'name' => 'Abigail',
        //     'state' => 'CA',
        // ]);

        //文件下載
        // return response()->download(public_path('favicon.ico'));

        //流下載
        // return response()->streamDownload(function () {
        //     echo 'Hello';
        // }, 'Hello.txt');

        
    }
}
