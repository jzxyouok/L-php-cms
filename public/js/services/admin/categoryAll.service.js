/**
 * Created by v_lljunli on 2017/5/17.
 */
app.factory('categoryAllService', ['$http', function ($http) {
    return {
        get: function (title, from, display, tags, img, parent, keywords, description, type, view, author, content) {
            $http({
                method: 'POST',
                url: 'admin/manage/articles_add',
                data: $.param({
                    title: title,
                    from: from,
                    display: display,
                    tags: tags,
                    img: img,
                    parent: parent,
                    keywords: keywords,
                    description: description,
                    type: type,
                    view: view,
                    author: author,
                    content: content
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

        /*
         * 获取所有分类数据
         * */
        getCategories: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/doc_manage/category_get',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        editCategoryCommit:function (id,name,slug,parent,order,remark) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/category_edit_commit',
                data:$.param({
                    id:id,
                    name:name,
                    slug:slug,
                    parent:parent,
                    order:order,
                    remark:remark
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        removeCommit:function (id) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/category_remove_commit',
                data:$.param({
                    id:id

                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

    };
}]);