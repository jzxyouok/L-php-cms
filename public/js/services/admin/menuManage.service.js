/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('menuManageService', ['$http', function ($http) {
    return {
        addMenuCommit: function (name, url, taget, parent, order) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/add_menu_commit',
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
        removeMenuCommit: function (id) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/remove_menu',
                data:$.param({
                    id:id
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        editMenuCommit: function (id,name,url,target,parent,order) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/edit_menu',
                data:$.param({
                    id:id,
                    name:name,
                    url:url,
                    target:target,
                    parent:parent,
                    order:order
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        getParentMenu: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/doc_manage/get_parent_menu',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

    };


}]);