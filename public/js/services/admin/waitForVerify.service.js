/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('waitForVerifyService',['$http',function ($http) {
  return{


      getWaitForVerifyByLimitAndCurrentPage: function (limit, currentPage) {
          return $http({
              method: 'POST',
              url: '/admin/manage/doc_manage/get_wait_for_verify_doc',
              data: $.param({
                  limit: limit,
                  currentPage: currentPage,
              }),
              headers: {'content-type': 'application/x-www-form-urlencoded'}
          });
      },


  };
}]);