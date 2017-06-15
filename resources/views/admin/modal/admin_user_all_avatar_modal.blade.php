<!-- 模态框（Modal） -->
<div class="modal fade" id="admin_user_all_avatar_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">头像上传()</h4>
            </div>
            <div class="modal-body">

                <div class="row">

                    <div class="col-sm-10">
                        <img src="@{{logo}}" alt="" class="img-circle col-sm-4" id="admin_user_all_avatar_upload_preview"/>
                        <p id="admin_user_all_avatar_upload"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>

        </div>

    </div>

</div>
