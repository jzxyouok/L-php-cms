@include('admin.header')
<div class="content-wrapper" ng-controller="mediaManage">

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


  <section class="content" >
    <div class="row">
      <div class="col-md-12">
        <div class="panel">
          <a href="" style="    display: inline-block;margin-left: 10px;"><i class="fa fa-list"></i></a> <a href="" style="    display: inline-block;margin:0 10px;"><i class="fa fa-th"></i></a>
          <a href="" role="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#banner_add_modal"><span class="fa fa-plus-square" aria-hidden="true">&nbsp;</span>添加媒体</a>


            <select class="form-control input-sm ng-pristine ng-untouched ng-valid" style="width: 200px;display: inline-block;margin-left: 10px;" name="status" ng-model="status" ng-options="x.id as x.name for x in statusOptions">
              <option value="">-- 所有多媒体项目 --</option>
            </select>
          <select class="form-control input-sm ng-pristine ng-untouched ng-valid" style="width: 200px;display: inline-block;margin-left: 10px;" name="status" ng-model="status" ng-options="x.id as x.name for x in statusOptions">
            <option value="">-- 全部时间 --</option>
          </select>
          <a href="" role="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#banner_add_modal">筛选</a>
          <div class="pull-right">

            <form action="/admin/manage/contentList" name="searchForm" class="ng-pristine ng-valid">
              <div class="input-group">
                <input type="text" name="searchKey" id="searchInput" class="form-control input-sm pull-right" style="width: 200px;" placeholder="请输入需要查询的关键字" value="">
                <div class="input-group-btn" style="width: auto;">
                  <button class="btn btn-sm btn-default" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7">
          <select class="form-control input-sm ng-pristine ng-untouched ng-valid" style="width: 200px;display: inline-block;    margin-bottom: 10px;" name="status" ng-model="status" ng-options="x.id as x.name for x in statusOptions">
            <option value="">-- 批量操作 --</option>
            <option value="">-- 永久删除 --</option>
          </select>
          <a href="" role="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#banner_add_modal">筛选</a>
          </div>
        </div>
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">{{$item}}</h3>
          </div>

          <form class="form-horizontal"  onsubmit="return false;">
            <div class="box-body table-responsive no-padding">
              <table class="table table-bordered  table-striped">
                <tr>
                  <th style="width: 10px"><input type="checkbox" class="minimal"></th>
                  <th>文件</th>
                  <th>作者</th>
                  <th>上传至</th>
                  <th>日期</th>


                  <th>操作</th>
                </tr>
                <tr ng-repeat="x in data">
                  <td><input type="checkbox" class="minimal"></td>
                  <td>@{{x.name}}</td>
                  <td>@{{x.slug}}</td>
                  <td>@{{x.parent}}</td>
                  <td>@{{x.order}}</td>


                  <td>
                    <button type="button" class="btn btn-primary btn-xs btn-flat" data-toggle="modal"
                            data-target="#category_all_edit_modal" ng-click="edit(x)">编辑</button>
                    <button type="button" class="btn btn-danger btn-xs btn-flat" data-toggle="modal"
                            data-target="#category_all_remove_modal" ng-click="remove(x)">删除</button>
                  </td>
                </tr>

              </table>
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