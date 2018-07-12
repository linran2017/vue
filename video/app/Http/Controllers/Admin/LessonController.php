<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LessonRequest;
use App\Model\Lesson;
use App\Model\Tag;
use App\Model\TagLesson;
use App\Model\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends CommonController
{
    /**
     * Display a listing of the resource.
     *列表页显示
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data=Lesson::get();
        return view('admin.lesson.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *新增数据页面显示
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $tags=Tag::get();
        return view('admin.lesson.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *新增数据
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,LessonRequest $lessonRequest,Lesson $lesson){
        //添加课程表数据
        $lesson['title']=$lessonRequest['title'];
        $lesson['introduce']=$lessonRequest['introduce'];
        $lesson['preview']=$lessonRequest['preview'];
        $lesson['iscommend']=$request['iscommend'];
        $lesson['ishot']=$request['ishot'];
        $lesson['click']=$request['click'];
        $lesson->save();
        //dd($lesson);
        //添加视频表数据
        //转为数组
        $videos=json_decode($request['videos'],true);
        foreach($videos as $video){
            $lesson->videos()->create([
                'title'=>$video['title'],
                'path'=>$video['path']
            ]);
        }
        //中间表添加数据
        //dd($request['tag_id']);
        foreach ($request['tag_id'] as $v){
            $tagLesson=new tagLesson();
            $tagLesson->tag_id=$v;
            $tagLesson->lesson_id=$lesson->id;
            $tagLesson->save();
        }
        return redirect('/admin/lesson');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

    }

    /**
     * Show the form for editing the specified resource.
     *编辑页显示
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $lesson=Lesson::find($id);
        //dd($lesson->videos()->get()->toArray(),$lesson->videos()->get());
        $videos=json_encode($lesson->videos()->get()->toArray(),JSON_UNESCAPED_UNICODE);
        //dd($video);
        $tags=Tag::get();
        $middle=TagLesson::where('lesson_id',$id)->get()->toArray();
        $tagLesson=[];
        foreach ($middle as $v){
            $tagLesson[]=$v['tag_id'];
        }
        //dd($tagLesson);
        return view('admin.lesson.edit',compact('lesson','videos','tags','tagLesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
        $lesson=Lesson::find($id);
        //添加课程表数据
        $lesson['title']=$request['title'];
        $lesson['introduce']=$request['introduce'];
        $lesson['preview']=$request['preview'];
        $lesson['iscommend']=$request['iscommend'];
        $lesson['ishot']=$request['ishot'];
        $lesson['click']=$request['click'];
        $lesson->save();
        //添加视频表数据
        //删除视频表中lesson_id为$id的数据
        Video::where('lesson_id',$id)->delete();
        //转为数组
        $videos=json_decode($request['videos'],true);
        foreach($videos as $video){
            $lesson->videos()->create([
                'title'=>$video['title'],
                'path'=>$video['path']
            ]);
        }
        //更新中间表数据
        //删除中间表中lesson_id为$id的数据
        TagLesson::where('lesson_id',$id)->delete();
        //重新在中间表添加数据
        //循环提交的标签字段这个数组
        foreach ($request['tag_id'] as $v){
            //创建一个tagLesson模型
            $tagLesson=new TagLesson();
            //中间表的lesson_id就为要编辑这个课程的id
            $tagLesson->lesson_id=$id;
            //中间表的tag_id就为所选的这一个标签
            $tagLesson->tag_id=$v;
            //保存数据
            $tagLesson->save();
        }
        //dd($videos,$lesson->toArray());
        return redirect('/admin/lesson');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //删除课程表中id为$id的数据
        Lesson::destroy($id);
        //删除视频表中lesson_id为$id的数据
        Video::where('lesson_id',$id)->delete();
        //删除中间表中lesson_id为$id的数据
        TagLesson::where('lesson_id',$id)->delete();
        //提示删除成功，刷新页面
        return $this->success('删除成功');
    }
}
