<!DOCTYPE HTML>
<html ng-app="myApp">
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
<div class="login_box" ng-controller="registerCtrl">
    <div class="lo_main">
        <div class="width100">

            <ul class="login_ul" ng-show="registerStyle">


                <li class="mar_t15">
                    <span class="lo_left">手机号</span>
                    <input id="" name="phone" type="text" class="lo_input hei_font" placeholder="手机号" maxlength="10"
                           ng-pattern="">
                </li>
                <li class="mar_t15">
                    <span class="lo_left">验证码</span>
                    <input id="" name="" type="text" class="lo_input width185 hei_font" placeholder="验证码">

                    <span id="" style="display: none;">
							<font id="" class="yzm_pic float_r notclick">0秒</font>
						</span>
                    <span id="" style="">
							<a href="javascript:void(0);" class="yzm_pic float_r" id="">重新获取验证码</a>
						</span>
                </li>
                <li class="mar_t15">
                    <span class="lo_left">密码</span>
                    <input id="" name="" type="password" class="lo_input hei_font" placeholder="密码" maxlength="10">
                </li>
                <li class="mar_t15">
                    <span class="lo_left">确认密码</span>
                    <input id="" name="" type="password" class="lo_input hei_font" placeholder="确认密码" maxlength="30">
                </li>

                <li class="mar_t15 po_rela">
                    <span class="lo_left">&nbsp;</span>
                    <input id="" type="button" class="lo_button" value="立即注册" style="pointer-events: auto;">
                    <input id="" type="button" class="lo_button" value="正在注册..." style="display: none;">
                    <div style="text-align: left;">
                        <a href="javascript:void(0);" class="float_l text_un" ng-click="useEmail()">使用邮箱注册</a>
                    </div>
                    <div style="text-align: center;">
                        <font id="" style="display:block;">错了</font>
                    </div>

                </li>

            </ul>
            <ul class="login_ul ng-hide" ng-show="!registerStyle">


                <li class="mar_t15">
                    <span class="lo_left">邮箱</span>
                    <input id="nickName" name="nickName" type="text" class="lo_input hei_font"
                           placeholder="昵称将会显示在个人主页和评论里" maxlength="10" data-form-un="1499077425684.8074">
                </li>
                <li class="mar_t15">
                    <span class="lo_left">密码</span>
                    <input id="nickName" name="nickName" type="text" class="lo_input hei_font"
                           placeholder="昵称将会显示在个人主页和评论里" maxlength="10" data-form-un="1499077425684.8074">
                </li>
                <li class="mar_t15">
                    <span class="lo_left">确认密码</span>
                    <input id="passWord" name="passWord" type="password" class="lo_input hei_font" placeholder="请输入登录密码"
                           maxlength="30" data-form-pw="1499077425684.8074">
                </li>

                <li class="mar_t15 po_rela">
                    <span class="lo_left">&nbsp;</span>
                    <input id="submitInput" type="button" class="lo_button" value="立即注册"
                           data-form-sbm="1499077425684.8074" style="pointer-events: auto;">
                    <input id="submitInputLoading" type="button" class="lo_button" value="正在注册..."
                           style="display: none;">
                    <div style="text-align: left;">
                        <a href="javascript:void(0);" class="float_l text_un" ng-click="usePhone()">使用手机号注册</a>
                    </div>
                    <div style="text-align: center;">
                        <font id="msgShow" style="display:block;">错了</font>
                    </div>

                </li>

            </ul>

            <div id="" style="font-size: 16px;text-align: center;margin: 50% auto;display: none;">
                <img alt="注册失败" src="https://passport.woshipm.com/assets/images/web2.0/tc_cha.png">
                <span> 注册失败，请重试</span>
            </div>
            <div id="" class="width100 mar_t60"
                 style="font-size: 16px;text-align: center;margin: 50% auto;display: none;">
                <p class="mar_t60 font20 end_tips">
                    <img alt="注册成功" src="https://passport.woshipm.com/assets/images/web2.0/tc_gou.png">
                    <span> 注册成功</span>
                </p>
                <p class="mar_t10 jiu_font">
                    <font id="">3</font>秒后自动跳转，若无法跳转，可点击按钮跳转</p>
                <p class="mar_t30">
                    <input id="goThere" class="mima_button" value="点击跳转" style="width:120px;">
                </p>
            </div>
        </div>
        <!-- 消息提示区 -->
        <ul class="regist_tips_ul y2">
            <li id="info1"></li>
            <li id="info2" class="mar_t15"></li>
            <li id="info3" class="mar_t15"></li>
            <li id="info4" class="mar_t15"></li>
        </ul>
    </div>
</div>
<div class="foot">Copyright© 2017-2017 VIRALNOVA.COM - VIRALNOVA中文网 -
    <a style="color: white" href="http://www.miibeian.gov.cn/">粤ICP备14037330号-1</a>
</div>

<script src="{{ URL::asset('resources/views/index/woshipm/assets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ URL::asset('resources/views/index/woshipm/assets/js/default.service.js') }}"></script>
<script src="{{ URL::asset('resources/views/index/woshipm/assets/js/default.controller.js') }}"></script>
</body>
</html>