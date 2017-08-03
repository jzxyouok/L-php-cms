app.controller('categoryManageCtrl', ['$scope', '$http', 'categoryManageService', function ($scope, $http, categoryManageService) {

    $scope.getCategories=function () {
        categoryManageService.getCategories().then(function success(res) {

            var data = res.data;
            var dataFormat = [];

            for (var j = 0; j < data.length; j++) {
                if (data[j].parent === '0') {
                    dataFormat.push({
                        name: data[j].name,
                        id: data[j].slug,
                        slug: data[j].slug,
                        parent: data[j].parent,
                        remark: data[j].remark,
                        order: data[j].order,
                        original_id: data[j].id,
                    });
                }

            }

            for (var m = 0; m < dataFormat.length; m++) {
                for (var z = 0; z < data.length; z++) {

                    if (dataFormat[m].id === data[z].parent) {
                        dataFormat.splice(m + 1, 0, {
                            name: '' + '└' + data[z].name,
                            id: data[z].slug,
                            slug: data[z].slug,
                            parent: data[z].parent,
                            remark: data[z].remark,
                            order: data[z].order,
                            original_id: data[z].id,
                        });

                    }

                }
            }

            $scope.data = dataFormat;

            var cate = dataFormat.slice(0);
            // console.log(cate);
            cate.unshift({
                name: '无',
                id: '0'
            });
            $scope.cateOptions = cate;
            //console.log($scope.cateOptions);
            $scope.cate = $scope.cateOptions[0].id;
        }, function error(res) {

        });
    };



    $scope.edit = function (x) {
        function extendCopy(p) {
            var c = {};
            for (var j in p) {
                c[j] = p[j];
            }
            c.uber = p;
            return c;
        }
        $scope.category = x;

        $scope.newCategory =extendCopy(x);


        if ($scope.newCategory.parent == 0) {
            $scope.cate = $scope.cateOptions[0].id;
        } else {
            for (var i = 0; i < $scope.cateOptions.length; i++) {
                if ($scope.cateOptions[i].slug === $scope.newCategory.parent) {
                    $scope.cate = $scope.cateOptions[i].id;
                }
            }
        }

    };

    $scope.editCategoryCommit = function () {

        categoryManageService.editCategoryCommit($scope.newCategory.original_id, $scope.newCategory.name, $scope.newCategory.slug, $scope.newCategory.parent, $scope.newCategory.order, $scope.newCategory.remark).then(function success(res) {
            if (res.data.code === 1) {
                $scope.getCategories();
                $('#category_all_edit_modal').modal('hide');
            } else {
                $scope.category_edit_msg = res.data.msg;
            }
        }, function error(res) {

        });
    };

    $scope.remove = function (x) {
        $scope.category_for_remove = x;
    };

    $scope.removeCommit = function () {
        categoryManageService.removeCommit($scope.category_for_remove.original_id).then(function success(res) {
            if (res.data.code === 1) {
                for (var i = 0; i < $scope.data.length; i++) {
                    if ($scope.data[i].original_id === $scope.category_for_remove.original_id) {
                        var index = i;
                        break;
                    }
                }
                $scope.data.splice(index, 1);
                $('#category_all_remove_modal').modal('hide');
            }
        }, function error(res) {

        });
    }

    $scope.addCategory = function () {

        if ($scope.myForm.$valid) {
            categoryManageService.addCategory($scope.name, $scope.slug, $scope.order, $scope.parent, $scope.remark).then(function success(res) {
                if (res.data.code === 1) {
                    $scope.msg = res.data.msg;
                    $('#category_add_modal').modal('hide');
                } else {
                    $scope.msg = res.data.msg;
                    $('#category_add_modal').modal('hide');
                }
            }, function error(res) {

            });
        }

    };

}]);