/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('editDoc', ['$scope', '$http', 'editDocService', 'categoryAllService', function ($scope, $http, editDocService, categoryAllService) {

    $scope.getDocById = function () {
        var id = $('#doc_id').val();

        editDocService.getDocById(id).then(function success(res) {
            if (res.data.code === 1) {
                $scope.type = {
                    name: String(res.data.data.type)
                };
                $scope.title = res.data.data.title;

                $('#edit_doc_preview_img_preview').attr('src', res.data.data.preview_img);
                $scope.tag = res.data.data.tag;
                $scope.abstract = res.data.data.abstract;
                $scope.keyword = res.data.data.keyword;
                $scope.view = res.data.data.view;
                $scope.author = res.data.data.author;
                $scope.from = res.data.data.from;
                $scope.tag = res.data.data.tag;
                ue.ready(function () {
                    ue.setContent(res.data.data.content, false);
                });
            }
        }, function error(res) {

        });
    };

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

        $scope.cateOptions = cate;

        $scope.category = $scope.cateOptions[0].id;
    }, function error(res) {

    });


    $scope.updateDoc = function () {

        ue.ready(function () {
            $scope.content = ue.getContent();
        });
        $scope.previewImg=$('#edit_doc_preview_img_preview').attr('src');
        var id = $('#doc_id').val();
        editDocService.updateDoc(
            id,
            $scope.type.name,
            $scope.title,
            $scope.previewImg,
            $scope.tag,
            $scope.category,
            $scope.abstract,
            $scope.keyword,
            $scope.view,
            $scope.author,
            $scope.from,
            $scope.content
        ).then(function success(res) {

        }, function error(res) {

        });
    };

}]);