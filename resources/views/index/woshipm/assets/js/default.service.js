var app = angular.module('myApp', []);
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
