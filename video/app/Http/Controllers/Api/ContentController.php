<?php

namespace App\Http\Controllers\Api;

use App\Model\Lesson;
use App\Model\Tag;
use App\Model\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ContentController extends CommonController{
    /**
     * 获取标签内容
     */
    public function tags(){
        return $this->response(Tag::get());
    }

    /**
     * 获取课程
     */
    public function lesson($tid){
        if($tid){
            //多表关联，多对多
            //多个课程对应多个标签
            $data= DB::table('lessons')
                ->select('lessons.*')
                ->join('tag_lessons', 'lessons.id', '=', 'tag_lessons.lesson_id')
                ->where('tag_id',$tid)
                ->get();
        }else{
            $data=Lesson::get();
        }
        return $this->response($data);
    }

    /**
     * 推荐课程
     */
    public function commendLesson($row){
        $data=Lesson::where('iscommend',1)->limit($row)->get();
        return $this->response($data);
    }

    /**
     * 热门课程
     */
    public function hotLesson($row){
        $data=Lesson::where('ishot',1)->limit($row)->get();
        return $this->response($data);
    }

    /**
     * 视频列表
     */
    public function videos($lessonId){
        $data=Video::where('lesson_id',$lessonId)->get();
        return $this->response($data);
    }

    /**
     * 首页轮播
     */
    public function sildesLesson($row){
        $data=Lesson::limit($row)->get();
        return $this->response($data);
    }
}
