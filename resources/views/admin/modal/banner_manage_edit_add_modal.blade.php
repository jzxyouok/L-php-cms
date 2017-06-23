<!-- 模态框（Modal） -->
<div class="modal fade" id="banner_manage_edit_add_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lgger">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">新增幻灯片 <span
                            style="color:red;padding-left:20px;font-size:14px">@{{banner_add_modal_msg}}</span></h4>
            </div>

            <div class="nav-tabs-custom">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#revenue-chart" data-toggle="tab">上传文件</a></li>
                    <li><a href="#sales-chart" data-toggle="tab">媒体库</a></li>

                </ul>
                <div class="tab-content no-padding">

                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 800px;">
                        <p id="slider_img_upload"></p>
                        <p class="text-center">暂时关闭多文件上传。</p>
                        <p class="text-center">最大上传文件大小：64 MB。</p>
                    </div>

                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 800px;">
                        <div class="panel">
                            <a href="" style="    display: inline-block;margin-left: 10px;"
                               ng-click="changeListStyle(1)" ng-class="{'media_list_active':!listStyle}"><i
                                        class="fa fa-list"></i></a>
                            <a href="" style="    display: inline-block;margin:0 10px;" ng-click="changeListStyle(0)"
                               ng-class="{'media_list_active':listStyle}"><i class="fa fa-th"></i></a>


                            <select class="form-control input-sm "
                                    style="width: 16%;display: inline-block;margin-left: 10px;" name="media_type"
                                    ng-model="media_type" ng-options="x.id as x.name for x in mediaTypeOptions">


                            </select>
                            <select class="form-control input-sm "
                                    style="width: 16%;display: inline-block;margin-left: 10px;"
                                    name="unique_year_month"
                                    ng-model="unique_year_month"
                                    ng-options="x.id as x.name for x in uniqueYearMonthOptions">

                            </select>
                            <button href="" role="button" class="btn btn-primary btn-sm" ng-click="filterData()">筛选
                            </button>
                            <div class="pull-right">

                                <form action="/admin/manage/contentList" name="searchForm" class="ng-pristine ng-valid">
                                    <div class="input-group">
                                        <input type="text" name="searchKey" id="searchInput"
                                               class="form-control input-sm pull-right" style="width: 200px;"
                                               placeholder="请输入需要查询的关键字" value="">
                                        <div class="input-group-btn" style="width: auto;">
                                            <button class="btn btn-sm btn-primary" type="submit"><i
                                                        class="fa fa-search"></i>&nbsp;搜索
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-bordered  table-striped" ng-if="listStyle">
                                <tr>
                                    <th style="width: 10px"><input type="checkbox" class="minimal"></th>
                                    <th>文件</th>
                                    <th>作者</th>
                                    <th>上传至</th>
                                    <th>文件大小</th>
                                    <th>上传日期</th>


                                    <th>操作</th>
                                </tr>
                                <tr ng-repeat="x in data">

                                    <td><input type="checkbox" class="minimal"></td>
                                    <td style="width: 200px">


                                        <div class="media_manage_all_list"
                                             ng-if="x.type_real==='jpeg' || x.type_real==='jpg' || x.type_real==='png' || x.type_real==='gif'">
                                            <img ng-src="@{{ x.url | urlCut}}/@{{x.filename_now}}" title=""
                                                 alt="Product Image">@{{x.filename_now}}
                                        </div>
                                        <div class="media_manage_all_list"
                                             ng-if="x.type_real==='zip' || x.type_real==='rar' || x.type_real==='pdf'">
                                            <img ng-src="@{{ x.url | urlCutNoNumber}}/@{{ x.type_real }}-default.jpg"
                                                 title=""
                                                 alt="Product Image">@{{x.filename_now}}
                                        </div>

                                    </td>
                                    <td>@{{x.admin_user}}</td>
                                    <td>@{{x.url}}</td>
                                    <td>@{{x.size | sizeFormat}}</td>
                                    <td>@{{x.upload_time}}</td>


                                    <td>
                                        <button type="button" class="btn btn-primary btn-xs btn-flat"
                                                data-toggle="modal"
                                                data-target="#category_all_edit_modal" ng-click="edit(x)">编辑
                                        </button>
                                        <button type="button" class="btn btn-danger btn-xs btn-flat" data-toggle="modal"
                                                data-target="#category_all_remove_modal" ng-click="remove(x)">删除
                                        </button>
                                    </td>
                                </tr>

                            </table>
                            <div class="" ng-if="!listStyle" ng-repeat="x in data">
                                <div class="col-lg-2 col-xs-6">
                                    <div class="small-box bg-white">
                                        <img ng-src="@{{ x.url | urlCut}}/@{{x.filename_now}}"
                                             title=""
                                             alt="Product Image"
                                             ng-if="x.type_real==='jpeg' || x.type_real==='jpg' || x.type_real==='png' || x.type_real==='gif'" style="cursor: pointer">
                                        <img ng-src="@{{ x.url | urlCutNoNumber}}/@{{ x.type_real }}-default.jpg"
                                             title=""
                                             alt="Product Image"
                                             ng-if="x.type_real==='zip' || x.type_real==='rar' || x.type_real==='pdf'" style="cursor: pointer" ng-click="selectBanner(x)">

                                        <a href="javascript:void(0)" class="small-box-footer">
                                            @{{x.filename_now}}
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="select_banner_preview">

                </div>

                <button type="button" class="btn btn-primary" ng-click="bannerItemAddCommit()">添加到轮播</button>
            </div>
        </div>

    </div>

</div>
