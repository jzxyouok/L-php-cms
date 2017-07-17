/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('docWriteService', ['$http', function ($http) {
    return {
        get: function (type, title, previewImg, tag, category, abstract, keyword, view, author, from, content) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/write',
                data: $.param({
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

        gatherDocCommit: function (id,url) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/gather_doc_commit',
                data: $.param({
                    id: id,
                    url: url,

                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
    };
}]);