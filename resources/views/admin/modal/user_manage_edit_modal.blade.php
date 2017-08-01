<!-- 模态框（Modal） -->
<div class="modal fade" id="user_manage_edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">编辑用户</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" onsubmit="return false;" name="myFormForEdit">
                    <div class="box-body">
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.userGroupForEdit.$invalid && !myForm.userGroupForEdit.$pristine,'has-success':myForm.userGroupForEdit.$valid && !myForm.userGroupForEdit.$pristine}">
                            <label class="col-sm-2 control-label">用户组</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="userGroupForEdit" ng-model="userGroupForEdit"
                                        ng-options="x.id as x.name for x in userGroupForEditOptions" required>
                                    <option value="">-- 请选择 --</option>
                                </select>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.userGroupForEdit.$invalid && !myForm.userGroupForEdit.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，您必须选择一项！</span>
                            </div>
                        </div>
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.phoneForEdit.$invalid && !myForm.phoneForEdit.$pristine,'has-success':myForm.phoneForEdit.$valid && !myForm.phoneForEdit.$pristine,'has-error':isPhoneForEditExist}">
                            <label for="" class="col-sm-2 control-label">手机</label>

                            <div class="col-sm-10">
                                <input type="text"
                                       class="form-control ng-invalid ng-touched ng-dirty ng-valid-parse ng-valid-required ng-invalid-pattern"
                                       id="" name="phoneForEdit" ng-model="phoneForEdit"
                                       placeholder="手机" ng-keyup="checkPhone()"  ng-change="checkPhone()" required
                                       ng-pattern="/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/">
                                <span class="help-block ng-hide"
                                      ng-show="myForm.phoneForEdit.$invalid && !myForm.phoneForEdit.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，手机号格式不正确！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.phoneForEdit.$valid && !myForm.phoneForEdit.$pristine && isPhoneForEditExist">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    对不起，该手机号已经被注册！
                                </span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.phoneForEdit.$valid && !myForm.phoneForEdit.$pristine && !isPhoneForEditExist"><span
                                            class="glyphicon glyphicon-ok"></span>恭喜您，该手机号可用！</span>
                            </div>
                        </div>
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.emailForEdit.$invalid && !myForm.emailForEdit.$pristine,'has-success':myForm.emailForEdit.$valid && !myForm.emailForEdit.$pristine,'has-error':isEmailForEditExist}">
                            <label for="" class="col-sm-2 control-label">邮箱</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="emailForEdit"
                                       ng-model="emailForEdit" placeholder="邮箱" required
                                       ng-pattern="/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/" ng-keyup="checkEmail()" ng-change="checkEmail()">
                                <span class="help-block ng-hide"
                                      ng-show="myForm.emailForEdit.$invalid && !myForm.emailForEdit.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，邮箱格式不正确！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.emailForEdit.$valid && !myForm.emailForEdit.$pristine && isEmailForEditExist" ><span
                                            class="glyphicon glyphicon-remove"></span>对不起，该邮箱已经被注册！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.emailForEdit.$valid && !myForm.emailForEdit.$pristine && !isEmailForEditExist"><span
                                            class="glyphicon glyphicon-ok"></span>恭喜您，该邮箱可以注册！</span>
                            </div>
                        </div>
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.nicknameForEdit.$invalid && !myForm.nicknameForEdit.$pristine,'has-success':myForm.nicknameForEdit.$valid && !myForm.nicknameForEdit.$pristine}">
                            <label for="" class="col-sm-2 control-label">昵称</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="nicknameForEdit"
                                       ng-model="nicknameForEdit" placeholder="昵称" ng-pattern="/[\u4e00-\u9fa5\w]{2,20}/"
                                       ng-minlength="2" ng-maxlength="20" required>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.nicknameForEdit.$invalid && !myForm.nicknameForEdit.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，昵称必须为2~12个中文或字母或数字！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.nicknameForEdit.$valid && !myForm.nicknameForEdit.$pristine"><span
                                            class="glyphicon glyphicon-ok"></span>恭喜您，该昵称可用！</span>
                            </div>
                        </div>



                        <div class="form-group"
                             ng-class="{'has-warning':myForm.remarkForEdit.$invalid && !myForm.remarkForEdit.$pristine,'has-success':myForm.remarkForEdit.$valid && !myForm.remarkForEdit.$pristine}">
                            <label class="col-sm-2 control-label">备注</label>
                            <div class="col-sm-10">
            <textarea class="form-control" rows="3" placeholder="备注信息" name="remarkForEdit"
                      ng-model="remarkForEdit" required ng-minlength="2" ng-maxlength="30"></textarea>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.remarkForEdit.$invalid && !myForm.remarkForEdit.$pristine"> <span
                                            class="glyphicon glyphicon-remove"></span>请输入5~30个字符！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.remarkForEdit.$valid && !myForm.remarkForEdit.$pristine"> <span
                                            class="glyphicon glyphicon-ok"></span>符合要求！</span>
                            </div>
                        </div>
                    </div>


                </form>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" ng-click="editUserCommit()">更新</button>
            </div>
        </div>

    </div>

</div>
