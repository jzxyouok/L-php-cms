/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('menuManage', ['$scope', '$http', 'menuManageService', function ($scope, $http, menuManageService) {
    $scope.targetOptions = [
        {name: '新页面', id: 1},
        {name: '当前页', id: 2},

    ];
    $scope.target = $scope.targetOptions[0].id;//设置默认值


    $scope.parentOptions = [
        {name: '新页面', id: 1},
        {name: '当前页', id: 2},

    ];
    $scope.parentOptions.unshift({name: '无', id: 0});
    $scope.parent = $scope.parentOptions[0].id;//设置默认值
    $scope.addMenu = function () {
        menuManageService.addMenu($scope.name, $scope.url, $scope.target, $scope.parent, $scope.order).then(function success(res) {
            if (res.data.code === 1) {
                $('#menu_manage_add_menu_modal').modal('hide');
                $scope.getMenu();
            }
        }, function error(res) {

        });
    };
    $scope.getMenu = function () {
        menuManageService.getMenu().then(function success(res) {
            if (res.data.code === 1) {
                $scope.menuData = res.data.data;
                $scope.topMenuData = [];

                for (var i = 0; i < res.data.topMenu.length; i++) {
                    $scope.topMenuData.push(res.data.topMenu[i]);
                    for (var j = 0; j < res.data.data.length; j++) {
                        if (res.data.data[j].parent == res.data.topMenu[i].name) {
                            $scope.topMenuData.push(res.data.data[j]);
                        }
                    }
                }

            }

        }, function error(res) {

        });
    };
    $scope.removeMenu = function (x) {
        $scope.menuWaitingForRemove = x;
    };
    $scope.removeMenuCommit = function () {
        menuManageService.removeMenuCommit($scope.menuWaitingForRemove.id).then(function success(res) {
            if (res.data.code === 1) {
                $('#menu_manage_remove_menu_modal').modal('hide');
                $scope.getMenu();
            }
        }, function error(res) {

        });
    };
    $scope.editMenu = function (x) {
        $scope.menuWaitingForEdit = x;
        function extendCopy(p) {
            var c = {};
            for (var j in p) {
                c[j] = p[j];
            }
            c.uber = p;
            return c;
        }
        $scope.newMenuWaitingForEdit =extendCopy(x);
    };
    $scope.editMenuCommit = function () {
        menuManageService.editMenuCommit($scope.menuWaitingForEdit.id).then(function success(res) {
            if (res.data.code === 1) {
                $('#menu_manage_edit_menu_modal').modal('hide');
                $scope.getMenu();
            }
        }, function error(res) {

        });
    };
}]);