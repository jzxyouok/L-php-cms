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
<div class="login_box">
    <div class="lo_main">
        <input type="hidden" id="oldContent">
        <input type="hidden" id="returnUrl">
        <div class="width100">
            <form method="post" action="https://passport.woshipm.com/reg/registNew.html" name="aform" id="registForm">
                <ul class="login_ul">
                    <li>
                        <span class="lo_left">手机号</span>
                        <font class="float_l font16 mar_r10">18520877639</font>
                        <a href="https://passport.woshipm.com/reg/index.html" class="float_l text_un">更改号码</a>
                    </li>
                    <li class="mar_t15">
                        <span class="lo_left">验证码</span>
                        <input id="validateCode" name="validateCode" type="text" class="lo_input width185 hei_font" placeholder="请输入手机收到的验证码">
                        <input id="phoneInput" name="phone" type="hidden" class="lo_input width185" value="18520877639">
                        <span id="control1" style="display: none;">
							<font id="timeCount" class="yzm_pic float_r notclick">0秒</font>
						</span>
                        <span id="control2" style="">
							<a href="javascript:sendPhoneRegistCode();" class="yzm_pic float_r" id="postCode">重新获取验证码</a>
						</span>
                    </li>
                    <li class="mar_t15">
                        <span class="lo_left">昵称</span>
                        <input id="nickName" name="nickName" type="text" class="lo_input hei_font" placeholder="昵称将会显示在个人主页和评论里" maxlength="10" data-form-un="1499077425684.8074">
                    </li>
                    <li class="mar_t15">
                        <span class="lo_left">密码</span>
                        <input id="passWord" name="passWord" type="password" class="lo_input hei_font" placeholder="请输入登录密码" maxlength="30" data-form-pw="1499077425684.8074">
                    </li>
                    <li class="mar_t15 po_rela">
                        <span class="lo_left">&nbsp;</span>
                        <input id="submitInput" type="button" class="lo_button" value="立即注册" data-form-sbm="1499077425684.8074" style="pointer-events: auto;">
                        <input id="submitInputLoading" type="button" class="lo_button" value="正在注册..." style="display: none;">
                        <div style="text-align: center;">
                            <font id="msgShow" style="display:block;"></font>
                        </div>
                    </li>
                </ul>
            </form>
            <div id="registFail" style="font-size: 16px;text-align: center;margin: 50% auto;display: none;">
                <img alt="注册失败" src="https://passport.woshipm.com/assets/images/web2.0/tc_cha.png"><span> 注册失败，请重试</span>
            </div>
            <div id="registSuccess" class="width100 mar_t60" style="font-size: 16px;text-align: center;margin: 50% auto;display: none;">
                <p class="mar_t60 font20 end_tips">
                    <img alt="注册成功" src="https://passport.woshipm.com/assets/images/web2.0/tc_gou.png"><span> 注册成功</span>
                </p>
                <p class="mar_t10 jiu_font"><font id="countResult">3</font>秒后自动跳转，若无法跳转，可点击按钮跳转</p>
                <p class="mar_t30"><input id="goThere" class="mima_button" value="点击跳转" style="width:120px;"></p>
            </div>
        </div>
        <!-- 消息提示区 -->
        <ul class="regist_tips_ul y2">
            <li id="info1"></li>
            <li id="info2" class="mar_t15"></li>
            <li id="info3" class="mar_t15"></li>
        </ul>
    </div>
</div>
<div class="foot">Copyright© 2017-2017 VIRALNOVA.COM - VIRALNOVA中文网 -
    <a style="color: white" href="http://www.miibeian.gov.cn/">粤ICP备14037330号-1</a>
</div>


</body>
</html>