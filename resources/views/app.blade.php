<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel Shop') - Laravel 美团</title>
    <!-- 样式 -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="links">
                <el-row>
                    <el-button>默认按钮</el-button>
                    <el-button type="primary">主要按钮</el-button>
                    <el-button type="success">成功按钮</el-button>
                    <el-button type="info">信息按钮</el-button>
                    <el-button type="warning">警告按钮</el-button>
                    <el-button type="danger">危险按钮</el-button>
                </el-row>
            </div>
        </div>
    </div>
</div>
<!-- JS 脚本 -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
