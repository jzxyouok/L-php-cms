@include('index.woshipm.templates.me_layout')
<div class="contianer user-column" >
    <div class="user-left">
        <ul id="menu-new_user_menu" class="user-menu">
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom ">
                <a href="/me/post"><i class="iconfont icon-list"></i>我的文章</a>
            </li>
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom ">
                <a href="/me/collection/"><i class="iconfont icon-heart"></i>我的收藏</a>
            </li>
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom ">
                <a href="/me/answer/"><i class="iconfont icon-answer"></i>我的问答</a>
            </li>
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom ">
                <a href="/me/comment"><i class="iconfont icon-comment"></i>我的评论</a>
            </li>
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom ">
                <a href="/me/subscribe/"><i class="iconfont icon-rss"></i>我的订阅</a>
            </li>
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom ">
                <a href="/me/reward/"><i class="iconfont icon-money"></i>我的打赏</a>
            </li>
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom ">
                <a href="/me/message/"><i class="iconfont icon-notice"></i>通知中心</a>
            </li>
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom  current-menu-item">
                <a href="/me/setting/"><i class="iconfont icon-config"></i>资料设置</a>
            </li>
        </ul>
    </div>

<div class="user-right">
    <div class="follow-nav">
        <span class=""><a href="/me/setting">资料设置</a></span>
        <span class=""><a href="/me/setting/password">密码设置</a></span>
        <span class="current"><a href="/me/setting/avatar">头像设置</a></span>
    </div>
    <div class="user-main-content" id="user-avatar-container" style="position: relative;">
        <div class="user-avatar-preview">
            <img src="https://static.woshipm.com/woshipm_def_head.jpg?imageView2/1/w/180/h/180/q/100" alt="" height="180" width="180" class="avatar">                </div>
        <a href="#" id="avatar-upload" class="button--upload" style="position: relative; z-index: 1;">点击上传</a>
        <a class="button--upload button--saveAvatar" href="#">保存头像</a>
        <div id="html5_1blp835fq1rca1la617591qcv7h3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 88px; left: 0px; width: 88px; height: 32px; overflow: hidden; z-index: 0;"><input id="html5_1blp835fq1rca1la617591qcv7h3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="image/jpeg,.jpg,.jpeg,image/gif,.gif,image/png,.png,image/bmp,.bmp"></div></div>
</div>
</div>
</div>
@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

