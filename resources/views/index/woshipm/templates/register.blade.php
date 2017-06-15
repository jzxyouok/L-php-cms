<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="Shortcut Icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <link href="{{ URL::asset('resources/views/index/woshipm/assets/css/web2.0.css') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ URL::asset('resources/views/index/woshipm/assets/js/angular.js') }}"></script>
    <link rel="stylesheet" href="https://static.geetest.com/static/golden/style_https.3.2.0.css">
</head>
<body>


<div class="top_box">
    <div class="top_main po_rela">
        <a href="/" class="top_logo">人人都是产品经理</a>
        <span class="txz_font">通行证</span>
        <a href="javascript:;" class="t_nav float_r" id="menuA">旗下平台</a>

        <ul class="two_nav menu_dw" id="menuContainer" style="display: none;">
            <li><a href="http://www.woshipm.com"><i class="menu_icon1"></i>人人都是产品经理</a></li>
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
                    <div id="popup-captcha" style="position: absolute;left: 87px; z-index: 9999999; top: 66px;">
                        <div id="geetest_1497433808633" class="gt_holder gt_float" style="touch-action: none;">
                            <div class="gt_widget gt_hide">
                                <div class="gt_holder_top"></div>
                                <div class="gt_box_holder" style="height: 116px;">
                                    <div class="gt_box">
                                        <div class="gt_loading">
                                            <div class="gt_loading_icon"></div>
                                            <div class="gt_loading_text">加载中...</div>
                                        </div>
                                        <a class="gt_bg gt_show" style="background-image: none;">
                                            <div class="gt_cut_bg gt_show">
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -157px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -145px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -265px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -277px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -181px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -169px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -241px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -253px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -109px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -97px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -289px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -301px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -85px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -73px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -25px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -37px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -13px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -1px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -121px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -133px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -61px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -49px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -217px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -229px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -205px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -193px -58px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -145px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -157px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -277px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -265px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -169px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -181px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -253px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -241px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -97px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -109px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -301px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -289px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -73px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -85px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -37px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -25px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -1px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -13px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -133px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -121px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -49px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -61px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -229px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -217px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -193px 0px;"></div>
                                                <div class="gt_cut_bg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/bg/44a900901.webp&quot;); background-position: -205px 0px;"></div>
                                            </div>
                                            <div class="gt_slice gt_show"
                                                 style="left: 0px; background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/slice/44a900901.png&quot;); width: 52px; height: 44px; top: 0px;"></div>
                                        </a><a class="gt_fullbg gt_show"
                                               style="cursor: default; background-image: none;">
                                            <div class="gt_cut_fullbg gt_show">
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -157px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -145px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -265px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -277px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -181px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -169px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -241px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -253px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -109px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -97px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -289px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -301px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -85px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -73px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -25px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -37px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -13px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -1px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -121px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -133px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -61px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -49px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -217px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -229px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -205px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -193px -58px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -145px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -157px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -277px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -265px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -169px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -181px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -253px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -241px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -97px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -109px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -301px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -289px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -73px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -85px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -37px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -25px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -1px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -13px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -133px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -121px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -49px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -61px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -229px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -217px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -193px 0px;"></div>
                                                <div class="gt_cut_fullbg_slice"
                                                     style="background-image: url(&quot;https://static.geetest.com/pictures/gt/9f9cff207/9f9cff207.webp&quot;); background-position: -205px 0px;"></div>
                                            </div>
                                            <div class="gt_flash" style="height: 94px;"></div>
                                            <div class="gt_ie_success"></div>
                                        </a><a class="gt_curtain gt_hide" style="background-image: none;">
                                            <div class="gt_curtain_bg_wrap">
                                                <div class="gt_curtain_bg">
                                                    <div class="gt_cut_curtain"></div>
                                                </div>
                                            </div>
                                            <div class="gt_curtain_button gt_hide"></div>
                                        </a><a class="gt_box_tips" style="display: none;"></a></div>
                                    <div class="gt_info">
                                        <div class="gt_info_tip">
                                            <div class="gt_info_icon"></div>
                                            <div class="gt_info_text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gt_bottom"><a class="gt_refresh_button">
                                        <div class="gt_refresh_tips">刷新验证</div>
                                    </a><a class="gt_help_button" href="" target="_blank">
                                        <div class="gt_help_tips">帮助反馈</div>
                                    </a><a class="gt_logo_button" href="http://www.geetest.com/first_page"
                                           target="_blank"></a></div>
                            </div>
                            <div class="gt_input"><input class="geetest_challenge" type="hidden"
                                                         name="geetest_challenge"><input class="geetest_validate"
                                                                                         type="hidden"
                                                                                         name="geetest_validate"><input
                                        class="geetest_seccode" type="hidden" name="geetest_seccode"></div>
                            <div class="gt_slider">
                                <div class="gt_guide_tip gt_show">按住左边滑块，拖动完成上方拼图</div>
                                <div class="gt_slider_knob gt_show" style="left: 0px;"></div>
                                <div class="gt_curtain_tip gt_hide">点击上图按钮并沿道路拖动到终点处</div>
                                <div class="gt_curtain_knob gt_hide">移动到此开始验证</div>
                                <div class="gt_ajax_tip gt_ready"></div>
                            </div>
                        </div>
                    </div>
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
            <li id="phoneTips"></li>
            <li id="checkTips" class="mar_t15"></li>
        </ul>
    </div>
</div>
<div class="foot">Copyright© 2010-2016 WOSHIPM.COM - 人人都是产品经理 - <a style="color: white"
                                                                   href="http://www.miibeian.gov.cn/">粤ICP备14037330号-1</a>
</div>




</body>
</html>