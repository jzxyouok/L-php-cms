@include('admin.header')
<div class="content-wrapper" ng-controller="categoryManageCtrl" ng-init="getCategories()">
    @include('admin.modal.category_all_edit_modal')
    @include('admin.modal.category_all_remove_modal')
    @include('admin.modal.add_category_modal')
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
                <div class="panel">
                    <a href="" role="button" class="btn btn-primary btn-sm" data-toggle="modal"
                       data-target="#add_category_modal">
                        <span class="fa fa-plus-square" aria-hidden="true">&nbsp;</span>添加分类
                    </a>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$item}}</h3>
                    </div>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered  table-striped">
                            <tr>

                                <th>分类名称</th>
                                <th>别名</th>
                                <th>父级分类</th>
                                <th>排序</th>
                                <th>文章数量</th>

                                <th>操作</th>
                            </tr>
                            <tr ng-repeat="x in data">
                                <td ng-bind="x.name"></td>
                                <td ng-bind="x.slug"></td>
                                <td ng-bind="x.parent"></td>
                                <td ng-bind="x.order"></td>
                                <td ng-bind="">999</td>

                                <td>
                                    <button type="button" class="btn btn-primary btn-xs btn-flat" data-toggle="modal"
                                            data-target="#category_all_edit_modal" ng-click="edit(x)">编辑</button>
                                    <button type="button" class="btn btn-danger btn-xs btn-flat" data-toggle="modal"
                                            data-target="#category_all_remove_modal" ng-click="remove(x)">删除</button>
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