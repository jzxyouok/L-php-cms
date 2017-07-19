<!DOCTYPE HTML>
<html ng-app="myApp">
<head>
    <meta charset="utf-8" />
    <title>Viralnova中文网 | 致力于分享有趣的、正能量的、有价值的资讯消息。</title>
    <meta name="description" content="Viralnova中文网|致力于分享有趣的、正能量的、有价值的资讯消息。">
    <meta name="keywords" content="viralnova,viralnova中文网,有趣的，正能量的，有价值的">
    <link rel="Shortcut Icon" href="{{ URL::asset('resources/views/index/woshipm/assets/images/favicon.ico') }}"
          type="image/x-icon">
    <link href="{{ URL::asset('resources/views/index/woshipm/assets/css/web2.0.css') }}" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('resources/views/index/woshipm/assets/css/viralnova.css') }}" />
    <script type="text/javascript"
            src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript"
            src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular.min.js"></script>

</head>
<body>


<div class="top_box">
    <div class="top_main po_rela">
        <a href="/" class="top_logo"></a>
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
        <form action="" name="registerForm">
        <div class="width100">

            <ul class="login_ul" ng-show="registerStyle && !registerSuccess && !registerFail">


                <li class="mar_t15">
                    <span class="lo_left">手机号</span>
                    <input id="" name="phone" type="text" ng-model="phone" class="lo_input hei_font" placeholder="手机号"
                           ng-pattern="/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/" required ng-blur="checkAccount()">
                </li>
                <li class="mar_t15">
                    <span class="lo_left">验证码</span>
                    <input id="" name="verifyCode" type="text" ng-model="verifyCode" class="lo_input width185 hei_font" placeholder="验证码">

                    <span id="" style="display: none;">
							<font id="" class="yzm_pic float_r notclick">0秒</font>
						</span>
                    <span id="" style="">
							<a href="javascript:void(0);" class="yzm_pic float_r" id="">重新获取验证码</a>
						</span>
                </li>
                <li class="mar_t15">
                    <span class="lo_left">密码</span>
                    <input id="phone_password" name="phonePassword" type="password" ng-model="phonePassword" class="lo_input hei_font" placeholder="密码" ng-pattern="/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/" required>
                </li>
                <li class="mar_t15">
                    <span class="lo_left">确认密码</span>
                    <input id="" name="phoneRePassword" type="password" class="lo_input hei_font" placeholder="确认密码" ng-pattern="/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/" required pw-check="phone_password" ng-model="phoneRePassword">
                </li>

                <li class="mar_t15 po_rela">
                    <span class="lo_left">&nbsp;</span>
                    <input id="" type="button" class="lo_button" ng-click="register()" value="立即注册" style="pointer-events: auto;">
                    <input id="" type="button" class="lo_button" value="正在注册..." style="display: none;">
                    <div style="text-align: left;">
                        <a href="javascript:void(0);" class="float_l text_un" ng-click="useEmail()">使用邮箱注册</a>
                    </div>
                    <div style="text-align: center;">
                        <font id="" style="display:block;">错了</font>
                    </div>

                </li>

            </ul>
            <ul class="login_ul ng-hide" ng-show="!registerStyle && !registerSuccess && !registerFail">


                <li class="mar_t15">
                    <span class="lo_left">邮箱</span>
                    <input id="" name="email" type="text" class="lo_input hei_font" ng-model="email" placeholder="邮箱" ng-pattern="/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/" required ng-blur="checkAccount()">
                </li>
                <li class="mar_t15">
                    <span class="lo_left">密码</span>
                    <input id="email_password" name="emailPassword" type="text" class="lo_input hei_font" placeholder="密码" ng-model="emailPassword" ng-pattern="/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/" required>
                </li>
                <li class="mar_t15">
                    <span class="lo_left">确认密码</span>
                    <input id="" name="emailRePassword" type="password" class="lo_input hei_font" placeholder="确认密码" ng-pattern="/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/" required pw-check="email_password" ng-model="emailRePassword">
                </li>

                <li class="mar_t15 po_rela">
                    <span class="lo_left">&nbsp;</span>
                    <input id="" type="button" class="lo_button" ng-show="registerBtnStatus" ng-click="register()" value="立即注册" style="pointer-events: auto;">
                    <input id="" type="button" class="lo_button ng-hide" ng-show="!registerBtnStatus" value="正在注册..." >
                    <div style="text-align: left;">
                        <a href="javascript:void(0);" class="float_l text_un" ng-click="usePhone()">使用手机号注册</a>
                    </div>

                </li>

            </ul>

            <div id="" class="ng-hide" style="font-size: 16px;text-align: center;margin: 50% auto;" ng-show="registerFail">
                <img alt="注册失败" src="https://passport.woshipm.com/assets/images/web2.0/tc_cha.png">
                <span> 注册失败，请重试</span>
            </div>
            <div id="" class="width100 mar_t60 ng-hide"
                 style="font-size: 16px;text-align: center;margin: 50% auto;" ng-show="registerSuccess">
                <p class="mar_t60 font20 end_tips">
                    <img alt="注册成功" src="https://passport.woshipm.com/assets/images/web2.0/tc_gou.png">
                    <span> 注册成功</span>
                </p>
                <p class="mar_t10 jiu_font">
                    <span id="" ng-bind="countDown"></span>秒后自动跳转，若无法跳转，可点击按钮跳转</p>
                <p class="mar_t30">
                    <input id="" class="mima_button" value="点击跳转" style="width:120px;">
                </p>
            </div>
        </div>
        <!-- 消息提示区 -->
        <ul class="regist_tips_ul y2" ng-show="registerStyle">
            <li id="" style="position: absolute;top: 0px" class="ng-hide" ng-show="registerForm.phone.$invalid && !registerForm.phone.$pristine">手机号码格式有误！</li>
            <li id="" style="position: absolute;top: 40px" class="mar_t15 ng-hide" ng-show="registerForm.phone.$invalid && !registerForm.phone.$pristine">验证码错误！</li>
            <li id="" style="position: absolute;top: 95px" class="mar_t15 ng-hide" ng-show="registerForm.phonePassword.$invalid && !registerForm.phonePassword.$pristine">密码由6-21字母和数字组成！</li>
            <li id="" style="position: absolute;top: 150px" class="mar_t15 ng-hide" ng-show="registerForm.phoneRePassword.$invalid && !registerForm.phoneRePassword.$pristine">两次密码不一致！</li>
        </ul>
        <ul class="regist_tips_ul y2 ng-hide" ng-show="!registerStyle">
            <li id="" style="position: absolute;top: 0px" class="ng-hide" ng-show="registerForm.email.$invalid && !registerForm.email.$pristine">邮箱格式不正确！</li>
            <li id="" style="position: absolute;top: 0px" class="ng-hide" ng-show="!registerForm.email.$pristine && exist">邮箱已经被注册！</li>
            <li id="" style="position: absolute;top: 40px" class="mar_t15 ng-hide" ng-show="registerForm.emailPassword.$invalid && !registerForm.emailPassword.$pristine">密码由6-21字母和数字组成!</li>
            <li id="" style="position: absolute;top: 95px" class="mar_t15 ng-hide" ng-show="registerForm.emailRePassword.$invalid && !registerForm.emailRePassword.$pristine">两次密码不一致！</li>
        </ul>
        </form>
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