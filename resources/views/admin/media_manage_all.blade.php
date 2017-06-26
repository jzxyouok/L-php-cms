@include('admin.header')
<div class="content-wrapper" id="media_manage_all" ng-controller="mediaManageAll" ng-init="getAllMedia()">


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
                    <a href="" style="    display: inline-block;margin-left: 10px;" ng-click="changeListStyle(1)" ng-class="{'media_list_active':!listStyle}"><i class="fa fa-list"></i></a>
                    <a href="" style="    display: inline-block;margin:0 10px;" ng-click="changeListStyle(0)" ng-class="{'media_list_active':listStyle}"><i class="fa fa-th"></i></a>
                    <a href="" role="button" class="btn btn-primary btn-sm" ng-click="gotoMediaManageUpload()"><span class="fa fa-plus-square" aria-hidden="true">&nbsp;</span>添加媒体</a>


                    <select class="form-control input-sm"
                            style="width: 16%;display: inline-block;margin-left: 10px;" name="media_type"
                            ng-model="media_type" ng-options="x.id as x.name for x in mediaTypeOptions">


                    </select>
                    <select class="form-control input-sm"
                            style="width: 16%;display: inline-block;margin-left: 10px;" name="unique_year_month"
                            ng-model="unique_year_month" ng-options="x.id as x.name for x in uniqueYearMonthOptions">

                    </select>
                    <select class="form-control input-sm ng-pristine ng-untouched ng-valid"
                            style="width: 16%;display: inline-block;margin-left: 10px;" name="every_page_limit"
                            ng-model="every_page_limit" ng-options="x.id as x.name for x in everyPageLimitOptions">
                    </select>
                    <button href="" role="button" class="btn btn-primary btn-sm" ng-click="filterData()">筛选</button>
                    <div class="pull-right">

                        <form action="/admin/manage/contentList" name="searchForm" class="ng-pristine ng-valid">
                            <div class="input-group" >
                                <input type="text" name="searchKey" id="searchInput"
                                       class="form-control input-sm pull-right"
                                       placeholder="请输入需要查询的关键字" value="">
                                <div class="input-group-btn" style="width: auto;">
                                    <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-search"></i>&nbsp;搜索
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$item}}</h3>
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
                        <div class=""  ng-if="!listStyle" ng-repeat="x in data">
                            <div class="col-lg-2 col-xs-6">
                                <div class="small-box bg-white">
                                    <img ng-src="@{{ x.url | urlCut}}/@{{x.filename_now}}"
                                         title=""
                                         alt="Product Image" ng-if="x.type_real==='jpeg' || x.type_real==='jpg' || x.type_real==='png' || x.type_real==='gif'">
                                    <img ng-src="@{{ x.url | urlCutNoNumber}}/@{{ x.type_real }}-default.jpg"
                                         title=""
                                         alt="Product Image" ng-if="x.type_real==='zip' || x.type_real==='rar' || x.type_real==='pdf'">

                                    <a href="javascript:void(0)" class="small-box-footer">
                                        @{{x.filename_now}}
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="box-footer">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                    共@{{count}}条文档
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="">
                                    <ul class="pagination">
                                        <li class="paginate_button previous" id=""
                                            ng-click="goToPage(currentPage-1)"
                                            ng-class="{'disabled':currentPage<=1}">
                                            <a href="#" aria-controls="example1" tabindex="0">&laquo;</a>
                                        </li>
                                        <li class="paginate_button" ng-click="goToPage(1)"
                                            ng-hide="currentPage==1 || currentPage==2">
                                            <a href="#" tabindex="0">1</a>
                                        </li>
                                        <li class="paginate_button" ng-show="currentPage>3">
                                            <a href="#" tabindex="0">...</a>
                                        </li>
                                        <li class="paginate_button" ng-click="goToPage(currentPage-1)"
                                            ng-show="currentPage>1 ">
                                            <a href="#" tabindex="0" ng-bind="currentPage-1"></a>
                                        </li>
                                        <li class="paginate_button active" ng-click="goToPage(currentPage)">
                                            <a href="#" tabindex="0" ng-bind="currentPage"></a>
                                        </li>
                                        <li class="paginate_button" ng-click="goToPage(currentPage+1)"
                                            ng-show="currentPage<allPage-1">
                                            <a href="#" tabindex="0" ng-bind="currentPage+1"></a>
                                        </li>
                                        <li class="paginate_button" ng-show="currentPage<allPage-2">
                                            <a href="#" tabindex="0">...</a>
                                        </li>
                                        <li class="paginate_button" ng-click="goToPage(allPage)"
                                            ng-show="currentPage<allPage">
                                            <a href="#" tabindex="0" ng-bind="allPage"></a>
                                        </li>
                                        <li class="paginate_button next" id="" ng-click="goToPage(currentPage+1)"
                                            ng-class="{'disabled':currentPage>=allPage}">
                                            <a href="#" tabindex="0">&raquo;</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

    </section>

</div>


@include('admin.footer')