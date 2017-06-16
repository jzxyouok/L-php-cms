/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('bannerManage', ['$scope', '$http', 'bannerManageService', '$sce', function ($scope, $http, bannerManageService, $sce) {
$scope.editBanner=function () {
window.location.href='/admin/manage/doc_manage/banner_manage_edit';
};

}]);