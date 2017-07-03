/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('editDocService', ['$http', function ($http) {
    return {
        getDocById: function (id) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/get_doc_by_id',
                data: $.param({
                    id: id,

                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

        updateDoc: function (id,type, title, previewImg, tag, category, abstract, keyword, view, author, from, content) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/update_doc',
                data: $.param({
                    id:id,
                    type: type,
                    title: title,
                    previewImg: previewImg,
                    tag: tag,
                    category: category,
                    abstract: abstract,
                    keyword: keyword,
                    view: view,
                    author: author,
                    from: from,
                    content: content
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

    };
}]);