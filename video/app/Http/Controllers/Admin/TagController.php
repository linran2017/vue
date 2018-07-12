<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
//使用tag模型类
use App\Model\Tag;
class TagController extends CommonController
{
    /**
     * Display a listing of the resource.
     *标签列表页
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data=Tag::get();
        //dd($data);
        return view('admin.tag.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *新增标签页
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *保存标签数据
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request,Tag $model){
        //把字段批量添加到数据库
        $model->create($request->all());
        //跳转到列表页
        return redirect('/admin/tag');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *显示修改标签页面
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //dd($id);
        $model=Tag::find($id);
        return view('admin.tag.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $model=Tag::find($id);
        $model['name']=$request['name'];
        $model->save();
        return redirect('/admin/tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //删除id为$id的这一个标签
        Tag::destroy($id);
        return $this->success('删除成功');
    }
}
