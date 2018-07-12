@extends('admin.layout.master')
@section('content')
    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="/admin/lesson">列表</a></li>
        <li><a href="/admin/lesson/create">新增</a></li>
    </ul>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">课程列表</h3>
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <tr>
                    <th>编号</th>
                    <th>课程名称</th>
                    <th>视频数量</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $v)
                <tr>
                    <td width="20%">{{$v['id']}}</td>
                    <td width="30%">{{$v['title']}}</td>
                    <td width="30%">{{$v->videos()->count()}}</td>
                    <td>
                        <a href="/admin/lesson/{{$v['id']}}/edit" class="btn btn-primary">编辑</a>
                        <a href="javascript:;" onclick="del({{$v['id']}})"  class="btn btn-danger">删除</a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function del(id) {
            require(['util'],function (util) {
                util.confirm('确定要删除吗？',function () {
                    $.ajax({
                        url:'/admin/lesson/'+id,
                        method:'DELETE',
                        success:function (response) {
                            //显示提示删除成功，并且刷新页面
                            util.message(response.message,'refresh');
                        }
                    })
                })
            })
        }
    </script>
@endsection