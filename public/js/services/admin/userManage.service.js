app.factory('userManageService', ['$http', function ($http) {
    return {
        getUser: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/user_manage/get_user',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
    };
}]);