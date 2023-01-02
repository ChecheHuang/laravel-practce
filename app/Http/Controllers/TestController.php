<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function __invoke(Request $request)
    {
        //原始查詢
        // $users = DB::select('select * from users where name = ?', ['carl']);
        // dd($users);

        //獲取結果--獲取所有
        // $users = DB::table('users')->get();
        // dd($users);

        //獲取結果--單條
        // $users = DB::table('users')->where("id",1)->first();
        // dd($users);

        //獲取某個字段單個的值
        // $users = DB::table('users')->where("id",1)->value('name');
        // dd($users);

        //用find獲得單條數據
        // $user = DB::table('users')->find(1);
        // dd($user);

        //獲取單列數據
        // $names = DB::table('users')->pluck('name','name');
        // dd($names);

        //聚合
        // $userCount = DB::table("users")->count(); //構造器的count()方法
        // $userCount2 = Db::table("users")->get()->count(); //集合的count()方法
        // dd($userCount, $userCount2);

        //判斷紀錄是否存在
        // dd(DB::table("users")->where('id',1)->exists());

        //select查詢指定列
        // $users = DB::table('users')->select('name', 'email as user_email')->get();
        // dd($users);

        //簡單where
        // dd(DB::table("users")->where('id',1)->get());

        //高級where-參數分組
        // $users = DB::table('users')
        //     ->where('name', '=', 'John')
        //     ->where(function ($query) {
        //         $query->where('id', '>', 100)
        //             ->orWhere('name', '=', 'Admin');
        //     })
        //     ->get();
        // dd($users);

        //select * from users where name = 'John' and (id > 100 or name = 'Admin')

        //高級where-子查詢

        //條件語句
        // $name = $request->input('name');
        // $users = DB::table('users')
        //     ->when($name, function ($query, $name) {
        //         return $query->where('name', $name);//條件成立時執行
        //     }, function ($query) {
        //         return $query->orderBy('name');//條件不成立時執行
        //     })
        //     ->get();
        // dd($users);

        //插入語句
        //單個插入
        // $res=DB::table('users')->insert(
        //     ['email' => 'john@example.com', 'name' => 'john','password'=>bcrypt("12345678")]
        // );
        // dd($res);
        //多個插入
        // $res = DB::table('users')->insert(
        //     [
        //         ['email' => 'kat@example.com', 'name' => 'kat', 'password' => bcrypt("12345678")],
        //         ['email' => 'allen@example.com', 'name' => 'allen', 'password' => bcrypt("12345678")]
        //     ]
        // );
        // dd($res);

        //更新語句
        // $affected = DB::table('users')
        //       ->where('id', 1)
        //       ->update(['email' => "test@example.com",'name'=>"test"]);
        // dd($affected);

        //自增
        // $affected = DB::table('users')
        //     ->where("id", 4)
        //     ->increment('name');
        // dd($affected);

        //刪除
        // $res = DB::table('users')->where('id', '>', 3)->delete();
        // dd($res);

        
    }
}
