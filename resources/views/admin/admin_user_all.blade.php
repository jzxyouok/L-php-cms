@include('admin.header')
<div class="content-wrapper" ng-controller="users">
@include('admin.modal.admin_user_all_edit_modal')
    @include('admin.modal.admin_user_all_avatar_modal')
    @include('admin.modal.admin_user_all_remove_modal')
    @include('admin.modal.admin_user_all_contribute_modal')
    <section class="content-header">
        <h1>
            {{$cms}}
            <small>{{$item}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
            <li><a href="#">{{$category }}</a></li>
            <li class="active">{{$item}}</li>
        </ol>
    </section>


    <section class="content" ng-app="myApp" ng-controller="users">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$item}}</h3>
                    </div>

                    <div class="box-body">
                        <table class="table table-hover  table-bordered table-striped">
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>用户名</th>
                                <th>状态</th>
                                <th>昵称</th>
                                <th>用户组</th>
                                <th>文章数量</th>
                                <th>注册时间</th>
                                <th>操作</th>
                            </tr>
                            <tr ng-repeat="x in data">
                                <td>@{{x.id }}</td>
                                <td> @{{x.username}}</td>
                                <td> @{{x.status }}</td>
                                <td> @{{x.nickname }}</td>
                                <td> @{{x.user_group }}</td>
                                <td>999</td>
                                <td>@{{x.created_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs btn-flat ng-hide" ng-click="startUsing(x.name)" ng-show="!x.status ">启用</button>
                                    <button type="button" class="btn btn-danger btn-xs btn-flat" ng-click="forbidden(x.name)" ng-hide="!x.status ">禁用</button>
                                    <button type="button" class="btn btn-primary btn-xs btn-flat"  data-toggle="modal" data-target="#admin_user_all_edit_modal">编辑</button>
                                    <button type="button" class="btn btn-danger btn-xs btn-flat" data-toggle="modal" data-target="#admin_user_all_remove_modal">删除</button>
                                    <button type="button" class="btn btn-info btn-xs btn-flat" data-toggle="modal" data-target="#admin_user_all_contribute_modal">投稿分类</button>
                                    <button type="button" class="btn btn-success btn-xs btn-flat" data-toggle="modal" data-target="#admin_user_all_avatar_modal">上传头像</button>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@include('admin.footer')