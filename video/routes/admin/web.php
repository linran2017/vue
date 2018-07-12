<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/25
 * Time: 10:05
 */
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    //后台登录
    Route::get('/login','EntryController@loginFrom');
    //登录处理
    Route::post('/login','EntryController@login');
    //后台首页
    Route::get('/index','EntryController@index');
    //退出
    Route::get('/logout','EntryController@logout');
    //修改密码
    Route::get('/changepassword','MyController@passwordForm');
    //修改密码处理
    Route::post('/changepassword','MyController@changePassword');
    //标签路由
    Route::resource('tag','TagController');
    //课程路由
    Route::resource('lesson','LessonController');
})
?>