<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller{
    /**
     * 验证是否登录
     */
    public function __construct(){
        $this->middleware('admin.auth');
    }

    /**
     * 成功提示
     */
    public function success($message){
        return response()->json(['message'=>$message,'valid'=>1]);
    }

    /**
     * 错误提示
     */
    public function error($message){
        return response()->json(['message'=>$message,'valid'=>0]);
    }
}