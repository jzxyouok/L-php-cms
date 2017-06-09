/**
 * Created by v_lljunli on 2017/5/10.
 */

/*
 * 用户登录
 * */
app.controller('adminLogin', ['$scope', '$http', 'adminLoginService', function ($scope,$http, adminLoginService) {

  $scope.login = function () {
    adminLoginService.get($scope.username,$scope.password,$scope.code).then(function success(res) {
      if (res.data.code === 1) {

        window.location.href = 'manage/basic_info';
      }
      else if(res.data.code === 0){

        $scope.msg=res.data.msg;
      }
    }, function error(res) {

    });



  };

  $scope.updateCode=function () {
      adminLoginService.updateCode().then(function success(res) {

      },function error(res) {

      });
  };

}]);