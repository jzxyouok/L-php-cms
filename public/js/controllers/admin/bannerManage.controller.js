/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('bannerManage', ['$scope', '$http', 'bannerManageService', function ($scope, $http, bannerManageService) {
    $scope.editBanner = function (x) {

       // $state.go('producer', {id: x.id});
        window.location.href = '/admin/manage/doc_manage/banner_manage_edit/'+x.id+'/'+x.name;

    };

    $scope.bannerItemAddCommit = function () {

        bannerManageService.bannerItemAddCommit($scope.name, $scope.remark).then(function success(res) {
            if (res.data.code === 1) {
                $('#banner_add_modal').modal('hide');

            } else {
                $scope.banner_add_modal_msg = res.data.msg;
            }
        }, function error(res) {

        });
    };
    $scope.bannerGet = function () {
        bannerManageService.bannerGet().then(function success(res) {
            $scope.bannerData = res.data;


        }, function error(res) {

        });
    };
}]);