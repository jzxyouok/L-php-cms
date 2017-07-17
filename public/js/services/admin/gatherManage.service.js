/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('gatherManageService',['$http',function ($http) {
  return {
    getGather:function () {
      return $http({
        method: 'GET',
        url: '/admin/manage/doc_manage/get_gather',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

      addGather:function (siteName,docTitle,docContent) {
          return $http({
              method: 'POST',
              url: '/admin/manage/doc_manage/add_gather',
              data:$.param({
                siteName:siteName,
                  docTitle:docTitle,
                  docContent:docContent,
              }),
              headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          });
      },
  };
}]);