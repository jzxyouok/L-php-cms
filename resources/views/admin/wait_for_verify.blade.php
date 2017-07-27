@include('admin.header')
<div class="content-wrapper" ng-controller="waitForVerify" ng-init="getWaitForVerifyByLimitAndCurrentPage(5,1)">

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

          <div class="box-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="dataTables_length" id="">
                  <label>每页显示&nbsp;&nbsp;
                    <select name="document_limit" aria-controls="" class="form-control input-sm"
                            ng-model="limit" ng-change="getWaitForVerifyByLimitAndCurrentPage(limit,1)">
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="50">50</option>
                    </select>&nbsp;&nbsp;条文档
                  </label>
                </div>
              </div>
              <div class="col-sm-6">
                <div id="example1_filter" class="dataTables_filter"><label>文档搜索:<input type="search"
                                                                                       class="form-control input-sm"
                                                                                       placeholder=""
                                                                                       aria-controls="example1"></label>
                </div>
              </div>
            </div>
            <div class="row">
              <table class="table table-bordered">
                <tr>

                  <th>文章标题</th>
                  <th>来源</th>
                  <th>操作</th>
                </tr>
                <tr ng-repeat="x in data">

                  <td ng-bind="x.title"></td>
                  <td ng-bind="x.from"></td>


                  <td>
                    <a type="button" class="btn btn-info btn-xs btn-flat" ng-click="editDoc(x)">审批</a>
                    <button type="button" class="btn btn-warning btn-xs btn-flat" ng-click="removeOneDocument(x)">删除</button>

                  </td>
                </tr>


              </table>

            </div>


          </div>

          <div class="box-footer clearfix">
            <div class="row">
              <div class="col-sm-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                  共 <span ng-bind="count"></span> 条文档
                </div>
              </div>
              <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="">
                  <ul class="pagination">
                    <li class="paginate_button previous" id=""
                        ng-click="getWaitForVerifyByLimitAndCurrentPage(limit,currentPage-1)"
                        ng-class="{'disabled':currentPage<=1}">
                      <a href="#" aria-controls="example1" tabindex="0">&laquo;</a>
                    </li>
                    <li class="paginate_button" ng-click="getWaitForVerifyByLimitAndCurrentPage(limit,1)"
                        ng-hide="currentPage==1 || currentPage==2">
                      <a href="#" tabindex="0">1</a>
                    </li>
                    <li class="paginate_button" ng-show="currentPage>3">
                      <a href="#" tabindex="0">...</a>
                    </li>
                    <li class="paginate_button" ng-click="getWaitForVerifyByLimitAndCurrentPage(limit,currentPage-1)"
                        ng-show="currentPage>1 ">
                      <a href="#" tabindex="0" ng-bind="currentPage-1"></a>
                    </li>
                    <li class="paginate_button active" ng-click="getWaitForVerifyByLimitAndCurrentPage(limit,currentPage)">
                      <a href="#" tabindex="0" ng-bind="currentPage"></a>
                    </li>
                    <li class="paginate_button" ng-click="getWaitForVerifyByLimitAndCurrentPage(limit,currentPage+1)"
                        ng-show="currentPage<allPage-1">
                      <a href="#" tabindex="0" ng-bind="currentPage+1"></a>
                    </li>
                    <li class="paginate_button" ng-show="currentPage<allPage-2">
                      <a href="#" tabindex="0">...</a>
                    </li>
                    <li class="paginate_button" ng-click="getWaitForVerifyByLimitAndCurrentPage(limit,allPage)"
                        ng-show="currentPage<allPage">
                      <a href="#" tabindex="0" ng-bind="allPage"></a>
                    </li>
                    <li class="paginate_button next" id="" ng-click="getWaitForVerifyByLimitAndCurrentPage(limit,currentPage+1)"
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