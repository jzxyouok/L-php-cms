<!DOCTYPE HTML>
<html>
<head>
    <title>登录-VIRALNOVA中文网</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="Shortcut Icon" href="{{ URL::asset('resources/views/index/woshipm/assets/images/favicon.ico') }}"
          type="image/x-icon">
    <link href="{{ URL::asset('resources/views/index/woshipm/assets/css/web2.0.css') }}" rel="stylesheet"
          type="text/css">
    <script type="text/javascript"
            src="{{ URL::asset('resources/views/index/woshipm/assets/js/jquery-1.12.4.js') }}"></script>
    <script type="text/javascript"
            src="{{ URL::asset('resources/views/index/woshipm/assets/js/angular.js') }}"></script>
</head>

<body style="background-color: #fff">
<div class="fc_box po_rela">
    <div class="fc_main">
        <p class="dsf_tit" style="margin-top: 20px;">VIRALNOVA中文网帐号登录</p>
        <div class="width100" style="overflow: hidden">
            <form method="post" action="//passport.woshipm.com/user/loginByTop.html?_protocol=http" name="aform"
                  id="loginTopForm">
                <input type="hidden" name="FFROMSYS" value="PM">
                <input type="hidden" name="REDIRECT" value="http://www.woshipm.com/pmd/666850.html">
                <ul class="login_ul" style="margin-top:20px;">
                    <li class="mar_t15">
                        <span class="lo_left">用户名</span>
                        <input type="text" placeholder="手机/用户名/邮箱" id="" name="" value=""
                               class="lo_input hei_font" maxlength="64">
                    </li>
                    <li class="mar_t15">
                        <span class="lo_left">密 码</span>
                        <input type="password" placeholder="登录密码" id="" name="pwd"
                               class="lo_input hei_font" maxlength="32">
                    </li>
                    <li class="error_tips">
                        <span class="lo_left">错误了</span>
                        <span id="errorTips">错误了2</span>
                    </li>
                    <li>
                        <span class="lo_left">&nbsp;</span>
                        <input id="" type="button" class="lo_button" value="登录"
                               style="pointer-events: auto;">
                        <input id="" type="button" class="lo_button" value="正在登录..."
                               style="display: none;">
                    </li>
                    <li class="text_r">
                        <span class="lo_left">&nbsp;</span>
                        <span class="float_l jiu_font">没有账号？
                            <a href="#" onclick="window.parent.location.href='/user/register'">立即注册</a>
                        </span>
                        <a href="#" class="jiu_font"
                           onclick="window.parent.location.href='/user/forget_password'">忘记密码?</a>
                    </li>
                    <li>
                        <span class="lo_left">&nbsp;</span><span class="dsf_line">第三方登录</span>
                    </li>
                    <li>
                        <span class="lo_left">&nbsp;</span>
                        <a href="" class="wechat">微信登录</a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>


<script src="{{ URL::asset('resources/views/index/woshipm/assets/js/default.controller.js') }}"></script>


</body>
</html>