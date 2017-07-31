<!-- 模态框（Modal） -->
<div class="modal fade" id="user_manage_avatar_modal" tabindex="" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">头像上传(@{{ username }})</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-10">
                        <img ng-src="@{{logo}}" alt="" class="img-circle col-sm-4"
                             id="admin_user_all_avatar_upload_preview"/>
                        <div id="admin_user_all_avatar_upload"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>

    </div>

</div>
