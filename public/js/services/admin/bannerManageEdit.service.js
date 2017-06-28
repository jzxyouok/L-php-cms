/**
 * Created by v_lljunli on 2017/5/17.
 */
app.factory('bannerManageEditService', ['$http', function ($http) {
    return {
        saveSlider: function (bannerId,sliderDataExist,sliderDataNewAllFormat) {
           return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/banner_edit_save_slider',
                data: $.param({

                    bannerId:bannerId,
                    sliderDataExist:sliderDataExist,
                    sliderDataNewAllFormat:sliderDataNewAllFormat
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        sliderGet: function (bannerId) {
        return $http({
            method: 'POST',
            url: '/admin/manage/doc_manage/banner_edit_slider_get',
            data: $.param({
                bannerId:bannerId,
            }),
            headers: {'content-type': 'application/x-www-form-urlencoded'}
        });
    },



    };
}]);