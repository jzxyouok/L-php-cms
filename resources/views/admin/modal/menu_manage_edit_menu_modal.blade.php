<!-- 模态框（Modal） -->
<div class="modal fade" id="menu_manage_edit_menu_modal" tabindex="" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">编辑菜单项(<span ng-bind="menuWaitingForEdit.name"></span>)</h4>
            </div>
            <div class="modal-body">


                <form class="form-horizontal" onsubmit="return false;">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">菜单项名称</label>

                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="" placeholder=""
                                       ng-model="newMenuWaitingForEdit.name" ng-pattern="/[\u4e00-\u9fa5a-zA-Z0-9\-_]{2,20}/" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">URL</label>

                            <div class="col-sm-10">
                                <input type="text" name="" class="form-control" id="" placeholder=""
                                       ng-model="newMenuWaitingForEdit.url" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">打开方式</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="target" ng-model="target"
                                        ng-options="x.id as x.name for x in targetOptions" required>
                                    <option value="">-- 请选择 --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">父级菜单项</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="parent" ng-model="parent"
                                        ng-options="x.id as x.name for x in parentOptions" required>
                                    <option value="">-- 请选择 --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">排序值</label>

                            <div class="col-sm-10">
                                <input type="text" name="" class="form-control" id="" placeholder=""
                                       ng-model="newMenuWaitingForEdit.order" ng-pattern="/\d{1,1000}/" required>
                            </div>
                        </div>

                    </div>


                </form>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" ng-click="addMenu()">添加</button>
            </div>
        </div>

    </div>

</div>
