/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('adminUserAll', ['$scope', '$http', 'adminUserAllService', function ($scope, $http, adminUserAllService) {
    $scope.logo = '/public/upload/image/author-avatar.jpg';
    $scope.adminUserGet = function () {
        adminUserAllService.adminUserGet().then(function success(res) {
            $scope.data = res.data;

        }, function error(res) {

        });
    };
    $scope.uploadAvatar=function (x) {
        $scope.username=x.username;
        $scope.id=x.id;


        // adminUserAllService.uploadAvatar(x.id,avatar).then(function success(res) {
        //
        // }, function error(res) {
        //
        // });
    };
    $scope.uploadAvatarForAdminUser=function (avatar) {
        adminUserAllService.uploadAvatarForAdminUser($scope.id,avatar).then(function success(res) {

if(res.data.code===1){
    $('#admin_user_all_avatar_modal').modal('hide');
}
        }, function error(res) {

        });
    };

}]);