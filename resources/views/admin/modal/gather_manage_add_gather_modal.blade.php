<!-- 模态框（Modal） -->
<div class="modal fade" id="gather_manage_add_gather_modal" tabindex="" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加采集</h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" onsubmit="return false;">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">网站名称</label>

                            <div class="col-sm-10">
                                <input type="text" name="" class="form-control" id="" placeholder=""
                                       ng-model="siteName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">标题类名</label>

                            <div class="col-sm-10">
                                <input type="text" name="" class="form-control" id="" placeholder=""
                                       ng-model="docTitle">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">内容类名</label>

                            <div class="col-sm-10">
                                <input type="text" name="" class="form-control" id="" placeholder=""
                                       ng-model="docContent">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" ng-click="addGather()">添加</button>
            </div>
        </div>

    </div>

</div>
