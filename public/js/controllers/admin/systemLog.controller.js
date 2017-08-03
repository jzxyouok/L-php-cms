app.controller('systemLogCtrl', ['$scope', '$http', 'systemLogService', function ($scope, $http, systemLogService) {

    $scope.getSystemLog = function () {
        systemLogService.getSystemLog().then(function success(res) {

        },function error(res) {

        });
    };


}]);