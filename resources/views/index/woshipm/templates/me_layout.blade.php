@include('index.woshipm.templates.header')
@include('index.woshipm.templates.header_nav')
@include('index.woshipm.templates.search_overlay')
<div id="" ng-controller="meCtrl" ng-init="getUserInfo()">
<div class="author-page-header user-page-config">
    <div class="contianer">
        <div class="author-page-info">
            <img src="{{ URL::asset('resources/views/index/woshipm/assets/images/def_head.jpg') }}" alt=""
                 height="120" width="120" class="avatar">
            <h3 class="auhtor-title" ng-bind="user.nickname"></h3>
            <p></p>
            <div class="user-actions">
                <a class="button button--dingyue" href="/user/@{{user.id}}" target="_blank">我的主页</a>
            </div>
        </div>
        <div class="setting-page-user-meta"><span>0 篇<i>文章</i></span>
            <span>0 次<i>阅读</i></span>
            <span> 0 人<i>订阅量</i> </span>
            <span> 0 元<i>收益</i> </span>
        </div>
    </div>
</div>
