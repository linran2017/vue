<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class EntryController extends Controller{
    /**
     * 登录验证
     */
    public function __construct(){
        //除了登录视图和登录处理两个方法，其他方法都要进行登录验证
        $this->middleware('admin.auth')->except(['loginFrom','login']);
    }

    /**
     * 后台首页
     */
    public function index(){
        //dd(Auth::guard('admin')->user());
        return view('admin.entry.index');
    }

    /**
     * 登录视图
     */
    public function loginFrom(){
        return view('admin.entry.login');
    }

    /**
     * 登录处理
     */
    public function login(Request $request){
        $status=Auth::guard('admin')->attempt([
            'username'=>$request->input('username'),
            'password'=>$request->input('password')
        ]);
        //dd($status);
        if($status){
            //登录成功
            return redirect('/admin/index');
        }
        //登录错误
        return redirect('/admin/login')->with('error','用户名或密码错误!');
    }

    /**
     * 退出
     */
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
