/**
 * Created by v_lljunli on 2017/5/10.
 */
var app = angular.module('myApp', ['ngSanitize']);
app.factory('adminLoginService', ['$http', function ($http) {
  return {
    get: function (username,password,code) {

      return $http({
        method: 'POST',
        url:  'admin_login',
        data: $.param({
          username: username,
          password: password,
            code:code
        }),
        headers: {'content-type': 'application/x-www-form-urlencoded'}
      });
    },
    find:function () {

    },
  }
}]);