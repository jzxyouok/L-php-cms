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


}]);