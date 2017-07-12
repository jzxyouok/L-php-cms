<div class="right-column">
    <div class="sidebar">
        <aside id="widget_notice-2" class="widget widget_widget_notice"><h3 class="widget-title">关注微信公众号</h3>
            <div class="widget-site-info">
                <div class="join-info">

                    <dl class="code-dl">
                        <dd>
                            <img src="/public/upload/image/pm-erweima.jpg">
                        </dd>
                        <dt>关注微信公众号</dt>
                    </dl>
                    <ul class="code-ul">
                        <li>QQ：1358180015</li>
                        <li>QQ：1358180015</li>
                        <li>QQ：1358180015</li>
                        <li>QQ：1358180015</li>
                        <li>QQ：1358180015</li>
                    </ul>
                </div>
                <div class="app-info"><a class="ios"
                                         href="https://itunes.apple.com/cn/app/ren-ren-dou-shi-chan-pin-jing/id998090859"
                                         target="_blank"><span class="iconfont icon-ios"></span>iOS版下载</a> <a
                            href="http://sj.qq.com/myapp/detail.htm?apkName=com.woshipm.news" target="_blank"
                            class="android"><span
                                class="iconfont icon-android"></span>Android版下载</a></div>
            </div>
        </aside>
        <div class="widget-ad">
            <a href="http://y0.cn/N1aeF" target="_blank"><img src="/public/upload/image/ad1.png" alt=""></a>
        </div>
        <div class="widget-ad">
            <a href="http://y0.cn/JHsWg" target="_blank"> <img src="/public/upload/image/ad2.jpg" alt=""> </a>
        </div>
        <div class="widget-ad">
            <a href="http://y0.cn/5GMYS" target="_blank"> <img src="/public/upload/image/ad3.jpg" alt=""> </a>
        </div>
        <aside id="writers-2" class="widget widget_writers">
            <h3 class="widget-title">推荐作者</h3>
            <ul class="widget-author-list">
                <li class="widget-author-list-item u-clearfix">
                    <a href="http://www.woshipm.com/u/57956" target="_blank">
                        <img src="/public/upload/image/author-avatar.jpg" alt="" height="50" width="50" class="avatar"></a>
                    <div class="widget-author-list-content">
                        <h4><a href="http://www.woshipm.com/u/57956" target="_blank">韩叙
                                <span class="iconfont icon-labelv"></span>
                            </a>
                        </h4>
                        <p>“秒嗨"运营负责人</p>
                    </div>
                </li>

            </ul>
        </aside>
        <aside id="widget_hot_posts-2" class="widget" ng-controller="hotDocCtrl" ng-init="getHotDoc()">
            <h3 class="widget-title">热门文章
                <span class="u-floatRight hot-nav">
                    <span class="is-active" data-action="bookmark">收藏</span>
                    <span data-action="comments">评论</span>
                    <span data-action="likes">点赞</span>
                </span>
            </h3>
            <ul class="hot-question-list widget-posts-list">

                <li class="hot-question-item" ng-repeat="hot in hotList">
                    <span class="num">1</span>
                    <a href="@{{ hot.category }}/@{{ hot.id }}" target="_blank"
                       class="link">@{{ hot.title }}</a>
                </li>


            </ul>
        </aside>

    </div>
</div>