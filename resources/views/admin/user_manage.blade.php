@include('admin.header')
<div class="content-wrapper" ng-controller="userManageCtrl" ng-init="getUser()">
    @include('admin.modal.user_manage_add_modal')
    @include('admin.modal.user_manage_edit_modal')
    @include('admin.modal.user_manage_avatar_modal')
    @include('admin.modal.user_manage_remove_modal')

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
                       data-target="#user_manage_add_modal"  ng-click="getUserGroup()">
                        <span class="fa fa-plus-square" aria-hidden="true">&nbsp;</span>添加用户
                    </a>
                </div>
                <div class="box box-primary" >
                    <div class="box-header">
                        <h3 class="box-title">{{$item}}</h3>
                    </div>

                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover  table-bordered table-striped">
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>手机</th>
                                <th>邮箱</th>
                                <th>昵称</th>
                                <th>用户组</th>
                                <th>状态</th>
                                <th>用户类型</th>


                                <th>注册时间</th>
                                <th>操作</th>
                            </tr>

                            <tr ng-repeat="x in data">
                                <td ng-bind="x.id"></td>
                                <td ng-bind="x.phone"> </td>
                                <td ng-bind="x.email"> </td>

                                <td ng-bind="x.nickname"></td>
                                <td ng-bind="x.user_group_id"></td>
                                <td ng-bind="x.status"></td>
                                <td ng-bind="x.is_admin_user=='1' ? '后台' : '前台'"></td>

                                <td ng-bind="x.created_at"></td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs btn-flat ng-hide" ng-click="startUsing(x.id)" ng-show="x.status=='1' ? false :true ">启用</button>
                                    <button type="button" class="btn btn-danger btn-xs btn-flat" ng-click="forbidden(x.id)" ng-show="x.status=='1' ? true : false">禁用</button>
                                    <button type="button" class="btn btn-primary btn-xs btn-flat"  data-toggle="modal" data-target="#user_manage_edit_modal" ng-click="editUser(x)">编辑</button>
                                    <button type="button" class="btn btn-danger btn-xs btn-flat" data-toggle="modal" data-target="#user_manage_remove_modal" ng-click="removeUser(x)">删除</button>

                                    <button type="button" class="btn btn-info btn-xs btn-flat" data-toggle="modal" data-target="#user_manage_avatar_modal" ng-click="uploadAvatar(x)">上传头像</button>
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
    <script>
        $('#user_manage_avatar_upload').uploadify({
            'swf': '/public/plugins/uploadify/uploadify.swf',//指定swf文件
            'uploader': '/admin/manage/user_manage/upload_avatar',//后台处理的页面
            'method': 'post',
            'formData': {
                '_token': "{{csrf_token()}}"
            },
            'buttonText': '点击上传',//按钮显示的文字
            'buttonClass': 'uploadify-btn-primary',//按钮显示的文字
            'width': 66,//显示的高度和宽度，默认 height 30；width 120
            'height': 30,//显示的高度和宽度，默认 height 30；width 120
            'fileTypeDesc': 'Image Files',//上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
            'fileTypeExts': '*.gif; *.jpg; *.png',//允许上传的文件后缀
            'fileSizeLimit': '2MB',//上传文件大小限制
            'auto': true,//选择文件后自动上传
            'multi': false,//设置为true将允许多文件上传

            'onUploadSuccess': function (file, data, response) {//上传成功的回调
                $("#user_manage_avatar_upload_preview").attr("src", JSON.parse(data).url);
                var appElement = document.querySelector('[ng-controller=userManageCtrl]');
                //获取$scope变量
                var $scope = angular.element(appElement).scope();
                //调用msg变量，并改变msg的值
                //$scope.msg = '123456';
                //上一行改变了msg的值，如果想同步到Angular控制器中，则需要调用$apply()方法即可
                //$scope.$apply();
                //调用控制器中的getData()方法

               $scope.uploadAvatarCommit(JSON.parse(data).url);

            },
            //
            // 'onComplete': function(event, queueID, fileObj, response, data) {//当单个文件上传完成后触发
            //   //event:事件对象(the event object)
            //   //ID:该文件在文件队列中的唯一表示
            //   //fileObj:选中文件的对象，他包含的属性列表
            //   //response:服务器端返回的Response文本，我这里返回的是处理过的文件名称
            //   //data：文件队列详细信息和文件上传的一般数据
            //   alert("文件:" + fileObj.name + " 上传成功！");
            // },
            //
            // 'onUploadError' : function(file, errorCode, errorMsg, errorString) {//上传错误
            //   alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
            // },
            //
            // 'onError': function(event, queueID, fileObj) {//当单个文件上传出错时触发
            //   alert("文件:" + fileObj.name + " 上传失败！");
            // }


        });
    </script>
</div>
@include('admin.footer')