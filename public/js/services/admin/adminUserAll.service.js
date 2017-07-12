/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('adminUserAllService', ['$http', function ($http) {
    return {
        adminUserGet: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/user_manage/admin_user_get',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
        uploadAvatarForAdminUser: function (id,avatar) {
            return $http({
                method: 'POST',
                url: '/admin/manage/user_manage/upload_avatar_for_admin_user',
                data:$.param({
                    id:id,
                    avatar:avatar
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
    };
}]);