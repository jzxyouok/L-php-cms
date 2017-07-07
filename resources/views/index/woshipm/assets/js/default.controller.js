app.controller('registerCtrl', ['$scope', '$timeout', 'registerService', '$interval', function ($scope, $timeout, registerService, $interval) {
    $scope.registerStyle = true;
    $scope.registerBtnStatus = true;
    $scope.registerSuccess = false;
    $scope.registerFail = false;
    $scope.exist = false;
    $scope.countDown = 3;
    $scope.useEmail = function () {
        $scope.registerStyle = false;

    };
    $scope.usePhone = function () {
        $scope.registerStyle = true;

    };
    $scope.register = function () {
        var account = '';
        var password = '';
        if ($scope.registerStyle) {
            account = $scope.phone;
            password = $scope.phonePassword;
        } else {
            account = $scope.email;
            password = $scope.emailPassword;
        }


        if ((account && password && $scope.registerForm.email.$valid && $scope.registerForm.emailPassword.$valid) || (account && password && $scope.registerForm.phone.$valid && $scope.registerForm.phonePassword.$valid)) {

            registerService.register($scope.registerStyle, account, password).then(function success(res) {
                if (res.data.code === 1) {
                    $scope.registerSuccess = true;
                    $interval(function () {
                        console.log($scope.countDown);
                        $scope.countDown--;
                        if ($scope.countDown == 0) {
                            window.location.href = '/me';
                        }

                    }, 1000);
                } else {
                    $scope.registerFail = true;
                }
            }, function error(res) {

            });
            $scope.registerBtnStatus = false;
        }


    };
    $scope.checkAccount = function () {
        var account = '';
        if ($scope.registerStyle) {
            account = $scope.phone;

        } else {
            account = $scope.email;

        }
        if ($scope.registerForm.email.$valid) {
            registerService.checkAccount($scope.registerStyle, account).then(function success(res) {
                if (res.data.code === 1) {
                    $scope.exist = false;
                } else {
                    $scope.exist = true;
                }
            }, function error(res) {

            });
        }

    };

}]);
app.controller('headerCtrl', ['$scope', '$timeout', 'headerService', function ($scope, $timeout, headerService) {

    $scope.loginOut = function () {


        $('body').prepend('<div class="overlay overlay--dark" id="login_iframe"><button class="overlayclose-btn button--close" id="collection_close">×</button><iframe id="top_login_frame" src="/user/login" width="600" height="400" scrolling="no" class="top_fc_box"></iframe></div>');


        $('#collection_close').on('click', function () {
            $('#login_iframe').remove();

        });


    };

    $scope.getMenu = function () {
        headerService.getMenu().then(function success(res) {
            $scope.mouse=false;

                if (res.data.code === 1) {

                    for (var m = 0; m < res.data.topData.length; m++) {
                        res.data.topData[m].has_childen = false;
                        res.data.topData[m].childen=[];
                    }
                    for (var i = 0; i < res.data.topData.length; i++) {
                        for (var j = 0; j < res.data.data.length; j++) {
                            if (res.data.data[j].parent == res.data.topData[i].name) {
                                res.data.topData[i].has_childen = true;
                                res.data.topData[i].childen.push(res.data.data[j]);
                            }
                        }
                    }
                    $scope.topMenu = res.data.topData;

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