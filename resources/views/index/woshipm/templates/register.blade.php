<!DOCTYPE HTML>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="Shortcut Icon" href="{{ URL::asset('resources/views/index/woshipm/assets/images/favicon.ico') }}"
          type="image/x-icon">
    <link href="{{ URL::asset('resources/views/index/woshipm/assets/css/web2.0.css') }}" rel="stylesheet"
          type="text/css">
    <script type="text/javascript"
            src="{{ URL::asset('resources/views/index/woshipm/assets/js/angular.js') }}"></script>
    <link rel="stylesheet" href="https://static.geetest.com/static/golden/style_https.3.2.0.css">
</head>
<body>


<div class="top_box">
    <div class="top_main po_rela">
        <a href="/" class="top_logo">VIRALNOVA中文网</a>
        <span class="txz_font">通行证</span>
        <a href="javascript:void(0);" class="t_nav float_r" id="">旗下平台</a>

        <ul class="two_nav menu_dw" id="" style="display: none;">
            <li><a href="http://www.woshipm.com"><i class="menu_icon1"></i>VIRALNOVA中文网</a></li>
            <li><a href="http://wen.woshipm.com"><i class="menu_icon3"></i>天天问</a></li>
            <li><a href="http://www.qidianla.com"><i class="menu_icon2"></i>起点学院</a></li>
            <li><a href="http://www.yunyingpai.com"><i class="menu_icon4"></i>运营派</a></li>
        </ul>
    </div>
</div>
<div class="login_box" style="overflow: auto;">
    <div class="lo_main">
        <div class="width100">
            <ul class="login_ul">
                <li>
                    <span class="lo_left">手机号</span>
                    <input name="phone" id="phoneInput" type="text" onblur="checkRegistPhone(this);"
                           class="lo_input hei_font" placeholder="请输入11位手机号码">
                </li>
                <li class="mar_t15">
                    <span class="lo_left">&nbsp;</span>
                    <input type="button" class="lo_button" id="popup-submit" value="下一步">
                    <input type="button" class="lo_button" id="popup-submit-load" value="跳转中..." style="display: none;">
                </li>
                <li class="jiu_font text_l">
                    <span class="lo_left">&nbsp;</span>已有账号？
                    <a href="https://passport.woshipm.com/user/2login.html">立即登录</a>
                </li>
            </ul>
        </div>
        <ul class="regist_tips_ul y1 y3">
            <li id=""></li>
            <li id="" class="mar_t15"></li>
        </ul>
    </div>
</div>
<div class="foot">Copyright© 2017-2017 VIRALNOVA.COM - VIRALNOVA中文网 -
    <a style="color: white" href="http://www.miibeian.gov.cn/">粤ICP备14037330号-1</a>
</div>


</body>
</html>