/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('menuManage', ['$scope', '$http', 'menuManageService', function ($scope, $http, menuManageService) {

    $scope.addMenu = function () {
        $scope.targetForAddMenuOptions = [
            {name: '新页面', id: 1},
            {name: '当前页', id: 0},

        ];
        $scope.targetForAddMenu = $scope.targetForAddMenuOptions[0].id;

        menuManageService.getParentMenu().then(function success(res) {
            $scope.parentForAddMenuOptions = [];
            if (res.data.code === 1) {

                for (var m = 0; m < res.data.data.length; m++) {
                    $scope.parentForAddMenuOptions.push({
                        name: res.data.data[m].name,
                        id: res.data.data[m].id,
                    });
                }
                $scope.parentForAddMenuOptions.unshift({name: '无', id: 0});

                $scope.parentForAddMenu = $scope.parentForAddMenuOptions[0].id;
            }
        }, function error(res) {

        });
        $scope.getMenu();
    };
    $scope.addMenuCommit = function () {
        menuManageService.addMenuCommit($scope.name, $scope.url, $scope.targetForAddMenu, $scope.parentForAddMenu, $scope.order).then(function success(res) {
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

        $scope.newMenuWaitingForEdit = extendCopy(x);

        $scope.targetForEditMenuOptions = [
            {name: '新页面', id: 1},
            {name: '当前页', id: 0},

        ];
        // console.log($scope.newMenuWaitingForEdit);
        // console.log($scope.targetForEditMenuOptions);
        for (var h = 0; h < $scope.targetForEditMenuOptions.length; h++) {
            if ($scope.targetForEditMenuOptions[h].id == $scope.menuWaitingForEdit.target) {
                // console.log(h);
                // console.log($scope.targetForEditMenuOptions);
                $scope.targetForEditMenu = $scope.targetForEditMenuOptions[h].id;
            }
        }

        menuManageService.getParentMenu().then(function success(res) {
            for (var z = 0; z < res.data.data.length; z++) {
                if ($scope.menuWaitingForEdit.id === res.data.data[z].id) {
                    res.data.data.splice(z, 1);

                }
            }
            $scope.parentForEditMenuOptions = [];
            if (res.data.code === 1) {

                for (var m = 0; m < res.data.data.length; m++) {
                    $scope.parentForEditMenuOptions.push({
                        name: res.data.data[m].name,
                        id: res.data.data[m].id,
                    });
                }
                console.log($scope.newMenuWaitingForEdit);
                console.log($scope.parentForEditMenuOptions);
                $scope.parentForEditMenuOptions.unshift({name: '无', id: 0});
                for (var h = 0; h < $scope.parentForEditMenuOptions.length; h++) {
                    if ($scope.parentForEditMenuOptions[h].id == $scope.menuWaitingForEdit.parent) {
                        $scope.parentForEditMenu = $scope.parentForEditMenuOptions[h].id;
                    }
                }

            }
        }, function error(res) {

        });
    };
    $scope.editMenuCommit = function () {
        menuManageService.editMenuCommit($scope.menuWaitingForEdit.id, $scope.newMenuWaitingForEdit.name, $scope.newMenuWaitingForEdit.url, $scope.targetForEditMenu, $scope.parentForEditMenu, $scope.newMenuWaitingForEdit.order).then(function success(res) {
            if (res.data.code === 1) {
                $('#menu_manage_edit_menu_modal').modal('hide');
                $scope.getMenu();
            }
        }, function error(res) {

        });
    };
}]);