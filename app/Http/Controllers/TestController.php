<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(Request $request)
    {
        //獲取請求路徑
        // dd($request->path());

        // 没有包含查询条件字符串
        // dd($request->url());

        // 包含查询条件字符串
        // dd($request->fullUrl());

        //請求方法
        // dd($request->method());

        //判斷請求方法
        // dd($request->isMethod('post'));

        //判斷獲取全部輸入
        // dd($request->all());

        //input 獲取指定的數據
        // dd($request->input('name','carl'));

        //query string 獲取指定的數據
        // dd($request->query('name', 'carl'));

        //使用動態屬性獲取輸入的數據
        // dd($request->name);

        //使用陣列來獲取輸入的數據
        // dd($request['name']);

        //獲取部分輸入的數據
        // dd($request->only('name'));
        // dd($request->except('name'));

        //判斷輸入是否存在
        // dd($request->has('name'));//參數存不存在
        // dd($request->filled('name'));//參數存在且不能為空

        







        
    }
}
