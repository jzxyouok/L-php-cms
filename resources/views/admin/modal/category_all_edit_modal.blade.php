<!-- 模态框（Modal） -->
<div class="modal fade" id="category_all_edit_modal" tabindex="" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">编辑分类(@{{category.name}})<span style="color:red;padding-left:20px;font-size:14px">@{{category_edit_msg}}</span></h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" onsubmit="return false;">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">分类名称</label>

                            <div class="col-sm-10">
                                <input type="text" name="name"  class="form-control" id="" placeholder=""
                                       ng-model="newCategory.name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">别名</label>

                            <div class="col-sm-10">
                                <input type="text" name="slug" class="form-control" id="" placeholder=""
                                       ng-model="newCategory.slug">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">父级分类</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="cate" ng-model="cate"
                                        ng-options="x.id as x.name for x in cateOptions">
                                    <option value="">-- 请选择 --</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">排序数字</label>

                            <div class="col-sm-10">
                                <input type="text" name="order" class="form-control" id="" placeholder=""
                                       ng-model="newCategory.order">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">描述</label>
                            <div class="col-sm-10">
                                <textarea name="remark" class="form-control" rows="3" placeholder=""
                                          ng-model="newCategory.remark"></textarea>
                            </div>
                        </div>
                    </div>


                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" ng-click="editCategoryCommit()">提交</button>
            </div>
        </div>

    </div>

</div>
