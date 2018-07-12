<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MyController extends CommonController{
    /**
     * 修改密码视图
     */
    public function passwordForm(){
        return view('admin.my.passwordForm');
    }

    /**
     * 更改密码处理
     */
    public function changePassword(AdminPost $request){
        //获取数据模型
        $model=Auth::guard('admin')->user();
       // dd($model);
        //把更改的新密码加密后替换掉旧密码
        $model->password=bcrypt($request['newpassword']);
        //把新密码保存在数据库里
        $model->save();
        //出现密码修改成功的模态框提示
        flash('密码修改成功')->overlay();
        //返回当前页
        return redirect()->back();
    }
}
