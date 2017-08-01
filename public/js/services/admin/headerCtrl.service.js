/**
 * Created by v_lljunli on 2017/5/15.
 */

app.factory('headerCtrlService', ['$http', function ($http) {
  return {
      adminLogout: function () {

      return $http({
        method:'GET',
        url:'/admin/manage/admin_logout',
        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
      });
    },



  }
}]);