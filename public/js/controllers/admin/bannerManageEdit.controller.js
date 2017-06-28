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
        var bannerId = $('#banner_id').attr('value');

        $scope.sliderDataNewAll = $scope.sliderDataNewAll.concat($scope.selected);

        for (var i = 0; i < $scope.selected.length; i++) {
            var src = ($scope.selected[i].url.match(/\/public\/upload\/(image|zip|rar|pdf)\/\d{8}/))[0] + '/' + $scope.selected[i].filename_now;
            $scope.sliderDataNew.push({
                banner_id: bannerId,
                img_src: src,
                title: "",
                url: "",
                img_title: "",
                img_alt: "",


            });
        }
        $scope.selected = [];

        $scope.sliderDataExist = $scope.sliderDataExist.concat($scope.sliderDataNew);
        $scope.sliderDataNew = [];


        // for (var i = 0; i < $scope.bannerData.length; i++) {
        //     var url = ($scope.bannerData[i].url.match(/\/public\/upload\/(image|zip|rar|pdf)\/\d{8}/))[0];
        //     $('#banner_manage_edit .box-body tbody').append('<tr class="insert_slider"><td><div class="slider-img"><img src="' + url + '/' + $scope.bannerData[i].filename_now + '" title="" alt="Product Image"><a href=""><i class="fa fa-trash fa-fw fa-lg"></i></a></div></td><td><input type="text" name="slider_title" class="form-control input-sm" value="" id="" placeholder="请输入标题"></td><td><input type="text" name="slider_url" class="form-control input-sm" value=""  id="" placeholder="请输入URL"></td><td><input type="text" name="img_title" class="form-control input-sm" value=""  id="" placeholder="请输入title属性"></td><td><input type="text" name="img_alt" class="form-control input-sm"   value="" id="" placeholder="请输入alt属性"></td></tr>');
        // }

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
        // var insertSliderLength=0;
        // if ($scope.bannerData.length >= 1) {
        //     insertSliderLength=$scope.bannerData.length;
        //     $('.insert_slider').each(function () {
        //         // var sliderTitle=$(this).find('input[name="slider_title"]').val();
        //         // console.log(sliderTitle);
        //         console.log(111);
        //     });
        // }
        console.log($scope.sliderDataNewAll);
        if($scope.sliderDataNewAll.length>0){
            for (var i = 0; i < $scope.sliderDataNewAll.length; i++) {
                var src = ($scope.sliderDataNewAll[i].url.match(/\/public\/upload\/(image|zip|rar|pdf)\/\d{8}/))[0] + '/' + $scope.sliderDataNewAll[i].filename_now;
                $scope.sliderDataNewAllFormat.push({
                    banner_id: bannerId,
                    img_src: src,
                    title: "",
                    url: "",
                    img_title: "",
                    img_alt: "",


                });
            }
        }

        console.log($scope.sliderDataExistOriginal);
        bannerManageEditService.saveSlider(bannerId, $scope.sliderDataExist, $scope.sliderDataExistOriginal,$scope.sliderDataNewAllFormat).then(function success(res) {
if(res.data.code===1){
    $scope.bannerManageEditSaveMsg=res.data.msg;
    $scope.sliderDataNewAll=[];
    $scope.sliderDataNewAllFormat=[];
    $('#banner_manage_edit_save_modal').modal({
        keyboard: true
    });
}
        }, function error(res) {

        });

    };

    $scope.sliderGet = function () {
        var bannerId = $('#banner_id').attr('value');
        $scope.sliderDataNew = [];
        $scope.sliderDataNewAll = [];
        $scope.sliderDataNewAllFormat = [];

        bannerManageEditService.sliderGet(bannerId).then(function success(res) {
            $scope.sliderDataExist = res.data;
            $scope.sliderDataExistOriginal = res.data;
        }, function error(res) {

        });
    };

}]);