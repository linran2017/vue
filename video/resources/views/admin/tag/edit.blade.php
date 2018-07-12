@extends('admin.layout.master')
@section('content')
    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs">
        <li><a href="/admin/tag">列表</a></li>
        <li><a href="/admin/tag/create">新增</a></li>
    </ul>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">标签管理</h3>
        </div>
        <div class="panel-body">
            <form action="/admin/tag/{{$model['id']}}" method="post" class="form-horizontal" role="form">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="inputID" class="col-sm-2 control-label">标签名称:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="inputID" class="form-control" value="{{$model['name']}}" title="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection