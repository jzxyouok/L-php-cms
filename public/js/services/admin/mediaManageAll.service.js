/**
 * Created by v_lljunli on 2017/5/10.
 */

app.factory('mediaManageAllService', ['$http', function ($http) {
    return {
        getAllMedia: function (limit) {

            return $http({
                method: 'GET',
                url: '/admin/manage/file_manage/media_manage_get',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

        filterData: function (type,time,limit) {
            return $http({
                method: 'POST',
                url: '/admin/manage/file_manage/media_manage_get_filter',
                data:$.param({
                    type_real:type,
                    upload_time:time,
                    limit:limit
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        goToPage:function (type,time,limit,page) {
            return $http({
                method: 'POST',
                url: '/admin/manage/file_manage/media_manage_get_filter_go_to_page',
                data:$.param({
                    type_real:type,
                    upload_time:time,
                    limit:limit,
                    page:page
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },


    }
}]);