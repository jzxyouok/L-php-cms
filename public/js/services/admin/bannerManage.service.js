/**
 * Created by v_lljunli on 2017/5/17.
 */
app.factory('bannerManageService', ['$http', function ($http) {
    return {
        bannerItemAddCommit: function (name, remark) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/banner_manage_add',
                data: $.param({
                    name: name,
                    remark: remark,

                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        bannerGet: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/doc_manage/banner_manage_get',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

    };
}]);