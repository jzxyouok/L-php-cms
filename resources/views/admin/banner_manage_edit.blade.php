@include('admin.header')
<div class="content-wrapper" ng-controller="bannerManageEdit" ng-init="bannerGet()">
    @include('admin.modal.banner_manage_edit_add_modal')

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
                       data-target="#banner_manage_edit_add_modal"><span class="fa fa-plus-square" aria-hidden="true">&nbsp;</span>新增幻灯片</a>
                </div>


                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$item}}</h3>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>图片</th>
                                    <th>标题</th>
                                    <th>URL</th>
                                    <th>title属性</th>
                                    <th>alt属性</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="slider-img">
                                            <img src="/public/upload/images/slider-default.jpg" title="" alt="Product Image">
                                            <a href=""><i class="fa fa-trash fa-fw fa-lg"></i></a>
                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control input-sm" id="" placeholder="请输入标题"></td>
                                    <td><input type="text" class="form-control input-sm" id="" placeholder="请输入URL">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-sm" id="" placeholder="请输入title属性">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-sm" id="" placeholder="请输入alt属性">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="slider-img">
                                            <img src="/public/upload/images/slider-default.jpg" alt="Product Image">
                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control input-sm" id="" placeholder="请输入标题"></td>
                                    <td><input type="text" class="form-control input-sm" id="" placeholder="请输入URL">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-sm" id="" placeholder="请输入title属性">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-sm" id="" placeholder="请输入alt属性">
                                    </td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <button type="submit" class="btn btn-primary pull-right" ng-click="categoryAdd()">保存
                        </button>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
        </div>
    </section>

</div>
@include('admin.footer')