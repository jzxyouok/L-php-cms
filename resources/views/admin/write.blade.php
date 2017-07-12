@include('admin.header')
<div class="content-wrapper" ng-controller="docWrite">

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

                            <div class="form-group">
                                <label class="col-sm-2 control-label">文档类型</label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="type" ng-model="type.name" id=""
                                                   value="post" ng-checked="true">
                                            文章
                                        </label>
                                        <label>
                                            <input type="radio" name="type" ng-model="type.name" id=""
                                                   value="page">
                                            页面
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"
                                 ng-class="{'has-error':myForm.title.$invalid && !myForm.title.$pristine,'has-success':myForm.title.$valid && !myForm.title.$pristine}">
                                <label for="document_title" class="col-sm-2 control-label">文章标题</label>

                                <div class="col-sm-10">
                                    <input type="text" name="title" ng-model="title"
                                           class="form-control"
                                           id="title" ng-minlength="5" ng-maxlength="30"
                                           required>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.title.$invalid && !myForm.title.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，文章标题格式不正确！</span>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.title.$valid && !myForm.title.$pristine"><span
                                                class="glyphicon glyphicon-ok"></span>恭喜您，文章标题可用！</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">缩略图</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                    <img src="/public/upload/image/doc-default.jpg" alt="" class=" col-sm-4"
                                         id="doc_preview_img_preview"/>
                                    <p id="doc_preview_img"></p>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group"
                                 ng-class="{'has-error':myForm.tag.$invalid && !myForm.tag.$pristine,'has-success':myForm.tag.$valid && !myForm.tag.$pristine}">
                                <label for="document_tags" class="col-sm-2 control-label">TAG标签</label>

                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" name="tag" ng-model="tag"
                                               class="form-control" required>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default dropdown-toggle"
                                                    data-toggle="dropdown">选择
                                                <span class="fa fa-caret-down"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">标签1</a></li>
                                                <li><a href="#">标签2</a></li>
                                                <li><a href="#">标签3</a></li>
                                                <li><a href="#">标签4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <a href="#addContentTags" role="button" class="btn btn-link"
                                       data-toggle="modal"><span class="fa fa-tags" aria-hidden="true"></span>新标签</a>

                                </div>
                            </div>


                            <div class="form-group"
                                 ng-class="{'has-error':myForm.category.$invalid && !myForm.category.$pristine,'has-success':myForm.category.$valid && !myForm.category.$pristine}">
                                <label class="col-sm-2 control-label">文档分类</label>
                                <div class="col-sm-10">


                                    <select class="form-control" name="category" ng-model="category"
                                            ng-options="x.id as x.name for x in cateOptions" required>
                                        <option value="">-- 请选择 --</option>
                                    </select>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.category.$invalid && !myForm.category.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，您必须选择一项！</span>
                                </div>
                            </div>


                            <div class="form-group"
                                 ng-class="{'has-error':myForm.abstract.$invalid && !myForm.abstract.$pristine,'has-success':myForm.abstract.$valid && !myForm.abstract.$pristine}">
                                <label class="col-sm-2 control-label">内容摘要</label>
                                <div class="col-sm-10">
                                    <textarea name="abstract" class="form-control" rows="3" ng-model="abstract"></textarea>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.abstract.$invalid && !myForm.abstract.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，排序格式不正确！</span>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.abstract.$valid && !myForm.abstract.$pristine "><span
                                                class="glyphicon glyphicon-ok"></span>恭喜您，排序可用！</span>
                                </div>
                            </div>

                            <div class="form-group"
                                 ng-class="{'has-error':myForm.keyword.$invalid && !myForm.keyword.$pristine,'has-success':myForm.keyword.$valid && !myForm.keyword.$pristine}">
                                <label class="col-sm-2 control-label">关键字</label>
                                <div class="col-sm-10">
                                    <input type="text" name="keyword" ng-model="keyword"
                                           class="form-control"
                                           id="" required>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.keyword.$invalid && !myForm.keyword.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，排序格式不正确！</span>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.keyword.$valid && !myForm.keyword.$pristine"><span
                                                class="glyphicon glyphicon-ok"></span>恭喜您，排序可用！</span>
                                </div>
                            </div>


                            <div class="form-group"
                                 ng-class="{'has-error':myForm.view.$invalid && !myForm.view.$pristine,'has-success':myForm.view.$valid && !myForm.view.$pristine}">
                                <label class="col-sm-2 control-label">浏览量</label>
                                <div class="col-sm-10">
                                    <input type="text" name="view" ng-model="view"
                                           class="form-control"
                                           id="" ng-pattern="/^\d{1,4}$/" required>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.view.$invalid && !myForm.view.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，排序格式不正确！</span>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.view.$valid && !myForm.view.$pristine"><span
                                                class="glyphicon glyphicon-ok"></span>恭喜您，排序可用！</span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">发布人</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" name="author" ng-model="author"
                                               class="form-control" required>
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-default dropdown-toggle"
                                                    data-toggle="dropdown">选择
                                                <span class="fa fa-caret-down"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">作者1</a></li>
                                                <li><a href="#">作者2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"
                                 ng-class="{'has-error':myForm.from.$invalid && !myForm.from.$pristine,'has-success':myForm.from.$valid && !myForm.from.$pristine}">
                                <label for="" class="col-sm-2 control-label">来源</label>

                                <div class="col-sm-10">
                                    <input type="text" name="from" ng-model="from"
                                           class="form-control"
                                           id="" required>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.from.$invalid && !myForm.from.$pristine"><span
                                                class="glyphicon glyphicon-remove"></span>对不起，来源格式不正确！</span>
                                    <span class="help-block ng-hide"
                                          ng-show="myForm.from.$valid && !myForm.from.$pristine"><span
                                                class="glyphicon glyphicon-ok"></span>恭喜您，来源可用！</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">文档内容</label>
                                <div class="col-sm-10">

                                    <script id="container" name="content" type="text/plain"></script>


                                </div>
                            </div>


                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right" ng-click="docWrite()">发布
                            </button>

                        </div>

                    </form>
                    <script src="/public/plugins/ueditor/ueditor.config.js"></script>
                    <script src="/public/plugins/ueditor/ueditor.all.min.js"></script>
                    <script type="text/javascript">
                        var ue = UE.getEditor('container', {
                            initialFrameWidth: '100%'
                        });
                    </script>
                    <script>
                        $('#doc_preview_img').uploadify({

                            'swf': '/public/plugins/uploadify/uploadify.swf',//指定swf文件
                            'uploader': '/admin/manage/doc_manage/preview_img_upload',//后台处理的页面
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
                            'fileSizeLimit': '64MB',//上传文件大小限制
                            'auto': true,//选择文件后自动上传
                            'multi': false,//设置为true将允许多文件上传

                            'onUploadSuccess': function (file, data, response) {//上传成功的回调
                                console.log(data);
                                $("#doc_preview_img_preview").attr("src", JSON.parse(data).url);


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
            </div>

        </div>

    </section>


</div>
@include('admin.footer')