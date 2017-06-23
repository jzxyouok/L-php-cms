/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('mediaManageAll', ['$scope', '$http', 'mediaManageAllService', function ($scope, $http, mediaManageAllService) {

    $scope.getAllMedia = function () {
        mediaManageAllService.getAllMedia().then(function success(res) {

            $scope.data = res.data;

            var unique = [];
            var uniqueYearMonth = [];
            for (var i = 0; i < $scope.data.length; i++) {
                var yearMonth = $scope.data[i].upload_time.slice(0, 7);
                if (unique.indexOf(yearMonth) === -1) {
                    unique.push(yearMonth);
                }
            }
            for (var j = 0; j < unique.length; j++) {
                var year = unique[j].slice(0, 4);
                var month = unique[j].slice(5, 7);
                uniqueYearMonth.push({name: year + '年' + month + '月', id: year + '-' + month});
            }
            uniqueYearMonth.unshift({
                name: '全部时间',
                id: 'allTime'
            });
            $scope.uniqueYearMonthOptions = uniqueYearMonth;
            $scope.unique_year_month = $scope.uniqueYearMonthOptions[0].id;//设置默认值
            $scope.mediaTypeOptions = [
                {
                    id: 'allFile', name: '所有文件'
                },
                {
                    id: 'image', name: '图片文件'
                },
                {
                    id: 'zip', name: 'ZIP压缩文件'
                },
                {
                    id: 'rar', name: 'RAR压缩文件'
                },
                {
                    id: 'pdf', name: 'PDF文件'
                },
                {
                    id: 'video', name: '视频文件'
                },
            ];
            $scope.media_type = $scope.mediaTypeOptions[0].id;//设置默认值

        }, function error(res) {

        });


    };

    $scope.filterData = function () {
        console.log($scope.media_type);
        mediaManageAllService.filterData($scope.media_type, $scope.unique_year_month).then(function success(res) {
            $scope.data = res.data;
            console.log($scope.data);
        }, function error(res) {

        });

    };
    $scope.listStyle = 1;
    $scope.changeListStyle = function (num) {
        num ? $scope.listStyle = 1 : $scope.listStyle = 0;
    };
    $scope.gotoMediaManageUpload=function () {
        window.location.href='/admin/manage/file_manage/media_manage_upload';
    };

}]);