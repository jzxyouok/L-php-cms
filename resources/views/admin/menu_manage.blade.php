@include('admin.header')
<div class="content-wrapper"  ng-controller="menuManage" ng-init="getMenu()">
  @include('admin.modal.menu_manage_add_menu_modal')
  @include('admin.modal.menu_manage_edit_menu_modal')
  @include('admin.modal.menu_manage_remove_menu_modal')
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
          <a href="" role="button" class="btn btn-primary btn-sm" data-toggle="modal"
             data-target="#menu_manage_add_menu_modal" ng-click="addMenu()">
            <span class="fa fa-plus-square" aria-hidden="true">&nbsp;</span>添加菜单
          </a>



        </div>
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{$item}}</h3>
          </div>

          <div class="box-body table-responsive no-padding">
            <table class="table table-bordered  table-striped">
              <tr>

                <th>id</th>
                <th>名称</th>
                <th>父级</th>
                <th>排序</th>
                <th>地址</th>
                <th>操作</th>
              </tr>
              <tr ng-repeat="x in menuData">

                <td ng-bind="x.id"></td>
                <td ng-bind="x.name"></td>
                <td ng-bind="x.parent"></td>
                <td ng-bind="x.order"></td>
                <td ng-bind="x.url"></td>


                <td>
                  <button type="button" class="btn btn-primary btn-xs btn-flat" data-toggle="modal"
                          data-target="#menu_manage_edit_menu_modal" ng-click="editMenu(x)">编辑</button>
                  <button type="button" class="btn btn-danger btn-xs btn-flat" data-toggle="modal"
                          data-target="#menu_manage_remove_menu_modal" ng-click="removeMenu(x)">删除</button>
                </td>
              </tr>

            </table>
          </div>

          <div class="box-footer clearfix">

          </div>
        </div>
      </div>

    </div>

  </section>

</div>
@include('admin.footer')