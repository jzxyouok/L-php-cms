@include('admin.header')
<div class="content-wrapper" id="banner_manage_edit" ng-controller="bannerManageEdit" ng-init="bannerGet()">
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
                       data-target="#banner_manage_edit_add_modal" ng-click="getAllMedia()"><span
                                class="fa fa-plus-square" aria-hidden="true">&nbsp;</span>新增幻灯片</a>
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
                                    <th>幻灯片标题</th>
                                    <th>幻灯片URL</th>
                                    <th>图片title属性</th>
                                    <th>图片alt属性</th>

                                </tr>
                                </thead>
                                <tbody>
                                <input type="hidden" id="banner_id" name="banner_id" value="{{$bannerId}}">
                                <tr ng-repeat="x in bannerData">

                                    <td>
                                        <div class="slider-img">
                                            <img ng-src="@{{ x.url | urlCut}}/@{{x.filename_now}}" title=""
                                                 alt="Product Image">
                                            <a href=""><i class="fa fa-trash fa-fw fa-lg"></i></a>
                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control input-sm" ng-model="$parent.bannerTitle[$index]" id="" placeholder="请输入标题"></td>
                                    <td><input type="text" class="form-control input-sm" ng-model="$parent.bannerUrl[$index]"  id="" placeholder="请输入URL">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-sm" ng-model="$parent.imgTitle[$index]"  id="" placeholder="请输入title属性">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control input-sm" ng-model="$parent.imgAlt[$index]"  id="" placeholder="请输入alt属性">
                                    </td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <button type="submit" class="btn btn-primary pull-right" ng-click="saveSlider()">保存
                        </button>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
        </div>
    </section>

</div>
<script>

    $('#slider_img_upload').uploadify({

        'swf': '/public/plugins/uploadify/uploadify.swf',//指定swf文件
        'uploader': '/admin/manage/doc_manage/banner_manage_edit_upload',//后台处理的页面
        'method': 'post',
        'formData': {
            '_token': "{{csrf_token()}}"
        },
        'buttonText': '上传图片',//按钮显示的文字
        'buttonClass': 'uploadify-btn-primary',//
        'width': 100,//显示的高度和宽度，默认 height 30；width 120
        'height': 30,//显示的高度和宽度，默认 height 30；width 120
        //  'fileTypeDesc': 'Image Files',//上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
        'fileTypeExts': '*.gif; *.jpg; *.png;*.pdf;*.rar;*.zip',//允许上传的文件后缀
        'fileSizeLimit': '64MB',//上传文件大小限制
        'auto': true,//选择文件后自动上传
        'multi': false,//设置为true将允许多文件上传

        'onUploadSuccess': function (file, data, response) {//上传成功的回调
            // $("#post_img_preview").attr("src", data);
            // $scope.postImg = data;
            console.log(1);
            $('#banner_manage_edit_add_modal .tab-content .tab-pane').removeClass('active');
            $('#banner_manage_edit_add_modal .tab-content #sales-chart').addClass('active');
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