/*
 * 用户登录
 * */
app.controller('adminLogin', ['$scope', '$http', 'adminLoginService', function ($scope, $http, adminLoginService) {

    $scope.login = function () {
        adminLoginService.login($scope.username, $scope.password, $scope.code).then(function success(res) {
            if (res.data.code === 1) {

                window.location.href = 'manage/panel/basic_info';
            }
            else if (res.data.code === 0) {

                $scope.msg = res.data.msg;
            }
        }, function error(res) {

        });


    };

    $scope.updateCode = function () {
        adminLoginService.updateCode().then(function success(res) {
            if (res.data.code === 1) {
                $scope.base64 = res.data.base64;
            }
        }, function error(res) {

        });
    };



    $scope.getCode = function () {
        adminLoginService.getCode().then(function success(res) {
            if (res.data.code === 1) {
                $scope.base64 = res.data.base64;
            }
        }, function error(res) {

        });
    };






}]);