/**
 * Created by v_lljunli on 2017/4/27.
 */
app.controller('docWrite', ['$scope', '$http', 'docWriteService', 'categoryAllService', 'gatherManageService', function ($scope, $http, docWriteService, categoryAllService, gatherManageService) {

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

        $scope.cate = $scope.cateOptions[0].id;
    }, function error(res) {

    });

    $scope.type = {
        name: 'post'
    };

    $scope.docWrite = function () {


        if ($scope.myForm.$valid) {
            var Content = '';
            ue.ready(function () {
                Content = ue.getContent();
                $scope.content = Content;

            });
            $scope.previewImg = $('#doc_preview_img_preview').attr('src');

            docWriteService.get(
                $scope.type.name,
                $scope.title,
                $scope.previewImg,
                $scope.tag.split(','),
                $scope.category,
                $scope.abstract,
                $scope.keyword,
                $scope.view,
                $scope.author,
                $scope.from,
                $scope.content
            ).then(function success(res) {
                if (res.data.code === 1) {
window.location.href='/admin/manage/doc_manage/edit_doc/'+res.data.id;
                }

            }, function error(res) {

            });
        }


    };

    $scope.gatherDoc = function () {
        gatherManageService.getGather().then(function success(res) {
            if (res.data.code === 1) {
                $scope.gatherData = res.data.data;
                $scope.gatherOptions = [];


                for (var i = 0; i < res.data.data.length; i++) {
                    $scope.gatherOptions.push({
                        'name': res.data.data[i].site_name,
                        'id': res.data.data[i].id,

                    });
                }

                $scope.gather = $scope.gatherOptions[0].id;

            }
        }, function error(res) {

        });
    };
    $scope.gatherDocCommit = function () {
        docWriteService.gatherDocCommit($scope.gather, $scope.gatherUrl).then(function success(res) {
            if (res.data.code === 1) {
                $scope.title = res.data.gatheredData.title;
                ue.ready(function () {
                    ue.setContent(res.data.gatheredData.content, false);
                });
                $('#write_doc_gather_modal').modal('hide');
            }
        }, function error(res) {

        });
    };


}]);