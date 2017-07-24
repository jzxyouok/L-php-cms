@include('index.woshipm.templates.me_layout')
<div class="contianer user-column" >
    <div class="user-left">
        <ul id="menu-new_user_menu" class="user-menu">
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item ">
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
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom ">
                <a href="/me/setting/"><i class="iconfont icon-config"></i>资料设置</a>
            </li>
        </ul>
    </div>

    <div class="user-right">
        <div class="follow-nav">
            <span class="current">全部文章 (0)</span>
            <span class=""><a href="http://www.woshipm.com/me/posts/publish">已发布 (0)</a></span>
            <span class=""><a href="http://www.woshipm.com/me/posts/draft">草稿箱 (0)</a></span>
            <span class=""><a href="http://www.woshipm.com/me/posts/pending">待审核 (0)</a></span>
            <div class="u-floatRight cute"><a href="http://www.woshipm.com/writing">+发布文章</a></div>
        </div>
        <div class="user-main-content">
            <div class="user-post-note u-clearfix">
                <div class="post-notice">提示：如果稿件被删除，说明审核没有通过。审稿需要时间，请耐心等候。</div>
            </div>                 <div class="tag-list-empety">
                <div class="u-textAlignCenter"><span class="iconfont icon-empty"></span>
                    <p>您还没有任何草稿。</p>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

