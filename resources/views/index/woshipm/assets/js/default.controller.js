app.controller('headerCtrl', ['$scope', '$timeout', function ($scope, $timeout) {

    $scope.loginOut = function () {
        console.log(1);

        $('body').prepend('<div class="overlay overlay--dark" id="login_iframe"><button class="overlayclose-btn button--close" id="collection_close">×</button><iframe id="top_login_frame" src="/user/login" width="600" height="400" scrolling="no" class="top_fc_box"></iframe></div>');


        $('#collection_close').on('click', function () {
            $('#login_iframe').remove();

        });


    };
}]);
app.controller('contentCtrl', ['$scope', '$timeout', function ($scope, $timeout) {
    $scope.collection = function () {

    };


}]);
app.controller('bannerCtrl', ['$scope', 'bannerService', function ($scope, bannerService) {
    $scope.getBanner = function () {
        bannerService.getBanner().then(function success(res) {
            if (res.data.code === 1) {
                $scope.mainBannerData = res.data.data;

            }
        }, function error(res) {

        });
    };


}]);