/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('publishedService',['$http',function ($http) {
  return{

    /*
    * 根据每页显示数、第几页来获取已发布文档数据
    * */
      getPublishedByLimitAndCurrentPage:function (limit,currentPage) {
      return $http({
        method:'POST',
        url:'/admin/manage/doc_manage/get_published_doc',
        data:$.param({
          limit:limit,
            currentPage:currentPage,
        }),
        headers:{'content-type':'application/x-www-form-urlencoded'}
      });
    },
      recommend:function (isRec,id) {
          return $http({
              method:'POST',
              url:'/admin/manage/doc_manage/recommend_doc',
              data:$.param({
                  isRec:isRec,
                  id:id,

              }),
              headers:{'content-type':'application/x-www-form-urlencoded'}
          });
      },
    /*
    * 删除单篇文档
    * */
    removeOneDocument:function (doc) {
      return $http({
        method:'POST',
        url:'/admin/manage/document_manage/remove_one_document',
        data:$.param({
          data:doc,
        }),
        headers:{'content-type':'application/x-www-form-urlencoded'}
      });
    },

    /*
    * 单篇文档放入回收站
    * */
    putIntoRecycle:function (doc) {
      return $http({
        method:'POST',
        url:'/admin/manage/document_manage/put_into_recycle',
        data:$.param({
          data:doc,
        }),
        headers:{'content-type':'application/x-www-form-urlencoded'}
      });
    },




  };
}]);