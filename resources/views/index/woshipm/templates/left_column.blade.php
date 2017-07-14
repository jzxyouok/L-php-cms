<div class="left-column">
    <div class="banner" ng-controller="bannerCtrl" ng-init="getBanner()">
        <div class="tabBox u-clearfix">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" ng-repeat="x in  mainBannerData">
                        <a href="">
                            <img ng-src="@{{x.img_src}}" alt="">
                            <h3>@{{x.title}}</h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="hd smallScroll">
                <ul class="">

                    <li ng-repeat="little in littleBannerData">
                        <a href="http://www.woshipm.com/pmd/662334.html" target="_blank"
                           title="@{{little.title}}">
                            <img ng-src="@{{little.img_src}}">
                        </a>
                        <h3>
                            <a href="http://www.woshipm.com/pmd/662334.html" target="_blank"
                               title="@{{little.title}}" ng-bind="little.title"></a>
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="index-nav u-clearfix">
        <span class="current load-new-posts">最新文章</span>
        <span class="load-hot-posts" data-orderby="meta_value_num">7 日热文</span>
        <span class="load-hot-questions">热门问答</span>
        <span class=""><a href="http://www.woshipm.com/news" target="_blank">专题页</a></span>
    </nav>
    <section class="bigfa-ajax-wrapper" ng-controller="indexListCtrl" ng-init="getDocList()">
        <div class="blockGroup homeGroup">

            <article class="u-clearfix stream-list-item sticky" ng-repeat="x in indexDocList">
                <div class="stream-list-image">
                    <a href="@{{ x.category }}/@{{ x.id }}" target="_blank" title="@{{ x.title }}">
                        <img ng-src="@{{ x.preview_img }}" width="202" height="145"></a>
                    <div class="stream-list-category">
                        <a href="http://www.woshipm.com/category/chuangye" rel="category tag">@{{ x.category }}</a>
                    </div>
                </div>

                <div class="stream-list-content">
                    <h2 class="stream-list-title">
                        <a target="_blank" href="@{{ x.category }}/@{{ x.id }}"
                           title="@{{ x.title }}">@{{ x.title }}</a>
                        <span class="iconfont icon-hot" ng-if="x.hot==='是' ? true : false"></span>
                    </h2>
                    <div class="stream-list-meta">
                <span class="avatar-inline">
                    <a target="_blank" href="http://www.woshipm.com/u/31217">
                        <img ng-src="@{{ x.admin_user.avatar }}" alt="" height="32" width="32" class="avatar">
                    </a>
                </span>
                        <span class="author" data-id="31217">
                            <a target="_blank" href="http://www.woshipm.com/u/31217">@{{ x.author }}</a></span>
                        <span class="dot"></span>
                        <time>@{{ x.published_date }}</time>
                    </div>
                    <div class="stream-list-snipper">
                        @{{ x.abstract }}
                    </div>
                    <footer class="stream-list-footer">
                        <span class="post-views"><span class="iconfont icon-view"></span>阅读@{{ x.view }}</span>
                        <span class="post-marks"><span class="iconfont icon-heart"></span>收藏 @{{ x.collection }}</span>
                        <span class="post-likes"><span class="iconfont icon-zan"></span>被赞@{{ x.like }}</span>
                    </footer>
                </div>
            </article>
        </div>
        <div class="loadmore loadmore-home">加载更多</div>
    </section>
</div>