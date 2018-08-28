<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //注册
    public function index()
    {
    	return view('/login/index');
    }

    //添加到数据库
    public function create()
    {
    	// var_dump($_GET);
    	DB::table('user')->insert(['username' => $_POST['username'], 'password' => $_POST['password'],'phone' => $_POST['phone']]);
    	return view('index');
    }

    //登录
    public function dl()
    {
    	return view('/login/dl');
    }

     public function flash()
    {
    	return redirect('/get-flash')->with('info','添加成功');
    } 
    public function getFlash()
    {
    	$a = \Session::get('info');
    	return view('index');
    	
    }

    //设置cookie
    public function set()
    {
    	// \Cookie::queue('name','yxy', 10);
    	return response('<p>我是姚侠宇</p>')->withCookie('class','lamp207',10);
    	//读取
    	// $name = \Cookie::get('name');
    	$name = \Cookie::get('class');
    	dd($name);
    }
    //响应
    public function response()
    {
    	 // 普通字符串
        // return 'i love you';
        //返回json
        // return response()->json(['name'=>'姚侠宇','age'=>21]);

        //返回 模板
        // return view('view');

        //下载
        return response()->download('./robots.txt');
    }
}
