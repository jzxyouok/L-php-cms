/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('categoryAddService', ['$http', function ($http) {
  return {
    addCategory: function (name, slug, order, parent, remark) {

      return $http({
        method: 'POST',
        url: '/admin/manage/doc_manage/category_add',
        data: $.param({
          name: name,
          slug: slug,
          order: order,
          parent: parent,
          remark: remark
        }),
        headers: {'content-type': 'application/x-www-form-urlencoded'}
      });
    },

      editCategoryCommit: function (name, slug, order, parent, remark) {

          return $http({
              method: 'POST',
              url: '/admin/manage/doc_manage/category_edit',
              data: $.param({
                  name: name,
                  slug: slug,
                  order: order,
                  parent: parent,
                  remark: remark
              }),
              headers: {'content-type': 'application/x-www-form-urlencoded'}
          });
      },
  };
}]);