<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Laravel 美团</title>
    <!-- 样式 -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        html,body{
            height: 100%;
        }
    </style>
</head>
<body>
<el-container id="app" class="layout-default" style="height: 100%">

    <!-- 头部开始-->
    <el-header style="padding:0">
        <my-header/>
    </el-header>
    <!-- 头部结束-->

    <!-- 中间开始-->
    <el-main>
        @yield('content')
    </el-main>
    <!-- 中间结束-->

    <!-- 尾部-->
    <el-footer>Footer</el-footer>

</el-container>
<!-- JS 脚本 -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

