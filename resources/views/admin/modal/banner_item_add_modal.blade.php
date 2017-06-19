<!-- 模态框（Modal） -->
<div class="modal fade" id="banner_add_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">新增轮播 <span style="color:red;padding-left:20px;font-size:14px">@{{banner_add_modal_msg}}</span></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" onsubmit="return false;">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">轮播名称</label>

                            <div class="col-sm-10">
                                <input type="text" name="" class="form-control" id="" placeholder="请输入轮播名称"
                                       ng-model="name" ng-pattern="/[a-zA-Z0-9\u4e00-\u9fa5]{2,16}/" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">描述</label>
                            <div class="col-sm-10">
                                <textarea name="remark" class="form-control" rows="3" placeholder="请输入描述信息"
                                          ng-model="remark" ng-minlength="5" ng-maxlength="100" required></textarea>
                            </div>
                        </div>
                    </div>


                </form>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" ng-click="bannerItemAddCommit()">提交</button>
            </div>
        </div>

    </div>

</div>
