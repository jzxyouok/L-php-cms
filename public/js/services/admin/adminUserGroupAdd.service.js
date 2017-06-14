/**
 * Created by v_lljunli on 2017/5/11.
 */


app.factory('adminUserGroupAddService', ['$http', function ($http) {
  return {
    get: function (id,name,pid,status,remark) {

      return $http({
        method:'POST',
        url:'admin_user_group_add',
        data:$.param({
          group_id:id,
          name:name,
          pid:pid,
          status:status,
          remark:remark
        }),
        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
      });
    },


    edit:function (id,name,pid,remark) {
      return $http({
        method:'POST',
        url:'/admin/manage/user_manage/user_group_edit',
        data:$.param({
          group_id:id,
          name:name,
          pid:pid,
          remark:remark
        }),
        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
      });
    },

  }
}]);