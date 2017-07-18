@include('index.woshipm.templates.header')
@include('index.woshipm.templates.header_nav')
@include('index.woshipm.templates.search_overlay')
<div class="contianer u-clearfix" ng-controller="categoryCtrl" ng-init="getCategory()">
    <div class="cate-banner">
        <section class="cover cover--grid4">
            <article class="cover-story">
                <div class="cover-image"
                     style="background-image: url(http://image.woshipm.com/wp-files/2017/06/17bkjXm995Vvkv5l9V1z.jpg);"></div>
                <a class="cover-trigger" target="_blank" href="http://www.woshipm.com/pmd/701835.html"></a>
                <header class="cover-header">
                    <h2 class="cover-title"><a target="_blank" href="http://www.woshipm.com/pmd/701835.html">社交产品怎样戳中用户的心？</a>
                    </h2>
                    <div class="cover-meta"><a target="_blank" href="http://www.woshipm.com/u/284604">丢丢聊产品</a><span
                                class="dot"></span>阅读 6.5k
                    </div>
                </header>
            </article>
            <article class="cover-story">
                <div class="cover-image"
                     style="background-image: url(http://image.woshipm.com/wp-files/2017/07/VtDS5PDPBuIqnNOL88QX.png);"></div>
                <a class="cover-trigger" target="_blank" href="http://www.woshipm.com/pmd/714322.html"></a>
                <header class="cover-header">
                    <h2 class="cover-title"><a target="_blank" href="http://www.woshipm.com/pmd/714322.html">VR产品经理怎么讲好故事？5个探索者给出了方向</a>
                    </h2>
                    <div class="cover-meta"><a target="_blank" href="http://www.woshipm.com/u/289373">fanna211</a><span
                                class="dot"></span>阅读 3.4k
                    </div>
                </header>
            </article>
            <article class="cover-story">
                <div class="cover-image"
                     style="background-image: url(http://image.woshipm.com/wp-files/2017/06/mETEY8RQUSIYe53yjdzN.jpg);"></div>
                <a class="cover-trigger" target="_blank" href="http://www.woshipm.com/pmd/703418.html"></a>
                <header class="cover-header">
                    <h2 class="cover-title"><a target="_blank" href="http://www.woshipm.com/pmd/703418.html">作为P2P产品经理，你应该知道的债权转让</a>
                    </h2>
                    <div class="cover-meta"><a target="_blank" href="http://www.woshipm.com/u/56765">张小璋</a><span
                                class="dot"></span>阅读 5.9k
                    </div>
                </header>
            </article>
            <article class="cover-story">
                <div class="cover-image"
                     style="background-image: url(http://image.woshipm.com/wp-files/2017/06/TXHiCMXZKtQCJtpoEguI.jpg);"></div>
                <a class="cover-trigger" target="_blank" href="http://www.woshipm.com/pmd/697983.html"></a>
                <header class="cover-header">
                    <h2 class="cover-title"><a target="_blank" href="http://www.woshipm.com/pmd/697983.html">产品经理的跨域：全栈是一个美丽的谎言</a>
                    </h2>
                    <div class="cover-meta"><a target="_blank" href="http://www.woshipm.com/u/107640">枯叶</a><span
                                class="dot"></span>阅读 1.6万
                    </div>
                </header>
            </article>
        </section>
    </div>
    <div class="left-column">
        <header class="tagPage-header">
            <h1>{{$category}}</h1>
        </header>
        <div class="blockGroup homeGroup">
            <article class="u-clearfix stream-list-item" ng-repeat="x in docByCategory">
                <div class="stream-list-image">
                    <a href="@{{ x.category }}/@{{ x.id }}" target="_blank" title="@{{x.title}}">
                        <img ng-src="@{{ x.preview_img }}" width="202" height="145">
                    </a>
                    <div class="stream-list-category"><a href="http://www.woshipm.com/category/pmd" rel="category tag"
                                                         ng-bind="x.category"></a>
                    </div>
                </div>
                <div class="stream-list-content">
                    <h2 class="stream-list-title">
                        <a target="_blank" href="@{{ x.category }}/@{{ x.id }}"
                           title="@{{ x.title }}" ng-bind="x.title"></a>
                    </h2>
                    <div class="stream-list-meta">
                        <span class="avatar-inline">
                            <a target="_blank" href="http://www.woshipm.com/u/250387">
                                <img ng-src="@{{ x.admin_user.avatar }}"
                                     alt="" height="32" width="32" class="avatar">
                            </a></span>
                        <span class="author"><a
                                    target="_blank" href="http://www.woshipm.com/u/250387" ng-bind="x.author"></a></span>
                        <span class="dot"></span>
                        <time ng-bind="x.published_date"></time>
                    </div>
                    <div class="stream-list-snipper" ng-bind="x.abstract"></div>
                    <footer class="stream-list-footer">
                        <span class="post-views"><span class="iconfont icon-view"></span>阅读 <span ng-bind="x.view"></span></span>
                        <span class="post-marks"><span class="iconfont icon-heart"></span>收藏 <span ng-bind="x.collection"></span></span>
                        <span class="post-likes"><span class="iconfont icon-zan"></span>被赞 <span ng-bind="x.like"></span></span>
                    </footer>
                </div>
            </article>

        </div>
        <div class="u-textAlignCenter posts-nav">

            <nav class="navigation pagination" role="navigation">
                <h2 class="screen-reader-text">文章导航</h2>
                <div class="nav-links"><a class="prev page-numbers" href="http://www.woshipm.com/category/pmd/">&lt;</a>
                    <a class="page-numbers" href="http://www.woshipm.com/category/pmd/">1</a>
                    <span class="page-numbers current">2</span>
                    <a class="page-numbers" href="http://www.woshipm.com/category/pmd/page/3">3</a>
                    <span class="page-numbers dots">…</span>
                    <a class="page-numbers" href="http://www.woshipm.com/category/pmd/page/408">408</a>
                    <a class="next page-numbers" href="http://www.woshipm.com/category/pmd/page/3">&gt;</a></div>
            </nav>
        </div>
    </div>
    <div class="right-column">
        <div class="sidebar">
            <aside id="tags-2" class="widget widget_tags"><h3 class="widget-title">热门标签</h3>
                <div class="widget-tag-list"><a href="http://www.woshipm.com/tag/app" target="_blank">app</a><a
                            href="http://www.woshipm.com/tag/o2o" target="_blank">O2O</a><a
                            href="http://www.woshipm.com/tag/prd" target="_blank">PRD</a><a
                            href="http://www.woshipm.com/tag/%e4%ba%92%e8%81%94%e7%bd%91%e9%87%91%e8%9e%8d"
                            target="_blank">互联网金融</a><a
                            href="http://www.woshipm.com/tag/%e4%ba%a4%e4%ba%92%e8%ae%be%e8%ae%a1"
                            target="_blank">交互设计</a><a href="http://www.woshipm.com/tag/rp" target="_blank">原型设计</a><a
                            href="http://www.woshipm.com/tag/%e5%95%86%e4%b8%9a%e6%a8%a1%e5%bc%8f"
                            target="_blank">商业模式</a><a
                            href="http://www.woshipm.com/tag/%e6%95%b0%e6%8d%ae%e5%88%86%e6%9e%90"
                            target="_blank">数据分析</a><a href="http://www.woshipm.com/tag/ue" target="_blank">用户体验</a><a
                            href="http://www.woshipm.com/tag/%e7%ab%9e%e5%93%81%e5%88%86%e6%9e%90"
                            target="_blank">竞品分析</a><a href="http://www.woshipm.com/tag/%e8%bf%90%e8%90%a5"
                                                       target="_blank">运营</a><a
                            href="http://www.woshipm.com/tag/%e9%9c%80%e6%b1%82%e5%88%86%e6%9e%90"
                            target="_blank">需求分析</a></div>
            </aside>
            <div class="widget-ad"><a href="http://y0.cn/N1aeF" target="_blank"><img
                            src="http://image.woshipm.com/wp-files/2017/05/WE8RfIvnmganLlRq40xC.gif" alt=""></a></div>
            <div class="widget-ad"><a href="http://y0.cn/TdHlL" target="_blank"> <img
                            src="http://image.woshipm.com/wp-files/2017/02/uFvoT70ipUeszC1lkgJ0.png" alt=""> </a></div>
            <div class="widget-ad"><a href="https://ke.qq.com/course/194507" target="_blank"> <img
                            src="http://image.woshipm.com/wp-files/2017/06/Q1CJICv8HZNeCr5FKBPN.jpg" alt=""> </a></div>
            <aside id="hot_posts-3" class="widget widget_hot_posts"><h3 class="widget-title">热门文章</h3>
                <ul class="hot-post-list">
                    <li class="hot-post-item">
                        <div class="hot-post-image"><a href="http://www.woshipm.com/pmd/718550.html"
                                                       target="_blank"><img
                                        src="http://image.woshipm.com/wp-files/2017/07/VJk4FEqGbnOcgeXXMo52.png!widget65"
                                        width="95" height="65"></a></div>
                        <h3 class="hot-post-title"><a target="_blank" href="http://www.woshipm.com/pmd/718550.html">万字干货：手把手教你做需求管理</a>
                        </h3>
                        <div class="hot-post-meta"><a target="_blank" href="http://www.woshipm.com/u/48739">wideplum</a>
                        </div>
                    </li>
                    <li class="hot-post-item">
                        <div class="hot-post-image"><a href="http://www.woshipm.com/pmd/720052.html"
                                                       target="_blank"><img
                                        src="http://image.woshipm.com/wp-files/2017/07/pFG8xKaUUGXhmOVlHSyp.png!widget65"
                                        width="95" height="65"></a></div>
                        <h3 class="hot-post-title"><a target="_blank" href="http://www.woshipm.com/pmd/720052.html">当我们接到一个新需求点时，应遵循的需求分...</a>
                        </h3>
                        <div class="hot-post-meta"><a target="_blank" href="http://www.woshipm.com/u/250387">小麻雀</a>
                        </div>
                    </li>
                    <li class="hot-post-item">
                        <div class="hot-post-image"><a href="http://www.woshipm.com/pmd/711057.html"
                                                       target="_blank"><img
                                        src="http://image.woshipm.com/wp-files/2017/07/Cq5o1g7CDBiqAso3MHLS.png!widget65"
                                        width="95" height="65"></a></div>
                        <h3 class="hot-post-title"><a target="_blank" href="http://www.woshipm.com/pmd/711057.html">你自以为知道？产品调研之功能调研的基础方法</a>
                        </h3>
                        <div class="hot-post-meta"><a target="_blank"
                                                      href="http://www.woshipm.com/u/282708">jasonnine</a></div>
                    </li>
                    <li class="hot-post-item">
                        <div class="hot-post-image"><a href="http://www.woshipm.com/pmd/715900.html"
                                                       target="_blank"><img
                                        src="http://image.woshipm.com/wp-files/2017/07/ahIrIWegt280Xu55QoUr.jpg!widget65"
                                        width="95" height="65"></a></div>
                        <h3 class="hot-post-title"><a target="_blank" href="http://www.woshipm.com/pmd/715900.html">需求管理：如何科学管理需求池内容？</a>
                        </h3>
                        <div class="hot-post-meta"><a target="_blank" href="http://www.woshipm.com/u/40201">谭喵</a></div>
                    </li>
                    <li class="hot-post-item">
                        <div class="hot-post-image"><a href="http://www.woshipm.com/pmd/717704.html"
                                                       target="_blank"><img
                                        src="http://image.woshipm.com/wp-files/2017/07/anXNKgYCKiYO3b5THCp1.png!widget65"
                                        width="95" height="65"></a></div>
                        <h3 class="hot-post-title"><a target="_blank" href="http://www.woshipm.com/pmd/717704.html">数据模型落地产品需求｜数据产品经理的门槛...</a>
                        </h3>
                        <div class="hot-post-meta"><a target="_blank" href="http://www.woshipm.com/u/160566">Kevin</a>
                        </div>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
</div>
@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

