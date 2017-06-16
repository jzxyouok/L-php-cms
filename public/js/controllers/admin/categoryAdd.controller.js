/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('categoryAdd', ['$scope', '$http', 'categoryAllService', '$sce', 'categoryAddService', function ($scope, $http, categoryAllService, $sce, categoryAddService) {

    /*
     * 格式化所有分类数据
     * */
    categoryAllService.getCategories().then(function success(res) {

        var data = res.data;
        var dataFormat = [];

        if (data.length !== 0) {

            for (var j = 0; j < data.length; j++) {
                if (data[j].parent === '0') {
                    dataFormat.push({
                        name: data[j].name,
                        id: data[j].slug,
                        slug: data[j].slug,
                         order: data[j].order,
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
                             order: data[z].order,
                        });

                    }

                }
            }
        }

        dataFormat.unshift({
            name: '无',
            id: '0',
            parent:0,
        });

        /*
         * 设置默认值
         * */
        $scope.cateOptions = dataFormat;
        console.log($scope.cateOptions);
        $scope.parent = $scope.cateOptions[0].id;
    }, function error(res) {

    });


    $scope.categoryAdd = function () {

        if ($scope.myForm.$valid) {
            categoryAddService.addCategory($scope.name, $scope.slug, $scope.order, $scope.parent, $scope.remark).then(function success(res) {
                if (res.data.code === 1) {
                    $scope.msg = res.data.msg;
                    $('#category_add_modal').modal({
                        keyboard: true
                    });
                } else {
                    $scope.msg = res.data.msg;
                    $('#category_add_modal').modal({
                        keyboard: true
                    });
                }
            }, function error(res) {

            });
        }

    };



    $scope.editCategoryCommit=function () {
        
    }
}]);