/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('adminUserAllService',['$http',function ($http) {
  return {
    get:function () {
      return $http({
        method: 'GET',
        url: 'admin_user_get',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

  };
}]);