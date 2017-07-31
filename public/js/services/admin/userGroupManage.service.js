app.factory('userGroupManageService', ['$http', function ($http) {
  return {
      addAdminUserGroup: function (id,name,pid,status,remark) {

          return $http({
              method:'POST',
              url:'/admin/manage/user_group_manage/add_user_group',
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

      getUserGroup: function () {
          return $http({
              method: 'GET',
              url: '/admin/manage/user_group_manage/get_user_group',
              headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          });
      },
      powerCommit: function (name,power) {

          return $http({
              method: 'POST',
              url: '/admin/manage/user_group_manage/modify_power',
              data:$.param({
                  name:name,
                  power:power
              }),
              headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          });
      },

      forbidden:function (name) {
          return $http({
              method: 'POST',
              data:$.param({
                  name:name
              }),
              url: '/admin/manage/user_group_manage/forbidden_status',
              headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          });
      },

      startUsing:function (name) {
          return $http({
              method: 'POST',
              data:$.param({
                  name:name
              }),
              url: '/admin/manage/user_group_manage/start_using',
              headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          });
      },

      editCommit:function (id,name,pid,remark) {
          return $http({
              method:'POST',
              url:'/admin/manage/user_group_manage/edit_user_group',
              data:$.param({
                  id:id,
                  name:name,
                  pid:pid,
                  remark:remark
              }),
              headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
          });
      },






  };
}]);