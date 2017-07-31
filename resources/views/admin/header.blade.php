<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>L-php-cms管理系统</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/admin-lte/2.3.8/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{ URL::asset('public/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.bootcss.com/admin-lte/2.3.8/css/skins/_all-skins.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('public/css/viralnova.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/plugins/zTree_v3-3.5.28/css/zTreeStyle/zTreeStyle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('public/plugins/uploadify/uploadify.css') }}">
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://apps.bdimg.com/libs/angular-ui-router/0.2.15/angular-ui-router.min.js"></script>
    <script src="http://apps.bdimg.com/libs/angular.js/1.4.6/angular-sanitize.min.js"></script>
    <script src="{{ URL::asset('public/plugins/uploadify/jquery.uploadify.min.js') }}"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('public/js/common/app.js') }}"></script>


</head>
<body class="skin-blue sidebar-mini hold-transition" ng-app="myApp">

<div class="wrapper">

    <!--头部-->
    <header class="main-header">
        <a href="/" class="logo" target="_blank">
            L-php-cms管理系统
        </a>

        <nav class="navbar navbar-static-top" role="navigation">

            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="/" target="_blank">
                          网站首页
                        </a>

                    </li>
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">你有 4 条信息</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ URL::asset('public/images/user2-160x160.jpg') }}"
                                                     class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                消息1
                                                <small><i class="fa fa-clock-o"></i> 5 分钟</small>
                                            </h4>
                                            <p>详细详情</p>
                                        </a>
                                    </li><!-- end message -->
                                    ...
                                </ul>
                            </li>
                            <li class="footer"><a href="#">查看所有信息</a></li>
                        </ul>
                    </li>

                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">你有 10 条通知</li>
                            <li>

                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="ion ion-ios-people info"></i> 通知1
                                        </a>
                                    </li>
                                    ...
                                </ul>
                            </li>
                            <li class="footer"><a href="#">查看所有通知</a></li>
                        </ul>
                    </li>

                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">你有 9 条任务</li>
                            <li>

                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <h3>
                                                任务1
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    ...
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">查看所有任务</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ URL::asset('public/images/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                            <span class="hidden-xs"> {{ $userInfo->email }} </span>
                        </a>
                        <ul class="dropdown-menu">

                            <li class="user-header">
                                <img src="{{ URL::asset('public/images/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                                <p>
                                    Kevin - Web Developer
                                    <small>WEB前端工程师，全栈开发尝试者</small>
                                </p>
                            </li>

                            <li class="user-body">
                                <div class="col-xs-4 text-center">
                                    <a href="#">项目1</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">项目2</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#">项目3</a>
                                </div>
                            </li>

                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">简介</a>
                                </div>
                                <div class="pull-right">
                                    <a href="javascript:void(0);" class="btn btn-default btn-flat" ng-click="logout()">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>



    <div class="main-sidebar">

        <div class="sidebar">

            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ URL::asset('public/images/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p> {{ $userInfo->email }} </p>

                    <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
                </div>
            </div>


            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="搜索">
                    <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
                </div>
            </form>


            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#"><i class="fa fa-dashboard"></i><span>仪表盘</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">


                        <li><a href="/admin/manage/panel/basic_info"> 基本信息</a></li>

                        <li><a href="/admin/manage/panel/modify_password"> 修改密码</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-users"></i><span>用户管理</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/manage/user_group_manage">用户组管理</a></li>
                        <li><a href="/admin/manage/user_manage">用户管理</a></li>
                        <li>
                            <a href="#"> 后台用户
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>

                            <ul class="treeview-menu">
                                <li><a href="/admin/manage/user_manage/admin_user_group_all"> 所有用户组</a></li>
                                <li>
                                    <a href="/admin/manage/user_manage/admin_user_group_add"> 添加用户组

                                    </a>

                                </li>
                                <li><a href="/admin/manage/user_manage/admin_user_all"> 所有用户</a></li>
                                <li><a href="/admin/manage/user_manage/admin_user_add"> 添加用户</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="#"> 前台用户
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/manage/user_manage/user_all"> 所有用户</a></li>
                                <li><a href="/admin/manage/user_manage/user_add"> 添加用户</a></li>

                            </ul>
                        </li>


                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-sticky-note-o"></i><span>文档管理</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"> 我的文档
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/manage/doc_manage/write">写文档</a></li>
                                <li><a href="/admin/manage/doc_manage/published">已发布</a></li>
                                <li><a href="/admin/manage/doc_manage/wait_for_verify">待审核</a></li>
                                <li><a href="/admin/manage/doc_manage/no_access">未通过</a></li>
                                <li><a href="/admin/manage/doc_manage/draft">草稿箱</a></li>
                                <li><a href="/admin/manage/doc_manage/recycle">回收站</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"> 分类管理
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/manage/doc_manage/category_all"> 所有分类</a></li>
                                <li><a href="/admin/manage/doc_manage/category_add">添加分类</a></li>


                            </ul>
                        </li>


                                <li><a href="/admin/manage/doc_manage/menu_manage">菜单管理</a></li>





                        <li><a href="/admin/manage/doc_manage/banner_manage"> 轮播管理</a></li>
                        <li><a href="/admin/manage/doc_manage/gather_manage"> 采集管理</a></li>
                        <li><a href="/admin/manage/doc_manage/tag_manage"> 标签管理</a></li>
                        <li><a href="/admin/manage/doc_manage/comment_manage"> 评论管理</a></li>
                        <li><a href="/admin/manage/doc_manage/message_manage"> 消息管理</a></li>




                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-file-photo-o"></i><span>文件管理</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"> 媒体管理
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/manage/file_manage/media_manage_upload">添加媒体</a></li>
                                <li><a href="/admin/manage/file_manage/media_manage_all">所有媒体</a></li>

                            </ul>
                        </li>

                        <li><a href="/admin/manage/file_manage/file_backup"> 文件备份</a></li>
                        <li><a href="/admin/manage/file_manage/file_recover"> 文件恢复</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-database"></i><span>数据管理</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"> 数据库管理
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/manage/data_manage/database_backup">数据库备份</a></li>
                                <li><a href="/admin/manage/data_manage/database_import">数据库导入</a></li>
                                <li><a href="/admin/manage/data_manage/database_compress">数据库压缩</a></li>
                                <li><a href="/admin/manage/data_manage/database_optimize">数据库优化</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> 缓存管理
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/manage/data_manage/clear_cache">缓存清理</a></li>
                                <li><a href="/admin/manage/data_manage/setting_cache">缓存设置</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"> 统计管理
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/manage/data_manage/count_statistics">数据统计</a></li>


                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-window-maximize"></i><span>定制中心</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="#"> 主题管理</a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/manage/customization_center/install_theme">安装主题</a></li>
                                <li><a href="/admin/manage/customization_center/local_theme">本地主题</a></li>
                                <li><a href="/admin/manage/customization_center/edit_template">模版编辑</a></li>
                            </ul>
                        </li>
                        <li><a href="/admin/manage/customization_center/plugin_manage"> 插件管理</a></li>
                        <li><a href="/admin/manage/customization_center/hook_manage"> 钩子管理</a></li>
                        <li><a href="/admin/manage/customization_center/ad_manage"> 广告管理</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-cog"></i><span>系统设置</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/manage/system_setting/system_log"> 系统日志</a></li>
                        <li><a href="/admin/manage/system_setting/website_setting"> 站点设置</a></li>
                        <li><a href="/admin/manage/system_setting/read_setting"> 阅读设置</a></li>
                        <li><a href="/admin/manage/system_setting/attachment_setting"> 附件设置</a></li>


                        <li><a href="/admin/manage/system_setting/social_login_setting"> 社交登录设置</a></li>
                        <li><a href="/admin/manage/system_setting/update_online"> 在线更新</a></li>
                        <li><a href="/admin/manage/system_setting/system_info"> 系统信息</a></li>
                        <li><a href="/admin/manage/system_setting/bug_feedback"> BUG反馈</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
    <!--主体-->


