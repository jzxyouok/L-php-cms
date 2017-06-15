/**
 * Created by v_lljunli on 2017/5/10.
 */

/*
 * 所有用户
 * */
app.controller('adminUserAll', ['$scope', '$http','adminUserAllService', function ($scope, $http,adminUserAllService) {
    adminUserAllService.get().then(function success(res) {
    $scope.data = res.data;
    console.log($scope.data);
  }, function error(res) {

  });


    /*
     * 头像上传
     * */
    $scope.logo = '/public/upload/images/defaultlogo.png';

    $('#admin_user_all_avatar_upload').uploadify({

        'swf': '/public/plugins/uploadify/uploadify.swf',//指定swf文件
        'uploader': '/admin/manage/user_manage/upload' + '?adminId=' + 'adminUser_username' + '&type=' + 'images' + '&key=' + 'adminUser_avatar',//后台处理的页面
        'buttonText': '上传图片',//按钮显示的文字
        'buttonClass': 'uploadify-btn-default',//按钮显示的文字
        'width': 100,//显示的高度和宽度，默认 height 30；width 120
        'height': 30,//显示的高度和宽度，默认 height 30；width 120
        'fileTypeDesc': 'Image Files',//上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
        'fileTypeExts': '*.gif; *.jpg; *.png',//允许上传的文件后缀
        'fileSizeLimit': '2000KB',//上传文件大小限制
        'auto': true,//选择文件后自动上传
        'multi': false,//设置为true将允许多文件上传

        'onUploadSuccess': function (file, data, response) {//上传成功的回调
            $("#adminUser_avatar_preview").attr("src", data);
            $scope.logo= data;

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
















}]);