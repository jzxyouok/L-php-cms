app.factory('systemLogService', ['$http', function ($http) {
    return {

        getSystemLog: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/system_setting/get_system_log',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },


    };
}]);