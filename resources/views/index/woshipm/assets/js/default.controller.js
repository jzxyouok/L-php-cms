app.controller('registerCtrl', ['$scope', '$timeout', 'registerService', function ($scope, $timeout, registerService) {
    $scope.registerStyle = true;
    $scope.useEmail = function () {
        $scope.registerStyle = false;

    };
    $scope.usePhone = function () {
        $scope.registerStyle = true;

    };

}]);
app.controller('headerCtrl', ['$scope', '$timeout', 'headerService', function ($scope, $timeout, headerService) {

    $scope.loginOut = function () {


        $('body').prepend('<div class="overlay overlay--dark" id="login_iframe"><button class="overlayclose-btn button--close" id="collection_close">×</button><iframe id="top_login_frame" src="/user/login" width="600" height="400" scrolling="no" class="top_fc_box"></iframe></div>');


        $('#collection_close').on('click', function () {
            $('#login_iframe').remove();

        });


    };

    $scope.getCategory = function () {
        headerService.getCategory().then(function success(res) {
                $scope.showCategory = false;
                if (res.data.code === 1) {
                    $scope.category = res.data.data;
                }
            }, function error(res) {

            }
        );
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
app.controller('indexListCtrl', ['$scope', 'indexListService', function ($scope, indexListService) {
    $scope.getDocList = function () {
        indexListService.getDocList().then(function success(res) {
            if (res.data.code === 1) {
                $scope.indexDocList = res.data.data;

            }
        }, function error(res) {

        });
    };


}]);
app.controller('contentCtrl', ['$scope', 'contentService', '$sce', function ($scope, contentService, $sce) {
    $scope.getContent = function () {
        var id = $('#content_id').val();
        contentService.getContent(id).then(function success(res) {
            if (res.data.code === 1) {
                $scope.content = res.data.data;

            }
        }, function error(res) {

        });
    };


}]);
app.controller('authorBoardCtrl', ['$scope', 'authorBoardService', '$sce', function ($scope, authorBoardService, $sce) {
    $scope.getAuthor = function () {
        var id = $('#content_id').val();
        authorBoardService.getAuthor(id).then(function success(res) {
            if (res.data.code === 1) {
                $scope.content = res.data.data;

            }
        }, function error(res) {

        });
    };


}]);
app.controller('hotDocCtrl', ['$scope', 'hotDocService', function ($scope, hotDocService) {
    $scope.getHotDoc = function () {

        hotDocService.getHotDoc().then(function success(res) {
            if (res.data.code === 1) {
                $scope.hotList = res.data.data;

            }
        }, function error(res) {

        });
    };


}]);