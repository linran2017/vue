<?php
Route::group(['namespace'=>'Api'],function (){
    //显示内容标签
    Route::get('tags','ContentController@tags');
    //获取课程
    Route::get('lesson/{tid}','ContentController@lesson');
    //推荐课程
    Route::get('commendLesson/{row}','ContentController@commendLesson');
    //热门课程
    Route::get('hotLesson/{row}','ContentController@hotLesson');
    //获取课程所属的视频
    Route::get('videos/{lessonId}','ContentController@videos');
    //首页轮播图
    Route::get('sildesLesson/{row}','ContentController@sildesLesson');
})
?>