<aside id="" class="widget" ng-controller="hotDocCtrl" ng-init="getHotDoc()">
    <h3 class="widget-title">热门文章</h3>
    <ul class="hot-question-list">
        <li class="hot-question-item" ng-repeat="hot in hotList">
            <span class="num" ng-bind="$index+1"></span>
            <a href="@{{ hot.category }}/@{{ hot.id }}" target="_blank"
               class="link">@{{ hot.title }}</a>
        </li>

    </ul>
</aside>