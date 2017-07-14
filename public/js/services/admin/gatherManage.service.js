/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('gatherManageService',['$http',function ($http) {
  return {
    startGather:function () {
      return $http({
        method: 'GET',
        url: '/admin/manage/doc_manage/start_gather',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

  };
}]);