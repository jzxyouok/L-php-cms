/**
 * Created by v_lljunli on 2017/5/10.
 */

app.factory('mediaManageAllService', ['$http', function ($http) {
    return {
        getAllMedia: function () {

            return $http({
                method: 'GET',
                url: '/admin/manage/file_manage/media_manage_get',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

        filterData: function (type,time) {
            return $http({
                method: 'POST',
                url: '/admin/manage/file_manage/media_manage_get_filter',
                data:$.param({
                    type_real:type,
                    upload_time:time
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

    }
}]);