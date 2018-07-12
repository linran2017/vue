<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/node_modules/hdjs/css/font-awesome.min.css" rel="stylesheet">
    <script>
        //HDJS组件需要的配置
        hdjs = {
            'base': '/node_modules/hdjs',
            'uploader': '/component/uploader',
            'filesLists': '/component/filesLists?',
            'removeImage': '?s=component/upload/removeImage&m=member&siteid=18',
            'ossSign': '?s=component/oss/sign&m=member&siteid=18',
        };
    </script>
    <script src="/node_modules/hdjs/app/util.js"></script>
    <script src="/node_modules/hdjs/require.js"></script>
    <script src="/node_modules/hdjs/config.js"></script>
    <script src="/node_modules/hdjs/js/jquery.min.js"></script>
    <script src="/node_modules/hdjs/js/bootstrap.min.js"></script>
    <link href="/css/hdcms.css" rel="stylesheet">
    <script>
        require(['jquery'], function ($) {
            //为异步请求设置CSRF令牌
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>
    <title>后台管理</title>
</head>
<body>
<div>
    <!--头部导航-->
    <nav class="navbar-inverse" >
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://laravelwap.linran136.com"><i class="fa fa-w fa-home"></i> 网站首页</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                             {{Auth::guard('admin')->user()->username}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/admin/changepassword">我的账号</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/admin/logout">退出</a></li>
                        </ul>
                    </li>
                    <script>
                        $('li.dropdown').hover(function () {
                            $('li.dropdown ul.dropdown-menu').css('display','block');
                        },function () {
                            $('li.dropdown ul.dropdown-menu').css('display','none');
                        })
                    </script>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!--头部导航结束-->
    <!--主体菜单-->
    <div class="container-fluid admin_menu" style="margin-top: 10px;">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">系统管理</h3>
                    </div>
                    <ul class="list-group menus">
                        <li class="list-group-item">
                            <a href="/admin/changepassword" class="quickMenuLink">我的资料</a>
                        </li>
                    </ul>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">内容管理</h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a class="quickMenuLink" href="/admin/tag">内容标签</a>
                        </li>
                        <li class="list-group-item">
                            <a href="/admin/lesson" class="quickMenuLink">视频管理</a>
                        </li>
                    </ul>
                </div>
            </div>
            <style>
                .list-group-item{
                    cursor: pointer;
                }
                .quickMenuLink{
                    color: black;
                    text-decoration: none;

                }
                .quickMenuLink:hover{
                    text-decoration: none;
                    color: black;
                }
            </style>
            <div class="col-xs-12 col-sm-9 col-lg-10">
                @yield('content')
            </div>
        </div>
    </div>
    <!--主体结束-->
</div>
</body>
@include('admin.layout.error')
@include('flash::message')
<script>
    require(['bootstrap'],function ($) {
        $('#flash-overlay-modal').modal();
    })
</script>
</html>