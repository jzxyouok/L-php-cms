<!-- 模态框（Modal） -->
<div class="modal fade" id="remove_one_doc_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">删除提醒</h4>
            </div>
            <div class="modal-body">


                <form class="form-horizontal" onsubmit="return false;">
                    <div class="box-body">


                        <div class="form-group">
                            <label class="col-sm-6">将要删除的文档是:</label>
                            <div class="col-sm-10" ng-bind="oneDoc.title"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-6">是否放入回收站？</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" ng-model="status.name"
                                               id="" value="1" ng-checked="true">
                                        是
                                    </label>
                                    <label>
                                        <input type="radio" name="status" ng-model="status.name"
                                               id="" value="0">
                                        否
                                    </label>

                                </div>
                            </div>
                        </div>


                    </div>


                </form>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" ng-click="removeOneDocCommit(oneDoc)">删除</button>
            </div>
        </div>

    </div>

</div>
