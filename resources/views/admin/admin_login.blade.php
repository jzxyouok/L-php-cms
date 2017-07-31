<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>用户登录 | L-php-cms</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('public/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="https://cdn.bootcss.com/admin-lte/2.3.8/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{ URL::asset('public/plugins/iCheck/square/blue.css') }}">
    <script src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular-sanitize.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.6/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page" ng-app="myApp" ng-controller="adminLogin" ng-init="getCode()">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>L-php-cms</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">用户登录</p>

        <form action="admin_login" name="myForm" method="post" onsubmit="return false;">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" placeholder="请输入用户名" ng-model="username">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="请输入密码" ng-model="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="code" placeholder="请输入验证码" ng-model="code">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            </div>
            <div class="row">
                <div class="col-xs-8">
                    <img ng-src="@{{base64}}" alt="" ng-click="updateCode()">
                </div>


                <div class="col-xs-4" style="color: red;" ng-show="msg"> @{{msg}}</div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> 记住我
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" ng-click="login()">登录</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


        <a href="#">忘记密码</a>


    </div>
    <!-- /.login-box-body -->
</div>


<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('public/plugins/iCheck/icheck.min.js') }}"></script>
<script src="{{ URL::asset('public/js/common/L-php-cms.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
