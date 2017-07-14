/**
 * Created by v_lljunli on 2017/5/17.
 */
app.controller('gatherManage', ['$scope', '$http', 'gatherManageService', function ($scope, $http, gatherManageService) {
    $scope.startGather=function(){
        gatherManageService.startGather().then(function success(res) {

        }, function error(res) {

        });
    };

}]);