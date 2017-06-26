/**
 * Created by v_lljunli on 2017/5/17.
 */
app.factory('bannerManageEditService', ['$http', function ($http) {
    return {
        saveSlider: function () {
            $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/banner_edit_save_slider',
                data: $.param({

                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },




    };
}]);