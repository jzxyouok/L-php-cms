@include('admin.header')

<div class="content-wrapper" ng-controller="mediaManageUpload">

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

                        <p id="media_manage_upload"></p>
                        <p class="help-block">支持多文件上传。</p>
                        <p class="help-block">最大上传文件大小：64 MB。</p>
                        <table class="table table-bordered">
                            <tbody>

                            <tr>
                                <td>  <div class="media_manage_upload_img">
                                        <img src="/public/upload/images/meida-default.jpg" title="" alt="Product Image">

                                    </div></td>
                                <td>文件名</td>
                                <td>
                                   10MB
                                </td>
                                <td>  <button type="button" class="btn btn-primary btn-xs btn-flat" data-toggle="modal"
                                              data-target="#admin_user_group_all_edit_modal" ng-click="edit(x)">编辑
                                    </button></td>
                            </tr>


                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>

    </section>

</div>

<script>
    $('#media_manage_upload').uploadify({

        'swf': '/public/plugins/uploadify/uploadify.swf',//指定swf文件
        'uploader': '/admin/manage/file_manage/media_manage_upload',//后台处理的页面+ '?postTitle=' + 'post_title' + '&type=' + 'images' + '&key=' + 'post_img'
        'method': 'post',
        'formData': {
            '_token': "{{csrf_token()}}"
        },
        'buttonText': '选择文件',//按钮显示的文字
        'buttonClass': 'uploadify-btn-primary',//按钮显示的文字
        'width': 66,//显示的高度和宽度，默认 height 30；width 120
        'height': 30,//显示的高度和宽度，默认 height 30；width 120
        //  'fileTypeDesc': 'Image Files',//上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
        'fileTypeExts': '*.gif; *.jpg; *.png;*.zip;*.rar;*.pdf;',//允许上传的文件后缀
        'fileSizeLimit': '64MB',//上传文件大小限制
        'auto': true,//选择文件后自动上传
        'multi': true,//设置为true将允许多文件上传

        'onUploadSuccess': function (file, data, response) {//上传成功的回调
            console.log(file);
            console.log(data);
            console.log(response);
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
@include('admin.footer')