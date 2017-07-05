var app = angular.module('myApp', []);
app.filter('to_trusted', ['$sce', function ($sce) {
    return function (text) {
        return $sce.trustAsHtml(text);
    };
}]);
//确认密码一致校验
app.directive('pwCheck', [function () {
    return {
        require: 'ngModel',
        link: function (scope, elem, attrs, ctrl) {
            var firstPassword = '#' + attrs.pwCheck;
            elem.add(firstPassword).on('keyup', function () {
                scope.$apply(function () {
                    var v = elem.val()===$(firstPassword).val();
                    ctrl.$setValidity('pwmatch', v);
                });
            });
        }
    }
}]);


app.factory('registerService', ['$http', function ($http) {
    return {
        getCategory: function () {
            return $http({
                method: 'GET',
                url: '/index/get_category',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        register: function (registerStyle,account,password) {
            return $http({
                method: 'POST',
                url: '/user/register',
                data:$.param({
                    registerStyle:registerStyle,
                    account:account,
                    password:password,

                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        checkAccount: function (registerStyle,account) {
            return $http({
                method: 'POST',
                url: '/user/check_account',
                data:$.param({
                    registerStyle:registerStyle,
                    account:account,
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

    };
}]);
app.factory('headerService', ['$http', function ($http) {
    return {
        getCategory: function () {
            return $http({
                method: 'GET',
                url: '/index/get_category',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },



    };
}]);
app.factory('bannerService', ['$http', function ($http) {
    return {
        getBanner: function () {
            return $http({
                method: 'GET',
                url: '/index/banner_get',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },



    };
}]);
app.factory('indexListService', ['$http', function ($http) {
    return {
        getDocList: function () {
            return $http({
                method: 'GET',
                url: '/index/get_index_list',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },



    };
}]);
app.factory('contentService', ['$http', function ($http) {
    return {
        getContent: function (id) {
            return $http({
                method: 'POST',
                url: '/index/get_content',
                data:$.param({
                    id:id
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },



    };
}]);
app.factory('authorBoardService', ['$http', function ($http) {
    return {
        getAuthor: function (id) {
            return $http({
                method: 'POST',
                url: '/index/get_author',
                data:$.param({
                    id:id
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },



    };
}]);
app.factory('hotDocService', ['$http', function ($http) {
    return {
        getHotDoc: function () {
            return $http({
                method: 'GET',
                url: '/index/get_hot_doc',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },



    };
}]);





