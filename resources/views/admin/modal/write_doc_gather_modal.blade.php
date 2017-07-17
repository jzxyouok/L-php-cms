<!-- 模态框（Modal） -->
<div class="modal fade" id="write_doc_gather_modal" tabindex="" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">采集文章</h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" onsubmit="return false;">

                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">采集网站</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="gather" ng-model="gather"
                                        ng-options="x.id as x.name for x in gatherOptions">
                                    <option value="">-- 请选择 --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">URL</label>

                            <div class="col-sm-10">
                                <input type="text" name="" class="form-control" id="" placeholder=""
                                       ng-model="gatherUrl">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" ng-click="gatherDocCommit()">采集</button>
            </div>
        </div>

    </div>

</div>
