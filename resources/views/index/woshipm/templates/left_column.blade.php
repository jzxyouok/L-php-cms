<div class="left-column">

    <div class="banner" ng-controller="bannerCtrl" ng-init="getBanner()">

        <div class="tabBox u-clearfix">

            <div class="swiper-container">
                <div class="swiper-wrapper" >
                    <div class="swiper-slide" ng-repeat="x in  mainBannerData"><a href=""><img ng-src="@{{x.img_src}}" alt=""><h3>@{{x.title}}</h3></a></div>

                  
                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="hd smallScroll">
                <ul class="">

                    <li>
                        <a href="http://www.woshipm.com/pmd/662334.html" target="_blank"
                           title="%= doc.document_title %>"><img
                                    src="resources/views/index/woshipm/assets/images/little1.gif"></a>
                        <h3><a href="http://www.woshipm.com/pmd/662334.html" target="_blank"
                               title="%= doc.document_title %>">%= doc.document_title %></a>
                        </h3></li>

                    <li>
                        <a href="http://www.woshipm.com/pmd/662334.html" target="_blank"
                           title="%= doc.document_title %>"><img
                                    src="resources/views/index/woshipm/assets/images/little2.gif"></a>
                        <h3><a href="http://www.woshipm.com/pmd/662334.html" target="_blank"
                               title="%= doc.document_title %>">%= doc.document_title %></a>
                        </h3></li>
                    <li>
                        <a href="http://www.woshipm.com/pmd/662334.html" target="_blank"
                           title="%= doc.document_title %>"><img
                                    src="resources/views/index/woshipm/assets/images/little3.gif"></a>
                        <h3><a href="http://www.woshipm.com/pmd/662334.html" target="_blank"
                               title="%= doc.document_title %>">%= doc.document_title %></a>
                        </h3></li>

                </ul>
            </div>
        </div>
    </div>
    <nav class="index-nav u-clearfix"><span class="current load-new-posts">最新文章</span><span class="load-hot-posts"
                                                                                            data-orderby="meta_value_num">7 日热文</span><span
                class="load-hot-questions">热门问答</span><span class=""><a href="http://www.woshipm.com/news"
                                                                        target="_blank">快报</a></span></nav>
    <section class="bigfa-ajax-wrapper">
        <div class="blockGroup homeGroup">
            <% documentByLimitCurrentPage.forEach(function (doc) { %>
            <article class="u-clearfix stream-list-item sticky" data-id="663947">
                <div class="stream-list-image">
                    <a href="/content/%= doc.document_title %>" target="_blank" title="%= doc.document_title %>"><img
                                src="#" width="202" height="145"></a>
                    <div class="stream-list-category"><a href="http://www.woshipm.com/category/chuangye"
                                                         rel="category tag">%= doc.document_category %></a>
                    </div>
                </div>
                <div class="stream-list-content">
                    <h2 class="stream-list-title"><a target="_blank" href="/content/%= doc.document_title %>"
                                                     title="%= doc.document_title %>">%= doc.document_title %></a><span
                                class="iconfont icon-hot"></span></h2>
                    <div class="stream-list-meta">
                <span class="avatar-inline"><a target="_blank" href="http://www.woshipm.com/u/31217"><img
                                src="#" alt="" height="32" width="32"
                                class="avatar"></a></span><span class="author" data-id="31217"><a target="_blank"
                                                                                                  href="http://www.woshipm.com/u/31217">辩手李慕阳</a></span>
                        <span class="dot"></span>
                        <time datetime="2017-05-16T09:34:00+08:00">%= doc.document_publish_date %></time>
                    </div>
                    <div class="stream-list-snipper">
                        %= doc.document_abstract %>
                    </div>
                    <footer class="stream-list-footer">
                        <span class="post-views"><span class="iconfont icon-view"></span>阅读 %= doc.document_view %></span>
                        <span class="post-marks"><span class="iconfont icon-heart"></span>收藏 %= doc.document_view %></span>
                        <span class="post-likes"><span class="iconfont icon-zan"></span>被赞%= doc.document_view %></span>
                    </footer>
                </div>
            </article>
            <% }) %>
            <!--广告-->
            <article class="u-clearfix stream-list-item stream-list-topic"><a target="_blank"
                                                                              href="http://www.woshipm.com/topic/cpfx">
                    <div class="stream-img-pad"
                         style="background-image: url(http://image.woshipm.com/wp-files/2017/03/4pqLtfWvgOZ0Zsxn8j2y.jpg!/both/280x180);">
                        <div class="mark">专题</div>
                        <div class="info">
                            <div class="title">产品分析报告撰写指南</div>
                            <div class="desc">产品经理，除了会写竞品分析，还要会写产品分析。</div>
                            <div class="stream-topic-meta">26406人已学习<span class="middotDivider"></span>22篇文章</div>
                        </div>
                    </div>
                </a><a target="_blank" href="http://www.woshipm.com/topic/xm">
                    <div class="stream-img-pad"
                         style="background-image: url(http://image.woshipm.com/wp-files/2017/05/4NhQFjuoq2NXQOryduLb.jpg!/both/280x180);">
                        <div class="mark">专题</div>
                        <div class="info">
                            <div class="title">产品项目总结</div>
                            <div class="desc">透过别人的项目总结，学习项目管理项目设计项目流程经验。</div>
                            <div class="stream-topic-meta">11737人已学习<span class="middotDivider"></span>30篇文章</div>
                        </div>
                    </div>
                </a><a target="_blank" href="http://www.woshipm.com/topic/app">
                    <div class="stream-img-pad"
                         style="background-image: url(http://image.woshipm.com/wp-files/2017/04/0rOGLNOzMKPy6uOIZNdw.jpg!/both/280x180);">
                        <div class="mark">专题</div>
                        <div class="info">
                            <div class="title">APP运营推广实操指南</div>
                            <div class="desc">做产品难，做运营更难，做APP运营推广难上加难。</div>
                            <div class="stream-topic-meta">12792人已学习<span class="middotDivider"></span>26篇文章</div>
                        </div>
                    </div>
                </a></article>
            <!--活动-->
            <article class="stream-list-item">
                <div class="stream-list-image">
                    <a href="http://www.woshipm.com/active/666236.html" target="_blank"><img
                                src="#" width="202"
                                height="145"></a>
                </div>
                <div class="stream-list-content">
                    <h2 class="stream-list-title"><a target="_blank" href="http://www.woshipm.com/active/666236.html"
                                                     title="2017UBDC：从DI到应用，激活数据价值">2017UBDC：从DI到应用，激活数据价值</a></h2>
                    <div class="stream-list-snipper">
                        5月23日，2017UBDC全域大数据峰会将在北京召开。本届大会以“DI的力量”为主题，将从趋势+实践两个层面解析“DI数据智能”的深远价值。大会共设五大会场：DI主会场、数据化...
                    </div>
                    <footer class="stream-list-footer stream-list-footer--event">
                        <div class="event-time"><span class="iconfont icon-time"></span>2017-05-23 09:00-12:00</div>
                        <div class="event-location"><span class="iconfont icon-location"></span>北京市朝阳区建国路93号</div>
                        <a href="https://at.umeng.com/Lv8b4n" class="event-status" target="_blank">我要报名</a></footer>
                </div>
            </article>
            <article class="stream-list-item">
                <div class="stream-list-image"><a href="http://www.woshipm.com/active/666236.html" target="_blank"><img
                                src="#" width="202" height="145"></a>
                </div>
                <div class="stream-list-content"><h2 class="stream-list-title"><a target="_blank"
                                                                                  href="http://www.woshipm.com/active/666236.html">2017UBDC：从DI到应用，激活数据价值</a>
                    </h2>
                    <div class="stream-list-snipper">
                        5月23日，2017UBDC全域大数据峰会将在北京召开。本届大会以“DI的力量”为主题，将从趋势+实践两个层面解析“DI数据智能”的深远价值。大会共设五大会场：DI主会场、数据化...
                    </div>
                    <footer class="stream-list-footer stream-list-footer--event">
                        <div class="event-time"><span class="iconfont icon-time"></span>2017-05-23 09:00-12:00</div>
                        <div class="event-location"><span class="iconfont icon-location"></span>北京市朝阳区建国路93号</div>
                        <a href="https://at.umeng.com/Lv8b4n" class="event-status" target="_blank">我要报名</a></footer>
                </div>
            </article>

        </div>
        <div class="loadmore loadmore-home u-textAlignCenter" data-paged="2">加载更多</div>
    </section>
</div>