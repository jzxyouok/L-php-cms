<!-- 模态框（Modal） -->
<div class="modal fade" id="user_manage_remove_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">提示</h4>
            </div>
            <div class="modal-body">
               删除用户不可恢复，请谨慎操作！！！

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary" ng-click="editCommit(user)">删除</button>
            </div>
        </div>

    </div>

</div>
