/**
 * Created by v_lljunli on 2017/5/17.
 */
app.controller('gatherManage', ['$scope', '$http', 'gatherManageService', function ($scope, $http, gatherManageService) {
    $scope.getGather = function () {
        gatherManageService.getGather().then(function success(res) {
            if (res.data.code === 1) {
                $scope.gatherData = res.data.data;


            }
        }, function error(res) {

        });
    };
    $scope.addGather = function () {
        gatherManageService.addGather($scope.siteName, $scope.docTitle, $scope.docContent).then(function success(res) {

        }, function error(res) {


        });
    };

    $scope.autoGather = function () {
        gatherManageService.autoGather($scope.siteName, $scope.docTitle, $scope.docContent).then(function success(res) {

        }, function error(res) {


        });
    };

}]);