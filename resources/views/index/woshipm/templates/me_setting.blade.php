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
        <span class="current">资料设置</span>
        <span class=""><a href="/me/setting/password">密码设置</a></span>
        <span class=""><a href="/me/setting/avatar">头像设置</a></span>
    </div>
    <form class="password-form" id="user-info-update">
        <p><label>邮箱</label><input type="text" disabled="true"  name="" ng-model="user.email"></p>
        <p><label>昵称</label><input type="text" name="nickname"  ng-model="user.nickname"></p>
        <p><label></label><input type="submit" value="更新资料"></p>
        <p class="user-info-message"></p>
    </form>
</div>
</div>
</div>
@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

