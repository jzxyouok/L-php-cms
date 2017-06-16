<!-- 模态框（Modal） -->
<div class="modal fade" id="category_all_remove_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">删除提示</h4>
            </div>
            <div class="modal-body">

是否要删除：<span style="color:#3c8dbc;padding-left:10px;font-size:16px;font-weight: 700">@{{ category_for_remove.name }}</span>？
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary " ng-click="removeCommit()">删除</button>
            </div>
        </div>

    </div>

</div>
