app.controller('userManageCtrl', ['$scope', '$http', 'userManageService', function ($scope, $http, userManageService) {
    $scope.getUser = function () {
        userManageService.getUser().then(function success(res) {
            $scope.data = res.data;

        }, function error(res) {

        });
    };
}]);