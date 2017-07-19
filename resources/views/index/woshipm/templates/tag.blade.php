@include('index.woshipm.templates.header')
@include('index.woshipm.templates.header_nav')
@include('index.woshipm.templates.search_overlay')
<div class="contianer" ng-controller="tagCtrl" ng-init="getDocByTag()">
    <div class="left-column">
        <header class="tagPage-header">
            <div class="u-floatRight"></div>
            <h1><span class="iconfont icon-tag"></span>和 "<span id="tag_location">{{$tag}}</span>" 相关的文章</h1>
        </header>
        <div class="blockGroup homeGroup">
            <article class="u-clearfix stream-list-item" ng-repeat="x in docByTag">
                <div class="stream-list-image">
                    <a href="@{{ x.find_doc_by_tag.category }}/@{{ x.doc_id }}" target="_blank" title="@{{x.find_doc_by_tag.title}}">
                        <img ng-src="@{{ x.find_doc_by_tag.preview_img }}" width="202" height="145">
                    </a>
                    <div class="stream-list-category">
                        <a href="http://www.woshipm.com/category/pmd" rel="category tag" ng-bind="x.find_doc_by_tag.categorys.name"></a>
                    </div>
                </div>
                <div class="stream-list-content">
                    <h2 class="stream-list-title">
                        <a target="_blank" href="@{{ x.find_doc_by_tag.category }}/@{{ x.doc_id }}"
                           title="@{{ x.find_doc_by_tag.title }}" ng-bind="x.find_doc_by_tag.title"></a>
                    </h2>
                    <div class="stream-list-meta">
                        <span class="avatar-inline">
                            <a target="_blank" href="http://www.woshipm.com/u/250387">
                                <img ng-src="@{{ x.find_doc_by_tag.admin_user.avatar }}"
                                     alt="" height="32" width="32" class="avatar">
                            </a></span>
                        <span class="author"><a
                                    target="_blank" href="http://www.woshipm.com/u/250387"
                                    ng-bind="x.find_doc_by_tag.author"></a></span>
                        <span class="dot"></span>
                        <time ng-bind="x.find_doc_by_tag.published_date"></time>
                    </div>
                    <div class="stream-list-snipper" ng-bind="x.find_doc_by_tag.abstract"></div>
                    <footer class="stream-list-footer">
                        <span class="post-views"><span class="iconfont icon-view"></span>阅读 <span
                                    ng-bind="x.find_doc_by_tag.view"></span></span>
                        <span class="post-marks"><span class="iconfont icon-heart"></span>收藏 <span
                                    ng-bind="x.find_doc_by_tag.collection"></span></span>
                        <span class="post-likes"><span class="iconfont icon-zan"></span>被赞 <span
                                    ng-bind="x.find_doc_by_tag.like"></span></span>
                    </footer>
                </div>
            </article>
        </div>
        <div class="u-textAlignCenter posts-nav">
            <nav class="navigation pagination" role="navigation">
                <h2 class="screen-reader-text">文章导航</h2>
                <div class="nav-links"><span class="page-numbers current">1</span>
                    <a class="page-numbers" href="http://www.woshipm.com/tag/app/page/2">2</a>
                    <span class="page-numbers dots">…</span>
                    <a class="page-numbers" href="http://www.woshipm.com/tag/app/page/50">50</a>
                    <a class="next page-numbers" href="http://www.woshipm.com/tag/app/page/2">&gt;</a></div>
            </nav>
        </div>
    </div>
    <div class="right-column">
        <div class="sidebar">
            <aside id="widget_notice-3" class="widget widget_widget_notice"><h3 class="widget-title">加入圈子</h3>
                <div class="widget-site-info">
                    <div class="join-info">

                        <dl class="code-dl">
                            <dd>
                                <img src="http://image.woshipm.com/wp-files/2016/09/pm-erweima.jpg">
                            </dd>
                            <dt>关注微信公众号</dt>
                        </dl>
                        <ul class="code-ul">
                            <li>产品经理群：657509173</li>
                            <li>运营交流群：574484634</li>
                            <li>交互设计群：172428905</li>
                            <li>Axure交流群：172481083</li>
                            <li>数据分析交流：494113016</li>
                        </ul>
                    </div>
                    <div class="app-info"><a class="ios"
                                             href="https://itunes.apple.com/cn/app/ren-ren-dou-shi-chan-pin-jing/id998090859"
                                             target="_blank"><span class="iconfont icon-ios"></span>iOS版下载</a> <a
                                href="http://sj.qq.com/myapp/detail.htm?apkName=com.woshipm.news" target="_blank"
                                class="android"><span class="iconfont icon-android"></span>Android版下载</a></div>
                </div>
            </aside>
            <aside id="widget_hot_posts-2" class="widget widget_widget_hot_posts"><h3 class="widget-title">热门文章<span
                            class="u-floatRight hot-nav"><span class="is-active" data-action="bookmark">收藏</span> <span
                                data-action="comments">评论</span> <span data-action="likes">点赞</span></span></h3>
                <ul class="hot-question-list widget-posts-list">
                    <li class="hot-question-item"><span class="num">1</span><a
                                href="http://www.woshipm.com/pmd/718550.html" target="_blank" class="link">万字干货：手把手教你做需求管理</a>
                    </li>

                    <li class="hot-question-item"><span class="num">2</span><a
                                href="http://www.woshipm.com/operate/721918.html" target="_blank" class="link">4个月内，如何将一个濒死的社区论坛做火起来的？</a>
                    </li>

                    <li class="hot-question-item"><span class="num">3</span><a
                                href="http://www.woshipm.com/pd/719627.html" target="_blank" class="link">干货：电商产品体系之商户中台设计</a>
                    </li>

                    <li class="hot-question-item"><span class="num">4</span><a
                                href="http://www.woshipm.com/zhichang/720532.html" target="_blank" class="link">求职攻略：我拿到5个offer的裸辞求职之路</a>
                    </li>

                    <li class="hot-question-item"><span class="num">5</span><a
                                href="http://www.woshipm.com/pmd/720052.html" target="_blank" class="link">当我们接到一个新需求点时，应遵循的需求分析步骤有哪些？</a>
                    </li>

                    <li class="hot-question-item"><span class="num">6</span><a
                                href="http://www.woshipm.com/operate/716958.html" target="_blank" class="link">不是你的运营团队不行，是管理不行</a>
                    </li>

                    <li class="hot-question-item"><span class="num">7</span><a
                                href="http://www.woshipm.com/pd/718985.html" target="_blank" class="link">优惠券产品设计攻略：优惠券设计的四个要点</a>
                    </li>

                    <li class="hot-question-item"><span class="num">8</span><a
                                href="http://www.woshipm.com/ucd/718904.html" target="_blank" class="link">交互总结篇（一）：框架与布局</a>
                    </li>

                    <li class="hot-question-item"><span class="num">9</span><a
                                href="http://www.woshipm.com/ucd/714641.html" target="_blank" class="link">web表格设计攻略</a>
                    </li>

                    <li class="hot-question-item"><span class="num">10</span><a
                                href="http://www.woshipm.com/pmd/715900.html" target="_blank" class="link">需求管理：如何科学管理需求池内容？</a>
                    </li>
                </ul>
            </aside>
            <div class="widget-ad"><a href="http://y0.cn/N1aeF" target="_blank"><img
                            src="http://image.woshipm.com/wp-files/2017/02/UjN5YYIPZL8ArxWvL2zA.jpg" alt=""></a></div>
            <div class="widget-ad"><a href="http://y0.cn/TdHlL" target="_blank"> <img
                            src="http://image.woshipm.com/wp-files/2017/06/n14nvkbuQvm5bfF3jtzj.jpg" alt=""> </a></div>
            <div class="widget-ad"><a href="http://y0.cn/5GMYS" target="_blank"> <img
                            src="http://image.woshipm.com/wp-files/2017/06/gW1w4JmN2NHzRVXVoG8L.jpg" alt=""> </a></div>
        </div>
    </div>
</div>
@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

