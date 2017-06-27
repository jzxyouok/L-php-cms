/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('bannerManageEdit', ['$scope', '$http', 'bannerManageEditService', '$sce', 'mediaManageAllService', function ($scope, $http, bannerManageEditService, $sce, mediaManageAllService) {
    $scope.getAllMedia = function () {
        $scope.everyPageLimitOptions = [
            {
                id: '5', name: '每页显示5条数据'
            },
            {
                id: '10', name: '每页显示10条数据'
            },
            {
                id: '20', name: '每页显示20条数据'
            },
            {
                id: '50', name: '每页显示50条数据'
            }
        ];
        $scope.every_page_limit = $scope.everyPageLimitOptions[0].id;//设置默认值

        mediaManageAllService.getAllMedia().then(function success(res) {
            $scope.count = res.data.count;
            $scope.allPage = res.data.allPage;
            $scope.currentPage = 1;
            $scope.data = res.data.allMediaByLimit;
            $scope.dataUpload = res.data.upload;

            var unique = [];
            var uniqueYearMonth = [];
            for (var i = 0; i < $scope.dataUpload.length; i++) {
                var yearMonth = $scope.dataUpload[i].upload_time.slice(0, 7);
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
                    id: 'image', name: '图片文件'
                },

            ];
            $scope.media_type = $scope.mediaTypeOptions[0].id;//设置默认值

        }, function error(res) {

        });


    };
    $scope.filterData = function () {

        mediaManageAllService.filterData($scope.media_type, $scope.unique_year_month, $scope.every_page_limit).then(function success(res) {
            $scope.data = res.data.upload;
            $scope.count = res.data.count;
            $scope.allPage = res.data.allPage;
            $scope.currentPage = 1;
        }, function error(res) {

        });

    };
    $scope.listStyle = 1;
    $scope.changeListStyle = function (num) {
        num ? $scope.listStyle = 1 : $scope.listStyle = 0;
    };


    $scope.editBanner = function () {
        window.location.href = '/admin/manage/doc_manage/banner_manage_edit';
    };

    $scope.selectBanner = function (file) {

    };
    $scope.goToPage = function (page) {
        mediaManageAllService.goToPage($scope.media_type, $scope.unique_year_month, $scope.every_page_limit, page).then(function success(res) {
            $scope.data = res.data;
            $scope.currentPage = page;
        }, function error(res) {

        });
    };

    $scope.addToBanner = function () {
        $scope.bannerData = $scope.selected;
        $('#banner_manage_edit_add_modal').modal('hide');

    };

    $scope.selected = [];
    $scope.selectOnePicture = function (x) {

        if ($scope.selected.indexOf(x) == -1) {
            $scope.selected.push(x);
            return;
        }

        if ($scope.selected.indexOf(x) != -1) {
            var index = $scope.selected.indexOf(x);
            $scope.selected.splice(index, 1);

        }

    };


    $scope.sliders = [];
    $scope.saveSlider = function () {

        var bannerId = $('#banner_id').attr('value');
        bannerTitle=$scope.bannerTitle ||['',''];
        bannerUrl=$scope.bannerUrl ||['',''];
        imgTitle=$scope.imgTitle ||['',''];
        imgAlt=$scope.imgAlt ||['',''];
console.log(bannerTitle);
        console.log(bannerUrl);
        bannerManageEditService.saveSlider(bannerId,bannerTitle,bannerUrl,imgTitle,imgAlt).then(function success(res) {

        }, function error(res) {

        });

    };

}]);