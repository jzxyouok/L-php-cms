/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('waitForVerify', ['$scope', '$http', 'waitForVerifyService', function ($scope, $http, waitForVerifyService) {
    $scope.limit = '5';
    $scope.currentPage = 1;

    $scope.getWaitForVerifyByLimitAndCurrentPage = function (limit, currentPage) {
        waitForVerifyService.getWaitForVerifyByLimitAndCurrentPage(limit, currentPage).then(function success(res) {
            $scope.data = res.data.data;
            $scope.count = res.data.count;
            $scope.allPage = res.data.allPage;
            $scope.documentCountNum = res.data.documentCountNum;
            $scope.currentPage = currentPage;
        }, function error(res) {

        });
        $scope.currentPage = 1;
    };

    $scope.removeOneDoc = function (doc) {
        $scope.oneDoc = doc;
        $('#remove_one_doc_modal').modal({
            keyboard: true
        });

    };

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

    $scope.editDoc = function (doc) {
        window.location.href = '/admin/manage/doc_manage/verify_doc/'+doc.id;

    };


}]);