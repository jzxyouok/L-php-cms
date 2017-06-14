@include('admin.header')
<div class="content-wrapper" ng-controller="adminUserGroupAdd">
@include('admin.modal.admin_user_group_add_modal')
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


<section class="content">
<div class="row">
<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">{{$item}}</h3>
    </div>

    <form class="form-horizontal"  onsubmit="return false;">
      <div class="box-body">
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">组名称</label>

          <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="name" placeholder="请输入组名称" ng-model="name" required>
          </div>
        </div>
        <div class="form-group">
          <label  class="col-sm-2 control-label">父级组</label>
          <div class="col-sm-10">
            <select class="form-control" name="pid" ng-model="pid" ng-options="x.id as x.name for x in pidOptions" required>
              <option value="">-- 请选择 --</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label  class="col-sm-2 control-label">状态</label>
          <div class="col-sm-10">
            <select class="form-control" name="status" ng-model="status" ng-options="x.id as x.name for x in statusOptions" required>
              <option value="">-- 请选择 --</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label  class="col-sm-2 control-label">描述</label>
          <div class="col-sm-10">
            <textarea name="remark" class="form-control" rows="3" placeholder="请输入描述信息" ng-model="remark"></textarea>
          </div>
        </div>
      </div>

      <div class="box-footer">

        <button type="submit" class="btn btn-primary pull-right" ng-click="addAdminUserGroup()">添加</button>
      </div>

    </form>
  </div>
</div>

</div>

</section>

</div>
@include('admin.footer')