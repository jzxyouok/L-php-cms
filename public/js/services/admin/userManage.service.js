app.factory('userManageService', ['$http', function ($http) {
    return {
        getUser: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/user_manage/get_user',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },

        checkPhone: function (phone) {
            return $http({
                method: 'POST',
                url: '/admin/manage/user_manage/check_phone',
                data: $.param({
                    phone: phone
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
        checkEmail: function (email) {
            return $http({
                method: 'POST',
                url: '/admin/manage/user_manage/check_email',
                data: $.param({
                    email: email
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
        addUserCommit: function (userGroup,phone,email,nickname,password,status,remark) {
            return $http({
                method: 'POST',
                url: '/admin/manage/user_manage/add_user_commit',
                data: $.param({
                    user_group_id:userGroup,
                    phone:phone,
                    email: email,
                    nickname:nickname,
                    password:password,
                    status:status,
                    remark:remark
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
        forbidden:function (id) {
            return $http({
                method: 'POST',
                data:$.param({
                    id:id
                }),
                url: '/admin/manage/user_manage/forbidden_status',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },

        startUsing:function (id) {
            return $http({
                method: 'POST',
                data:$.param({
                    id:id
                }),
                url: '/admin/manage/user_manage/start_using',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
        editUserCommit: function (id,userGroup,phone,email,nickname,remark) {
            return $http({
                method: 'POST',
                url: '/admin/manage/user_manage/edit_user_commit',
                data: $.param({
                    id:id,
                    user_group_id:userGroup,
                    phone:phone,
                    email: email,
                    nickname:nickname,
                    remark:remark
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
        removeUserCommit: function (id) {
            return $http({
                method: 'POST',
                url: '/admin/manage/user_manage/remove_user_commit',
                data: $.param({
                    id:id,
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },

        uploadAvatarCommit: function (id,avatar) {
            return $http({
                method: 'POST',
                url: '/admin/manage/user_manage/upload_avatar_commit',
                data:$.param({
                    id:id,
                    avatar:avatar
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },


    };
}]);