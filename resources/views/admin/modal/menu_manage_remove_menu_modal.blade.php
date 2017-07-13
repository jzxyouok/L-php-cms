<!-- 模态框（Modal） -->
<div class="modal fade" id="menu_manage_remove_menu_modal" tabindex="" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">删除菜单项(<span ng-bind="menuWaitingForRemove.name"></span>)</h4>
            </div>
            <div class="modal-body"> 是否要删除该菜单项？</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" ng-click="removeMenuCommit()">删除</button>
            </div>
        </div>

    </div>

</div>
