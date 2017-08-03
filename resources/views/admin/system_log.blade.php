@include('admin.header')
<div class="content-wrapper" ng-controller="systemLogCtrl" ng-init="getSystemLog()">
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
  <section class="content"  >
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{$item}}</h3>
          </div>
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover  table-bordered table-striped">
              <tr>
                <th style="width: 46px">序号</th>
                <th>时间</th>
                <th>操作</th>
                <th>ip</th>
                <th>日志类型</th>
                <th>方式</th>
                <th>操作</th>
              </tr>

              <tr ng-repeat="x in data">
                <td ng-bind="x.id"></td>
                <td ng-bind="x.phone"> </td>
                <td ng-bind="x.email"> </td>

                <td ng-bind="x.nickname"></td>
                <td ng-bind="x.user_group_id"></td>
                <td ng-bind="x.status"></td>

                <td>
                  <button type="button" class="btn btn-success btn-xs btn-flat ng-hide" ng-click="startUsing(x.id)" ng-show="x.status=='1' ? false :true ">启用</button>
                  <button type="button" class="btn btn-danger btn-xs btn-flat" ng-click="forbidden(x.id)" ng-show="x.status=='1' ? true : false">禁用</button>
                  <button type="button" class="btn btn-primary btn-xs btn-flat"  data-toggle="modal" data-target="#user_manage_edit_modal" ng-click="editUser(x)">编辑</button>
                  <button type="button" class="btn btn-danger btn-xs btn-flat" data-toggle="modal" data-target="#user_manage_remove_modal" ng-click="removeUser(x)">删除</button>

                  <button type="button" class="btn btn-info btn-xs btn-flat" data-toggle="modal" data-target="#user_manage_avatar_modal" ng-click="uploadAvatar(x)">上传头像</button>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@include('admin.footer')