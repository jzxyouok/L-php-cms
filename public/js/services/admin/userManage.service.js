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
    };
}]);