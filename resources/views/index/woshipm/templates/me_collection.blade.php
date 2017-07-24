@include('index.woshipm.templates.me_layout')
<div class="contianer user-column" >
    <div class="user-left">
        <ul id="menu-new_user_menu" class="user-menu">
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom ">
                <a href="/me/post"><i class="iconfont icon-list"></i>我的文章</a>
            </li>
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom  current-menu-item">
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
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom ">
                <a href="/me/setting/"><i class="iconfont icon-config"></i>资料设置</a>
            </li>
        </ul>
    </div>

<div class="user-right">
    <div class="follow-nav">
        <span class="">我的收藏 (<em class="user-bookmark-count">1</em>)</span>
    </div>
    <div>
        <div class="user-main-content">
            <div class="tag-list-empety">
                <div class="u-textAlignCenter">
                    <span class="iconfont icon-empty"></span>
                    <p>您还没有收藏任何文章</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

