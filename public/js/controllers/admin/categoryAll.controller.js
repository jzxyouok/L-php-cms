/**
 * Created by v_lljunli on 2017/5/17.
 */
app.controller('categoryAll', ['$scope', '$http', 'categoryAllService', function ($scope, $http, categoryAllService) {
    categoryAllService.getCategories().then(function success(res) {

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


    $scope.edit = function (x) {
        $scope.category = x;
        if ($scope.category.parent == 0) {
            $scope.cate = $scope.cateOptions[0].id;
        } else {
            for (var i = 0; i < $scope.cateOptions.length; i++) {
                if ($scope.cateOptions[i].slug === $scope.category.parent) {
                    $scope.cate = $scope.cateOptions[i].id;
                }
            }
        }

    }
    $scope.editCategoryCommit = function (category) {

        categoryAllService.editCategoryCommit(category.original_id, category.name, category.slug, category.parent, category.order, category.remark).then(function success(res) {
if(res.data.code===1){
    $('#category_all_edit_modal').modal('hide');
}else{
    $scope.category_edit_msg=res.data.msg;
}
        }, function error(res) {

        });
    };

}]);