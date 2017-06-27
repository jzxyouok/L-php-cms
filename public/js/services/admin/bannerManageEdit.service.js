/**
 * Created by v_lljunli on 2017/5/17.
 */
app.factory('bannerManageEditService', ['$http', function ($http) {
    return {
        saveSlider: function (bannerId,bannerTitle,bannerUrl,imgTitle,imgAlt) {
           return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/banner_edit_save_slider',
                data: $.param({
                    bannerId:bannerId,
                    bannerTitle:bannerTitle,
                    bannerUrl:bannerUrl,
                    imgTitle:imgTitle,
                    imgAlt:imgAlt
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },




    };
}]);