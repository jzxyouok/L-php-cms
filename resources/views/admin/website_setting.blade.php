@include('admin.header')
<div class="content-wrapper" ng-controller="website">
  <section class="content-header">
    <h1>
      {{$cms}}
      <small>{{$item}}</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
      <li><a href="#">{{$category }}</a></li>
      <li class="active"> {{$item}}</li>
    </ol>
  </section>
  <section class="content" ng-app="myApp" ng-controller="categoriesAdd">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"> {{$item}}</h3>
          </div>
          <form class="form-horizontal" name="myForm">
            <div class="box-body">
              <div class="form-group" ng-class="{'has-warning':myForm.cate_name.$invalid && !myForm.cate_name.$pristine,'has-success':myForm.cate_name.$valid && !myForm.cate_name.$pristine,'has-error':isUsernameExist}">
                <label for="username" class="col-sm-2 control-label">网站主页</label>

                <div class="col-sm-4">
                  <input type="text" name="cate_name" ng-model="cate_name" class="form-control" id="cate_name" placeholder="网站主页"  ng-minlength="2" ng-maxlength="6" ng-pattern="/[\u4e00-\u9fa5]/" required>
                  <span class="help-block ng-hide"
                        ng-show="myForm.cate_name.$invalid && !myForm.cate_name.$pristine"><span
                            class="glyphicon glyphicon-remove"></span>对不起，分类名称格式不正确！</span>
                  <span class="help-block ng-hide"
                        ng-show="myForm.cate_name.$valid && !myForm.cate_name.$pristine && !isUsernameExist"><span
                            class="glyphicon glyphicon-ok"></span>恭喜您，分类名称可用！</span>
                </div>
              </div>
              <div class="form-group" ng-class="{'has-warning':myForm.cate_slug.$invalid && !myForm.cate_slug.$pristine,'has-success':myForm.cate_slug.$valid && !myForm.cate_slug.$pristine,'has-error':isUsernameExist}">
                <label for="nickname" class="col-sm-2 control-label">网站标题</label>

                <div class="col-sm-4">
                  <input type="text" name="cate_slug" ng-model="cate_slug" class="form-control" id="cate_slug" placeholder="网站标题"  ng-pattern="/^[a-zA-Z]\w{1,19}$/" required>
                  <span class="help-block ng-hide"
                        ng-show="myForm.cate_slug.$invalid && !myForm.cate_slug.$pristine"><span
                            class="glyphicon glyphicon-remove"></span>对不起，别名格式不正确！</span>
                  <span class="help-block ng-hide"
                        ng-show="myForm.cate_slug.$valid && !myForm.cate_slug.$pristine && !isUsernameExist"><span
                            class="glyphicon glyphicon-ok"></span>恭喜您，别名可用！</span>
                </div>
              </div>







              <div class="form-group" ng-class="{'has-warning':myForm.cate_slug.$invalid && !myForm.cate_slug.$pristine,'has-success':myForm.cate_slug.$valid && !myForm.cate_slug.$pristine,'has-error':isUsernameExist}">
                <label for="nickname" class="col-sm-2 control-label">备案号</label>

                <div class="col-sm-4">
                  <input type="text" name="cate_slug" ng-model="cate_slug" class="form-control" id="cate_slug" placeholder="备案号"  ng-pattern="/^[a-zA-Z]\w{1,19}$/" required>
                  <span class="help-block ng-hide"
                        ng-show="myForm.cate_slug.$invalid && !myForm.cate_slug.$pristine"><span
                            class="glyphicon glyphicon-remove"></span>对不起，别名格式不正确！</span>
                  <span class="help-block ng-hide"
                        ng-show="myForm.cate_slug.$valid && !myForm.cate_slug.$pristine && !isUsernameExist"><span
                            class="glyphicon glyphicon-ok"></span>恭喜您，别名可用！</span>
                </div>
              </div>




              <div class="form-group" ng-class="{'has-warning':myForm.cate_order.$invalid && !myForm.cate_order.$pristine,'has-success':myForm.cate_order.$valid && !myForm.cate_order.$pristine,'has-error':isUsernameExist}">
                <label for="password" class="col-sm-2 control-label">关键词</label>

                <div class="col-sm-4">
                  <input type="password" name="cate_order" ng-model="cate_order" class="form-control" id="password" placeholder="关键词"  ng-pattern="/^\d{1,4}$/" required>
                  <span class="help-block ng-hide"
                        ng-show="myForm.cate_order.$invalid && !myForm.cate_order.$pristine"><span
                            class="glyphicon glyphicon-remove"></span>对不起，排序格式不正确！</span>
                  <span class="help-block ng-hide"
                        ng-show="myForm.cate_order.$valid && !myForm.cate_order.$pristine && !isUsernameExist"><span
                            class="glyphicon glyphicon-ok"></span>恭喜您，排序可用！</span>
                </div>
              </div>

              <div class="form-group" ng-class="{'has-warning':myForm.cate_order.$invalid && !myForm.cate_order.$pristine,'has-success':myForm.cate_order.$valid && !myForm.cate_order.$pristine,'has-error':isUsernameExist}">
                <label for="password" class="col-sm-2 control-label">描述信息</label>

                <div class="col-sm-4">
                  <input type="password" name="cate_order" ng-model="cate_order" class="form-control" id="password" placeholder="描述信息"  ng-pattern="/^\d{1,4}$/" required>
                  <span class="help-block ng-hide"
                        ng-show="myForm.cate_order.$invalid && !myForm.cate_order.$pristine"><span
                            class="glyphicon glyphicon-remove"></span>对不起，排序格式不正确！</span>
                  <span class="help-block ng-hide"
                        ng-show="myForm.cate_order.$valid && !myForm.cate_order.$pristine && !isUsernameExist"><span
                            class="glyphicon glyphicon-ok"></span>恭喜您，排序可用！</span>
                </div>
              </div>





            <div class="box-footer">

              <button type="submit" class="btn btn-primary pull-right" ng-click="categoriesAdd()">修改</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@include('admin.footer')