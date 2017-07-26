@include('admin.header')
<div class="content-wrapper" ng-controller="gatherManage" ng-init="getGather()">
    @include('admin.modal.gather_manage_add_gather_modal')
    @include('admin.modal.category_all_edit_modal')
    @include('admin.modal.category_all_remove_modal')
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
                       data-target="#gather_manage_add_gather_modal" ng-click=""> 添加采集 </a>

                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$item}}</h3>
                    </div>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered  table-striped">
                            <tr>

                                <th>网站名称</th>
                                <th>标题类名</th>
                                <th>内容类名</th>
                                <th>自动采集</th>
                                <th>列表URL</th>
                                <th>采集间隔</th>
                                <th>操作</th>
                            </tr>
                            <tr ng-repeat="x in gatherData">
                                <td ng-bind="x.site_name"></td>
                                <td ng-bind="x.doc_title"></td>
                                <td ng-bind="x.doc_content"></td>
                                <td ng-bind="x.auto"></td>
                                <td ng-bind="x.doc_content"></td>
                                <td ng-bind="x.space_time"></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs btn-flat" data-toggle="modal"
                                            data-target="#category_all_edit_modal" ng-click="edit(x)">编辑</button>
                                    <button type="button" class="btn btn-danger btn-xs btn-flat" data-toggle="modal"
                                            data-target="#category_all_remove_modal" ng-click="remove(x)">删除</button>
                                    <button type="button" class="btn btn-info btn-xs btn-flat"  ng-click="autoGather(x)">开始自动采集</button>
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