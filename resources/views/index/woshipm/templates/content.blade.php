@include('index.woshipm.templates.header')
@include('index.woshipm.templates.header_nav')
@include('index.woshipm.templates.search_overlay')
<div class="ajaxWrapper" ng-controller="contentCtrl">
    <div class="post-wrapper">
        <div class="contianer post-article is-showed">
            <div class="left-column">
                <div class="content--withBorder" ng-controller="contentCtrl" ng-init="getContent()">
                    <input type="hidden" id="content_id" name="" value="{{$content_id}}">
                    <article
                            class="single-article post type-post status-publish format-standard hentry category-active">
                        <header class="entry-header">
                            <h2 class="post-title" ng-bind="content.title"></h2>
                            <div class="post-meta">
                                <time ng-bind="content.published_date"></time>
                                <span class="post-views">
                                    <span class="iconfont icon-view"></span>
                                    阅读 <span ng-bind="content.view"></span>
                                </span>
                                <span class="post-comment-count">
                                    <span class="iconfont icon-pinglun"></span>
                                    评论 <span ng-bind=""></span>25
                                </span>
                                <span class="post-mark">
                                    <span class="iconfont icon-heart"></span>
                                    收藏 <span ng-bind="content.collection"></span>
                                </span>
                            </div>
                        </header>
                        <div class="post-top-ad">专为互联网人打造的365天成长计划，构建你的产品、运营知识体系，做个有竞争力的互联网人。
                            <a target="_blank" href="http://y0.cn/aM4DS">查看详情</a>
                        </div>
                        <div class="entry-content">
                            <blockquote ng-bind="content.abstract"></blockquote>
                            <div ng-bind-html="content.content | to_trusted"></div>
                        </div>
                    </article>
                    <div class="support-author">
                        <div class="support-title">写文章不容易，打个赏支持下作者吧</div>
                        <button class="button--pay">
                            <i class="iconfont icon-money1"></i><span>|</span>赞赏
                        </button>
                    </div>
                    <div class="post-actions">
                        <button title="收藏" class="button button--primary button--toggle button--recommend  "
                                ng-click="loginOut()">
                            <span class="iconfont icon-heart"></span>
                            <span class="button-label is-default">收藏</span>
                            <span class="button-label is-active">已收藏</span> |
                            <span class="count" ng-bind="content.collection"></span>
                        </button>
                        <button class="button button--primary button--postlike">
                            <span class="button-defaultState"></span>
                            <span class="button-activeState"></span>
                            <span class="iconfont icon-zan"></span>赞 |
                            <span class="count" ng-bind="content.like"></span>
                        </button>
                        <div class="u-floatRight share-actions">
                            <a class="share-weibo" target="_blank" href="">
                                <span class="iconfont icon-weibo"></span>分享到微博
                            </a>
                            <span class="share-wechat">
                                <span class="iconfont icon-wechat"></span>分享到微信
                                <div class="share-qrcode-image">
                                    <img src="/public/upload/image/api.png">
                                    <p>扫码分享到微信</p>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="post-tags">
                        <a href="http://www.woshipm.com/tag/%e5%9c%a8%e7%ba%bf%e7%9f%ad%e7%a7%9f" rel="tag">在线短租</a>
                        <a href="http://www.woshipm.com/tag/%e6%88%bf%e4%b8%9c%e5%b8%82%e5%9c%ba" rel="tag">房东市场</a>
                        <a href="http://www.woshipm.com/tag/%e7%9f%ad%e7%a7%9f%e5%b9%b3%e5%8f%b0" rel="tag">短租平台</a>
                        <a href="http://www.woshipm.com/tag/%e8%bf%90%e8%90%a5%e7%8a%b6%e5%86%b5" rel="tag">运营状况</a>
                    </div>
                    <div class="post-ads">
                        <a href="http://y0.cn/Lm82R" target="_blank">
                            <img src="/public/upload/image/ads.png">
                        </a>
                    </div>
                </div>
                @include('index.woshipm.templates.comment')
                @include('index.woshipm.templates.recommend_read')
            </div>
            <div class="right-column">
                <div class="sidebar">
                    @include('index.woshipm.templates.author_introduction')
                    @include('index.woshipm.templates.ad')
                    @include('index.woshipm.templates.content_hot_doc')
                </div>
            </div>
        </div>

    </div>
</div>
@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

