/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('menuManageService', ['$http', function ($http) {
    return {
        addMenu: function (name, url, taget, parent, order) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/add_menu',
                data: $.param({
                    name: name,
                    url: url,
                    target: taget,
                    parent: parent,
                    order: order
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        getMenu: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/doc_manage/get_menu',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },


    };


}]);