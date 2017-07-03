var app = angular.module('myApp', []);
app.filter('to_trusted', ['$sce', function ($sce) {
    return function (text) {
        return $sce.trustAsHtml(text);
    };
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





