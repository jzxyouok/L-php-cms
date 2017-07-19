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
            <span class="num" ng-bind="$index+1"></span>
            <a href="@{{ hot.category }}/@{{ hot.id }}" target="_blank"
               class="link" ng-bind="hot.title"></a>
        </li>


    </ul>
</aside>