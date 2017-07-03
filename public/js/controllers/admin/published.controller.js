/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('published', ['$scope', '$http', 'publishedService', function ($scope, $http, publishedService) {
    $scope.limit = '5';
    $scope.currentPage = 1;
    /*
     * 按条件获取文档数据
     * */

    $scope.getPublishedByLimitAndCurrentPage = function (limit, currentPage) {

        publishedService.getPublishedByLimitAndCurrentPage(limit, currentPage).then(function success(res) {
            $scope.data = res.data.data;
            $scope.count = res.data.count;
            $scope.allPage = res.data.allPage;
            $scope.documentCountNum = res.data.documentCountNum;
            $scope.currentPage = currentPage;
        }, function error(res) {

        });
        $scope.currentPage = 1;

    };


    $scope.recommend = function (isRec, id, x) {
        publishedService.recommend(isRec, id).then(function success(res) {
            if (res.data.code === 1) {
                if (res.data.action === 1) {
                    x.recommend = '是';
                } else {
                    x.recommend = '否';
                }


            }
        }, function error(res) {

        });
    };
    $scope.hot = function (isRec, id, x) {
        publishedService.hot(isRec, id).then(function success(res) {
            if (res.data.code === 1) {
                if (res.data.action === 1) {
                    x.hot = '是';
                } else {
                    x.hot = '否';
                }


            }
        }, function error(res) {

        });
    };
    /*
     * 删除单篇文档
     * */
    $scope.removeOneDoc = function (doc) {
        $scope.oneDoc = doc;
        $('#remove_one_doc_modal').modal({
            keyboard: true
        });

    };
    /*
     * 删除单篇文档提交
     * */
    $scope.removeOneDocCommit = function (doc) {


        $scope.status = {
            name: '1',
        };
        if ($scope.status.name == 1) {
            publishedService.putIntoRecycle(doc).then(function success(res) {
                if (res.data.code === 1) {
                    $('#remove_one_doc_modal').modal('hide');
                    $scope.getPublishedByLimitAndCurrentPage($scope.limit,$scope.currentPage);
                }
            }, function error(res) {

            });
        } else {
            publishedService.removeOneDoc(doc).then(function success(res) {
                if (res.data.code === 1) {
                    $('#remove_one_doc_modal').modal('hide');
                    $scope.getPage();
                }
            }, function error(res) {

            });
        }

    };
    /*
     * 编辑文档
     * */
    $scope.edit = function (doc) {
        window.location.href = '/admin/manage/document_manage/edit/' + doc._id;

    };


}]);