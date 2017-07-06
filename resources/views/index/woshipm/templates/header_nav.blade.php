<header id="header-nav" class="site-header u-clearfix" ng-controller="headerCtrl" ng-init="getMenu()">
    <div class="contianer">
        <a href="/">
            <img class="logo" src="/resources/views/index/woshipm/assets/images/logo.png">
        </a>
        <div class="header-block">
            <nav class="header-nav">
                <ul id="" class="subnav-ul layoutSingleColumn layoutSingleColumn--wide">
                    <li id="" ng-repeat="x in topMenu"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home"
                        ng-class="{'menu-item-has-children': x.has_childen }">
                        <a href="@{{ x.url }}" ng-mouseenter="mouse = true"
                           ng-mouseleave="mouse = false">@{{ x.name }}</a>
                        <ul class="sub-menu" ng-show="x.has_childen && mouse" ng-mouseenter="mouse = true"
                            ng-mouseleave="mouse = false">

                            <li id="" class="menu-item menu-item-type-taxonomy menu-item-object-category" ng-repeat="xx in x.childen track by $index">
                                <a href="@{{ xx.url }}">@{{ xx.name }}</a>
                            </li>


                        </ul>
                    </li>


                </ul>
            </nav>
        </div>
        <div class="header-block u-floatRight">
            <a class="header-action-item tougao" data-action="popLogin" href="http://www.woshipm.com/#">投稿</a>
            <a href="javascript:void(0);" class="show-search"><span class="iconfont icon-search"></span></a>
            <a class="header-action-item" ng-click="loginOut()"
               href="javascript:void(0);">注册/登录</a>
            <a target="_blank" href="http://www.woshipm.com/me/message" class="message--link u-marginRight10"><span
                        class="svgIcon svgIcon--bell svgIcon--25px">
<svg class="svgIcon-use" width="25" height="25" viewBox="-293 409 25 25">
<path d="M-273.327 423.67l-1.673-1.52v-3.646a5.5 5.5 0 0 0-6.04-5.474c-2.86.273-4.96 2.838-4.96 5.71v3.41l-1.68 1.553c-.204.19-.32.456-.32.734V427a1 1 0 0 0 1 1h3.49a3.079 3.079 0 0 0 3.01 2.45 3.08 3.08 0 0 0 3.01-2.45h3.49a1 1 0 0 0 1-1v-2.59c0-.28-.12-.55-.327-.74zm-7.173 5.63c-.842 0-1.55-.546-1.812-1.3h3.624a1.92 1.92 0 0 1-1.812 1.3zm6.35-2.45h-12.7v-2.347l1.63-1.51c.236-.216.37-.522.37-.843v-3.41c0-2.35 1.72-4.356 3.92-4.565a4.353 4.353 0 0 1 4.78 4.33v3.645c0 .324.137.633.376.85l1.624 1.477v2.373z"></path>
</svg>
</span></a>
            <div class="user-avatar">
                <a href="http://www.woshipm.com/u/288457" target="_blank"><img
                            src="https://static.woshipm.com/woshipm_def_head.jpg?imageView2/1/w/30/h/30/q/100" alt=""
                            height="30" width="30" class="avatar"></a>
                <div class="user-top-nav">
                    <h4 class="user-name">不知道取什么昵称</h4>
                    <ul>
                        <li><a href="http://www.woshipm.com/me/posts">我的文章</a></li>
                        <li><a href="http://www.woshipm.com/me/comments">我的评论</a></li>
                        <li><a href="http://www.woshipm.com/me/bookmarks">我的收藏</a></li>
                        <li><a href="http://www.woshipm.com/me/subscribe">我的订阅</a></li>
                        <li><a href="http://www.woshipm.com/u/288457">我的主页</a></li>
                        <li><a href="http://www.woshipm.com/me/setting">资料修改</a></li>
                    </ul>
                    <div class="user-logout">
                        <a href="http://www.woshipm.com/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fwww.woshipm.com%2F&amp;_wpnonce=4d20ee5531 ">退出登录</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>