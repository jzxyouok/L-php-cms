<!-- 模态框（Modal） -->
<div class="modal fade" id="banner_manage_edit_add_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">新增幻灯片 <span
                            style="color:red;padding-left:20px;font-size:14px">@{{banner_add_modal_msg}}</span></h4>
            </div>

            <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#revenue-chart" data-toggle="tab">上传文件</a></li>
                    <li><a href="#sales-chart" data-toggle="tab">媒体库</a></li>

                </ul>
                <div class="tab-content no-padding">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                        <img src="{postImg}}" alt="" class="img-circle col-sm-4"
                             id="lider_img_upload_preview"/>
                        <p id="slider_img_upload"></p></div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">2</div>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" ng-click="bannerItemAddCommit()">添加到轮播</button>
            </div>
        </div>

    </div>

</div>
