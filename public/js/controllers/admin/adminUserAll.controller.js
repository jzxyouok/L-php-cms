/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('adminUserAll', ['$scope', '$http', 'adminUserAllService', function ($scope, $http, adminUserAllService) {
    $scope.adminUserGet=function () {
        adminUserAllService.adminUserGet().then(function success(res) {
            $scope.data = res.data;

        }, function error(res) {

        });
    };



    $scope.logo = '/public/upload/image/author-avatar.jpg';




}]);