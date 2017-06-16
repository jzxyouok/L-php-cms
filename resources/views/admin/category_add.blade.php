@include('admin.header')
<div class="content-wrapper" ng-controller="categoryAdd">
    @include('admin.modal.category_add_modal')
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

                    <form class="form-horizontal" name="myForm">
                        <div class="box-body">
                            <div class="form-group"
                                 ng-class="{'has-warning':myForm.name.$invalid && !myForm.name.$pristine,'has-success':myForm.name.$valid && !myForm.name.$pristine,'has-error':isUsernameExist}">
                                <label for="" class="col-sm-2 control-label">分类名称</label>

                                <div class="col-sm-10">
                                    <input type="text" name="name" ng-model="name" class="form-control"
                                           id="" placeholder="请输入分类名称" ng-minlength="2" ng-maxlength="20"
                                           required>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.name.$invalid && !myForm.name.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，分类名称格式不正确！</span>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.name.$valid && !myForm.name.$pristine && !isUsernameExist"><span
                                                class="glyphicon glyphicon-ok"></span>恭喜您，分类名称可用！</span>
                                </div>
                            </div>
                            <div class="form-group"
                                 ng-class="{'has-warning':myForm.slug.$invalid && !myForm.slug.$pristine,'has-success':myForm.slug.$valid && !myForm.slug.$pristine,'has-error':isUsernameExist}">
                                <label for="" class="col-sm-2 control-label">别名</label>

                                <div class="col-sm-10">
                                    <input type="text" name="slug" ng-model="slug" class="form-control"
                                           id="" placeholder="请输入别名" ng-pattern="/^[a-zA-Z]\w{1,19}$/"
                                           required>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.slug.$invalid && !myForm.slug.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，别名格式不正确！</span>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.slug.$valid && !myForm.slug.$pristine && !isUsernameExist"><span
                                                class="glyphicon glyphicon-ok"></span>恭喜您，别名可用！</span>
                                </div>
                            </div>

                            <div class="form-group"
                                 ng-class="{'has-warning':myForm.order.$invalid && !myForm.order.$pristine,'has-success':myForm.order.$valid && !myForm.order.$pristine,'has-error':isUsernameExist}">
                                <label for="" class="col-sm-2 control-label">排序</label>

                                <div class="col-sm-10">
                                    <input type="text" name="order" ng-model="order" class="form-control"
                                           id="" placeholder="请输入排序数字" ng-pattern="/^\d{1,4}$/" required>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.order.$invalid && !myForm.order.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，排序格式不正确！</span>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.order.$valid && !myForm.order.$pristine && !isUsernameExist"><span
                                                class="glyphicon glyphicon-ok"></span>恭喜您，排序可用！</span>
                                </div>
                            </div>
                            <div class="form-group"
                                 ng-class="{'has-warning':myForm.parent.$invalid && !myForm.parent.$pristine,'has-success':myForm.parent.$valid && !myForm.parent.$pristine,'has-error':isUsernameExist}">
                                <label class="col-sm-2 control-label">父级</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="parent" ng-model="parent"
                                            ng-options="x.id as x.name for x in cateOptions" required>
                                        <option value="">-- 请选择 --</option>
                                    </select>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.parent.$invalid && !myForm.parent.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，您必须选择一项！</span>
                                </div>
                            </div>


                            <div class="form-group"
                                 ng-class="{'has-warning':myForm.remark.$invalid && !myForm.remark.$pristine,'has-success':myForm.remark.$valid && !myForm.remark.$pristine,'has-error':isUsernameExist}">
                                <label class="col-sm-2 control-label">备注</label>
                                <div class="col-sm-10">
                                    <textarea name="remark" ng-model="remark" class="form-control" rows="3"
                                              placeholder="请输入备注信息" ng-minlength="6" ng-maxlength="30"
                                              required></textarea>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.remark.$invalid && !myForm.remark.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，备注格式不正确！</span>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.remark.$valid && !myForm.remark.$pristine && !isUsernameExist"><span
                                                class="glyphicon glyphicon-ok"></span>恭喜您，备注可用！</span>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer">

                            <button type="submit" class="btn btn-primary pull-right" ng-click="categoryAdd()">添加
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </section>

</div>
@include('admin.footer')