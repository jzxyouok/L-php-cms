/**
 * Created by v_lljunli on 2017/5/10.
 */
var app = angular.module('myApp', ['ngSanitize']);
// , function($interpolateProvider) {
//     $interpolateProvider.startSymbol('<%');
//     $interpolateProvider.endSymbol('%>');
// }


app.factory('adminLoginService', ['$http', function ($http) {
    return {
        get: function (username, password, code) {

            return $http({
                method: 'POST',
                url: 'admin_login',
                data: $.param({
                    username: username,
                    password: password,
                    code: code
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        updateCode: function () {
            return $http({
                method: 'POST',
                url: 'admin_login_update_code',
                data: $.param({
                    data: Math.random()
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },


        getCode: function () {
            return $http({
                method: 'POST',
                url: 'admin_login_get_code',
                data: $.param({
                    data: Math.random()
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
    }
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('adminUserAddService',['$http',function ($http) {
  return {
    get:function (username,nickname,logo,password,repassword,userGroup,status,phone,email,remark) {
      return $http({
        method: 'POST',
        url: 'add',
        data: $.param({
          adminUser_username: username,
          adminUser_nickname: nickname,
          adminUser_avatar:logo,
          adminUser_password: password,
          adminUser_repassword: repassword,
          adminUser_userGroup: userGroup,
          adminUser_status: status,
          adminUser_phone: phone,
          adminUser_email: email,
          adminUser_remark: remark
        }),
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

  };
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('adminUserAllService', ['$http', function ($http) {
    return {
        adminUserGet: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/user_manage/admin_user_get',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
        uploadAvatarForAdminUser: function (id,avatar) {
            return $http({
                method: 'POST',
                url: '/admin/manage/user_manage/upload_avatar_for_admin_user',
                data:$.param({
                    id:id,
                    avatar:avatar
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        },
    };
}]);
/**
 * Created by v_lljunli on 2017/5/11.
 */


app.factory('adminUserGroupAddService', ['$http', function ($http) {
  return {
    get: function (id,name,pid,status,remark) {

      return $http({
        method:'POST',
        url:'admin_user_group_add',
        data:$.param({
          group_id:id,
          name:name,
          pid:pid,
          status:status,
          remark:remark
        }),
        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
      });
    },


    edit:function (id,name,pid,remark) {
      return $http({
        method:'POST',
        url:'/admin/manage/user_manage/user_group_edit',
        data:$.param({
          group_id:id,
          name:name,
          pid:pid,
          remark:remark
        }),
        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
      });
    },

  }
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('adminUserGroupAllService', ['$http', function ($http) {
  return {

    /*
     * 获取用户组数据
     * */
    get: function () {
      return $http({
        method: 'GET',
        url: 'admin_user_group_get',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

    /*
     *修改用户组名称及修改用户组权限
     * */
    modify: function (name,power) {

      return $http({
        method: 'POST',
        url: '/admin/manage/user_manage/modify_power',
        data:$.param({
          name:name,
          power:power
        }),
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

    forbidden:function (name) {
      return $http({
        method: 'POST',
        data:$.param({
          name:name
        }),
        url: '/admin/manage/user_manage/forbidden_status',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

    startUsing:function (name) {
      return $http({
        method: 'POST',
        data:$.param({
          name:name
        }),
        url: 'start_using',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },




  };
}]);
/**
 * Created by v_lljunli on 2017/5/17.
 */
app.factory('bannerManageService', ['$http', function ($http) {
    return {
        bannerItemAddCommit: function (name, remark) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/banner_manage_add',
                data: $.param({
                    name: name,
                    remark: remark,

                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        bannerGet: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/doc_manage/banner_manage_get',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

    };
}]);
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
/**
 * Created by v_lljunli on 2017/5/17.
 */
app.factory('basicInfoService', ['$http', function ($http) {
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




    };
}]);
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
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('documentAllService',['$http',function ($http) {
  return{

    /*
    * 根据每页显示数、第几页来获取文档数据
    * */
    postLimitAndPage:function (limit,page) {
      return $http({
        method:'POST',
        url:'/admin/manage/document_manage/get_yes_display_document',
        data:$.param({
          limit:limit,
          page:page,
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
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('documentEditService', ['$http', function ($http) {
  return {
    get: function (title, from, display, hot, recommend, tags, img, category, keywords, abstract, type, view, author, content) {
      return $http({
        method: 'POST',
        url: '/admin/manage/document_manage/write',
        data: $.param({
          document_title: title,
          document_from: from,
          document_display: display,
          document_hot: hot,
          document_recommend: recommend,
          document_tags: tags,
          document_img: img,
          document_category: category,
          document_keywords: keywords,
          document_abstract: abstract,
          document_type: type,
          document_view: view,
          document_author: author,
          document_content: content
        }),
        headers: {'content-type': 'application/x-www-form-urlencoded'}
      });
    },


    /*
     * 发送post请求到edit页面，以传递所编辑的那篇文档
     * */
    postEditId: function (id) {
      return $http({
        method: 'POST',
        url: '/admin/manage/document_manage/edit/',
        data: $.param({
          id: id,
        }),
        headers: {'content-type': 'application/x-www-form-urlencoded'}
      });
    },

    /*
     * 更新文档
     * */
    update: function (id, title, from, display, hot, recommend, tags,category, keywords, abstract, type, view, author,content) {
      return $http({
        method: 'POST',
        url: '/admin/manage/document_manage/update/',
        data: $.param({
          id: id,
          title: title,
          from: from,
          display: display,
          hot: hot,
          recommend: recommend,
          tags: tags,
          category:category,
          keywords: keywords,
          abstract: abstract,
          type: type,
          view: view,
          author: author,
          content:content,
        }),
        headers: {'content-type': 'application/x-www-form-urlencoded'}
      });
    }


  };


}]);
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
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('draftService',['$http',function ($http) {
  return{

    /*
    * 根据每页显示数、第几页来获取已发布文档数据
    * */
    postLimitAndPage:function (limit,page) {
      return $http({
        method:'POST',
        url:'/admin/manage/document_manage/get_draft_document',
        data:$.param({
          limit:limit,
          page:page,
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
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('gatherManageService',['$http',function ($http) {
  return {
    getGather:function () {
      return $http({
        method: 'GET',
        url: '/admin/manage/doc_manage/get_gather',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

      addGather:function (siteName,docTitle,docContent) {
          return $http({
              method: 'POST',
              url: '/admin/manage/doc_manage/add_gather',
              data:$.param({
                siteName:siteName,
                  docTitle:docTitle,
                  docContent:docContent,
              }),
              headers: {'Content-Type': 'application/x-www-form-urlencoded'}
          });
      },
  };
}]);
/**
 * Created by v_lljunli on 2017/5/15.
 */

app.factory('headerCtrlService', ['$http', function ($http) {
  return {
    logout: function () {

      return $http({
        method:'GET',
        url:'/admin/manage/logout',
        headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
      });
    },



  }
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */

app.factory('mediaManageAllService', ['$http', function ($http) {
    return {
        getAllMedia: function (limit) {

            return $http({
                method: 'GET',
                url: '/admin/manage/file_manage/media_manage_get',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

        filterData: function (type,time,limit) {
            return $http({
                method: 'POST',
                url: '/admin/manage/file_manage/media_manage_get_filter',
                data:$.param({
                    type_real:type,
                    upload_time:time,
                    limit:limit
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        goToPage:function (type,time,limit,page) {
            return $http({
                method: 'POST',
                url: '/admin/manage/file_manage/media_manage_get_filter_go_to_page',
                data:$.param({
                    type_real:type,
                    upload_time:time,
                    limit:limit,
                    page:page
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },


    }
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */

app.factory('mediaManageService', ['$http', function ($http) {
  return {
    get: function (password,repassword) {

      return $http({
        method: 'POST',
        url:  '/admin/manage/panel/password_modify',
        data: $.param({
          adminUser_password: password,
          adminUser_repassword: repassword
        }),
        headers: {'content-type': 'application/x-www-form-urlencoded'}
      });
    },

  }
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('menuManageService', ['$http', function ($http) {
    return {
        addMenuCommit: function (name, url, taget, parent, order) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/add_menu_commit',
                data: $.param({
                    name: name,
                    url: url,
                    target: taget,
                    parent: parent,
                    order: order
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        getMenu: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/doc_manage/get_menu',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        removeMenuCommit: function (id) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/remove_menu',
                data:$.param({
                    id:id
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        editMenuCommit: function (id,name,url,target,parent,order) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/edit_menu',
                data:$.param({
                    id:id,
                    name:name,
                    url:url,
                    target:target,
                    parent:parent,
                    order:order
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        getParentMenu: function () {
            return $http({
                method: 'GET',
                url: '/admin/manage/doc_manage/get_parent_menu',
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

    };


}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */

app.factory('modifyPasswordService', ['$http', function ($http) {
  return {
    get: function (password,repassword) {

      return $http({
        method: 'POST',
        url:  '/admin/manage/panel/password_modify',
        data: $.param({
          adminUser_password: password,
          adminUser_repassword: repassword
        }),
        headers: {'content-type': 'application/x-www-form-urlencoded'}
      });
    },

  }
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('noAccessService',['$http',function ($http) {
  return{

    /*
    * 根据每页显示数、第几页来获取已发布文档数据
    * */
    postLimitAndPage:function (limit,page) {
      return $http({
        method:'POST',
        url:'/admin/manage/document_manage/get_no_access_document',
        data:$.param({
          limit:limit,
          page:page,
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
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('publishedService', ['$http', function ($http) {
    return {

        /*
         * 根据每页显示数、第几页来获取已发布文档数据
         * */
        getPublishedByLimitAndCurrentPage: function (limit, currentPage) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/get_published_doc',
                data: $.param({
                    limit: limit,
                    currentPage: currentPage,
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        recommend: function (isRec, id) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/recommend_doc',
                data: $.param({
                    isRec: isRec,
                    id: id,

                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        hot: function (isRec, id) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/hot_doc',
                data: $.param({
                    isRec: isRec,
                    id: id,

                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        /*
         * 删除单篇文档
         * */
        removeOneDoc: function (doc) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/remove_one_document',
                data: $.param({
                    doc: doc,
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },

        /*
         * 单篇文档放入回收站
         * */
        putIntoRecycle: function (doc) {
            return $http({
                method: 'POST',
                url: '/admin/manage/doc_manage/put_into_recycle',
                data: $.param({
                    doc: doc,
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },


    };
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('recycleService',['$http',function ($http) {
  return{

    /*
    * 根据每页显示数、第几页来获取回收站文档数据
    * */
    postLimitAndPage:function (limit,page) {
      return $http({
        method:'POST',
        url:'/admin/manage/document_manage/get_no_display_document',
        data:$.param({
          limit:limit,
          page:page,
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



  };
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('waitForVerifyService',['$http',function ($http) {
  return{

    /*
    * 根据每页显示数、第几页来获取已发布文档数据
    * */
    postLimitAndPage:function (limit,page) {
      return $http({
        method:'POST',
        url:'/admin/manage/document_manage/get_wait_for_verify_document',
        data:$.param({
          limit:limit,
          page:page,
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
/**
 * Created by v_lljunli on 2017/4/25.
 */
/*
 * L-blog 自定义指令
 * */

//确认密码一致校验
app.directive('pwCheck', [function () {
    return {
        require: 'ngModel',
        link: function (scope, elem, attrs, ctrl) {
            var firstPassword = '#' + attrs.pwCheck;
            elem.add(firstPassword).on('keyup', function () {
                scope.$apply(function () {
                    var v = elem.val() === $(firstPassword).val();
                    ctrl.$setValidity('pwmatch', v);
                });
            });
        }
    }
}]);


/**
 * Created by v_lljunli on 2017/5/17.
 */
app.filter('trustHtml', function ($sce) {
    return function (input) {
        return $sce.trustAsHtml(input);
    }
});

app.filter('sizeFormat', function () { //可以注入依赖
    return function (text) {
        return Math.round(text / 1024) + ' KB';
    }
});
app.filter('urlCut', function () { //可以注入依赖
    return function (text) {

        return (text.match(/\/public\/upload\/(image|zip|rar|pdf)\/\d{8}/))[0];
    }
});
app.filter('urlCutNoNumber', function () { //可以注入依赖
    return function (text) {

        return (text.match(/\/public\/upload\/(zip|rar|pdf)/))[0];

    }
});
//$sce是angularJS自带的安全处理模块，$sce.trustAsHtml(input)方法便是将数据内容以html的形式进行解析并返 回  。
/**
 * Created by v_lljunli on 2017/5/10.
 */

/*
 * 用户登录
 * */
app.controller('adminLogin', ['$scope', '$http', 'adminLoginService', function ($scope, $http, adminLoginService) {

    $scope.login = function () {
        adminLoginService.get($scope.username, $scope.password, $scope.code).then(function success(res) {
            if (res.data.code === 1) {

                window.location.href = 'manage/panel/basic_info';
            }
            else if (res.data.code === 0) {

                $scope.msg = res.data.msg;
            }
        }, function error(res) {

        });


    };

    $scope.updateCode = function () {
        adminLoginService.updateCode().then(function success(res) {
            if (res.data.code === 1) {
                $scope.base64 = res.data.base64;
            }
        }, function error(res) {

        });
    };



    $scope.getCode = function () {
        adminLoginService.getCode().then(function success(res) {
            if (res.data.code === 1) {
                $scope.base64 = res.data.base64;
            }
        }, function error(res) {

        });
    };






}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */

/*
 * 添加用户
 * */
app.controller('adminUserAdd', ['$scope','$http','adminUserAddService',function ($scope, $http,adminUserAddService) {

  /*
   * 提交数据
   * */
  $scope.addAdminUser = function () {

    var adminUser_userGroup = 1;

    switch ($scope.adminUser_userGroup) {
      case 1:
        adminUser_userGroup = '超级管理员';
        break;
      case 2:
        adminUser_userGroup = '网站管理员';
        break;
      case 3:
        adminUser_userGroup = '内容管理员';
        break;
      case 4:
        adminUser_userGroup = '投稿员';
        break;
    }


    if ($scope.myForm.$valid) {
        adminUserAddService.get($scope.adminUser_username,$scope.adminUser_nickname,$scope.logo,$scope.adminUser_password,$scope.adminUser_repassword,adminUser_userGroup,$scope.adminUser_status,$scope.adminUser_phone,$scope.adminUser_email,$scope.adminUser_remark).then(function (res) {

      }, function (res) {

      });


    } else {
      return false;
    }

  };

  $scope.userGroupOptions = [
    {name: '超级管理员', id: 1},
    {name: '网站管理员', id: 2},
    {name: '内容管理员', id: 3},
    {name: '投稿员', id: 4}
  ];
  $scope.adminUser_userGroup = $scope.userGroupOptions[0].id;//设置默认值


  $scope.statusOptions = [
    {name: '启用', id: 1},
    {name: '禁用', id: 0},
  ];
  $scope.adminUser_status = $scope.statusOptions[0].id;//设置默认值

  /*
   * 监听对用户名的输入，判断用户名是否已经存在
   * */

  $scope.checkUsername = function (usernmae) {
    var realUsername = $.trim(usernmae);
    $scope.isUsernameExist = false;
    if (realUsername == '') {
      return false;
    } else {
      $http({
        method: 'POST',
        url: 'add',
        data: $.param({
          adminUser_username: realUsername
        }),
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      }).then(function (res) {
        if (res.data.code == 0) {
          $scope.isUsernameExist = true;
        }
      }, function (res) {

      });
    }
  };

  /*
  * 头像上传
  * */
  $scope.logo = '/upload/images/defaultlogo.png';

  $('#admin_user_add_avatar_upload').uploadify({

    'swf': '/plugins/uploadify/uploadify.swf',//指定swf文件
    'uploader': '/admin/manage/users_manage/upload' + '?adminId=' + 'adminUser_username' + '&type=' + 'images' + '&key=' + 'adminUser_avatar',//后台处理的页面
    'buttonText': '上传图片',//按钮显示的文字
    'buttonClass': 'uploadify-btn-default',//按钮显示的文字
    'width': 100,//显示的高度和宽度，默认 height 30；width 120
    'height': 30,//显示的高度和宽度，默认 height 30；width 120
    'fileTypeDesc': 'Image Files',//上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
    'fileTypeExts': '*.gif; *.jpg; *.png',//允许上传的文件后缀
    'fileSizeLimit': '2000KB',//上传文件大小限制
    'auto': true,//选择文件后自动上传
    'multi': false,//设置为true将允许多文件上传

    'onUploadSuccess': function (file, data, response) {//上传成功的回调
      $("#adminUser_avatar_preview").attr("src", data);
      $scope.logo= data;

    },
    //
    // 'onComplete': function(event, queueID, fileObj, response, data) {//当单个文件上传完成后触发
    //   //event:事件对象(the event object)
    //   //ID:该文件在文件队列中的唯一表示
    //   //fileObj:选中文件的对象，他包含的属性列表
    //   //response:服务器端返回的Response文本，我这里返回的是处理过的文件名称
    //   //data：文件队列详细信息和文件上传的一般数据
    //   alert("文件:" + fileObj.name + " 上传成功！");
    // },
    //
    // 'onUploadError' : function(file, errorCode, errorMsg, errorString) {//上传错误
    //   alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
    // },
    //
    // 'onError': function(event, queueID, fileObj) {//当单个文件上传出错时触发
    //   alert("文件:" + fileObj.name + " 上传失败！");
    // }


  });

}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('adminUserAll', ['$scope', '$http', 'adminUserAllService', function ($scope, $http, adminUserAllService) {
    $scope.logo = '/public/upload/image/author-avatar.jpg';
    $scope.adminUserGet = function () {
        adminUserAllService.adminUserGet().then(function success(res) {
            $scope.data = res.data;

        }, function error(res) {

        });
    };
    $scope.uploadAvatar=function (x) {
        $scope.username=x.username;
        $scope.id=x.id;


        // adminUserAllService.uploadAvatar(x.id,avatar).then(function success(res) {
        //
        // }, function error(res) {
        //
        // });
    };
    $scope.uploadAvatarForAdminUser=function (avatar) {
        adminUserAllService.uploadAvatarForAdminUser($scope.id,avatar).then(function success(res) {

if(res.data.code===1){
    $('#admin_user_all_avatar_modal').modal('hide');
}
        }, function error(res) {

        });
    };

}]);
/**
 * Created by v_lljunli on 2017/5/11.
 */


app.controller('adminUserGroupAdd',['$scope','$http','adminUserGroupAddService',function($scope,$http,adminUserGroupAddService) {
  $scope.statusOptions = [
    {name:'启用',id:1},
    {name:'禁用',id:0},
  ];
  $scope.status=$scope.statusOptions[0].id;//设置默认值
  $scope.pidOptions = [
    {name:'无',id:0},
    {name:'超级管理员',id:1},
    {name:'网站管理员',id:2},
    {name:'内容管理员',id:3},
    {name:'投稿员',id:4}
  ];
  $scope.pid=$scope.pidOptions[0].id;//设置默认值

  $scope.addAdminUserGroup=function () {
    var name=$scope.name;
    var pid=$scope.pid;
    var status=$scope.status;
    var remark=$scope.remark;
    var group_id='超级管理员';
    switch (name){
      case '超级管理员':
        group_id=1;
        break;
      case '网站管理员':
        group_id=2;
        break;
      case '内容管理员':
        group_id=3;
        break;

    }
      adminUserGroupAddService.get(group_id,name,pid,status,remark).then(function(res) {
      if(res.data.code===true){
        $scope.msg=res.data.msg;
          $('#admin_user_group_add_modal').modal({
              keyboard: true
          });
      }else if(res.data.code===false){
          $scope.msg=res.data.msg;
          $('#admin_user_group_add_modal').modal({
              keyboard: true
          });
      }

    },function(res) {

    });
  };

  $('#myModal').on('hidden.bs.modal', function () {
    window.location = "/admin/users_group"
  });
  $('#myModal').on('hide.bs.modal', function () {
    window.location = "/admin/users_group"
  });
}]);

/**
 * Created by v_lljunli on 2017/5/10.
 */

/*
 * 所有用户组
 * */
app.controller('usersGroup', ['$scope', '$http', 'adminUserGroupAllService', 'adminUserGroupAddService', function ($scope, $http, adminUserGroupAllService, adminUserGroupAddService) {

    getUserGroup();

    /*
     * ztree插件配置
     * */
    var setting = {
        check: {
            enable: true,
            chkStyle: "checkbox",
            chkboxType: {"Y": "ps", "N": "ps"}
        },
        data: {
            simpleData: {
                enable: true
            }
        },
        callback: {}
    };
    var zNodes = [
        {
            id: 'panel', pId: 0, name: "仪表盘", open: true,
            children: [
                {id: 'basic_info', pId: 'panel', name: "基本信息"},
                {id: 'modify_password', pId: 'panel', name: "修改密码"},

            ]
        },
        {
            id: 'user_manage', pId: 0, name: "用户管理", open: true,
            children: [

                {id: 'admin_user_group_all', pId: 'user_manage', name: "所有用户组"},
                {id: 'admin_user_group_add', pId: 'user_manage', name: "添加用户组"},
                {id: 'admin_user_all', pId: 'user_manage', name: "所有用户"},
                {id: 'admin_user_add', pId: 'user_manage', name: "添加用户"},


            ]
        },
        {
            id: 'doc_manage', pId: 0, name: "文档管理", open: true,
            children: [
                {
                    id: 'category_manage', pId: 'doc_manage', name: "分类管理", open: true,
                    children: [
                        {id: 'doc_category_all', pId: 'category_manage', name: "文档分类"},
                        {id: 'doc_category_add', pId: 'category_manage', name: "添加分类"},

                    ]
                },
                {
                    id: 'menu_manage', pId: 'doc_manage', name: "菜单管理", open: true,
                    children: [
                        {id: 'menu_edit', pId: 'menu_manage', name: "编辑菜单"},
                        {id: 'menu_location', pId: 'menu_manage', name: "菜单位置"},

                    ]
                },

                {id: 'tag_manage', pId: 'doc_manage', name: "标签管理"},
                {id: 'comment_manage', pId: 'doc_manage', name: "评论管理"},
                {id: 'message_manage', pId: 'doc_manage', name: "消息管理"},
                {id: 'write', pId: 'doc_manage', name: "写文档"},
                {id: 'published', pId: 'doc_manage', name: "已发布"},
                {id: 'wait_for_verify', pId: 'doc_manage', name: "待审核"},
                {id: 'no_access', pId: 'doc_manage', name: "未通过"},

                {id: 'draft', pId: 'doc_manage', name: "草稿箱"},
                {id: 'recycle', pId: 'doc_manage', name: "回收站"},


            ]
        },
        {
            id: 'file_manage', pId: 0, name: "文件管理", open: true,
            children: [
                {id: 'media_manage', pId: 'file_manage', name: "媒体管理"},
                {id: 'file_backup', pId: 'file_manage', name: "文件备份"},
                {id: 'file_recover', pId: 'file_manage', name: "文件恢复"},
            ],
        },
        {
            id: 'data_manage', pId: 0, name: "数据管理", open: true,
            children: [
                {
                    id: 'database_manage', pId: 'data_manage', name: "数据库管理", open: true,
                    children: [
                        {id: 'database_backup', pId: 'data_manage', name: "数据库备份"},
                        {id: 'database_import', pId: 'data_manage', name: "数据库导入"},
                        {id: 'database_compress', pId: 'data_manage', name: "数据库压缩"},
                        {id: 'database_optimise', pId: 'data_manage', name: "数据库优化"},
                    ],

                },
                {
                    id: 'cache_manage', pId: 'data_manage', name: "缓存管理", open: true,
                    children: [
                        {id: 'cache_clear', pId: 'cache_manage', name: "缓存清理"},
                        {id: 'cache_settings', pId: 'cache_manage', name: "缓存设置"},

                    ],

                },
                {
                    id: 'count_manage', pId: 'data_manage', name: "统计管理", open: true,
                    children: [
                        {id: 'data_count', pId: 'count_manage', name: "数据统计"},

                    ],

                },
            ],
        },
        {
            id: 'Custom_center', pId: 0, name: "定制中心", open: true,
            children: [
                {id: 'theme_manage', pId: 'Custom_center', name: "主题管理"},
                {id: 'plugin_manage', pId: 'Custom_center', name: "插件管理"},
                {id: 'hook_manage', pId: 'Custom_center', name: "钩子管理"},
                {id: 'ad_manage', pId: 'Custom_center', name: "广告管理"},
            ],
        },
        {
            id: 'system_setting', pId: 0, name: "系统设置", open: true,
            children: [
                {id: 'system_log', pId: 'system_setting', name: "系统日志"},
                {id: 'web_setting', pId: 'system_setting', name: "站点设置"},
                {id: 'read_setting', pId: 'system_setting', name: "阅读设置"},
                {id: 'attachment_setting', pId: 'system_setting', name: "附件设置"},
                {id: 'social_login_setting', pId: 'system_setting', name: "社交登录设置"},
                {id: 'update_online', pId: 'system_setting', name: "在线更新"},
                {id: 'system_info', pId: 'system_setting', name: "系统信息"},
                {id: 'bug_commit', pId: 'system_setting', name: "BUG反馈"},
            ],
        },
    ];
    var code;
    var zTree;
    var zTreeNodeArray = [];
    var zTreeObj = {};

    function setCheck() {
        zTree = $.fn.zTree.getZTreeObj("treeDemo");
        py = $("#py").attr("checked") ? "p" : "";
        sy = $("#sy").attr("checked") ? "s" : "";
        pn = $("#pn").attr("checked") ? "p" : "";
        sn = $("#sn").attr("checked") ? "s" : "";
        type = {"Y": py + sy, "N": pn + sn};
        zTree.setting.check.chkboxType = type;
        showCode('setting.check.chkboxType = { "Y" : "' + type.Y + '", "N" : "' + type.N + '" };');
    }

    function showCode(str) {
        if (!code) code = $("#code");
        code.empty();
        code.append("<li>" + str + "</li>");
    }

    $(document).ready(function () {
        $.fn.zTree.init($("#treeDemo"), setting, zNodes);
        setCheck();
        $("#py").bind("change", setCheck);
        $("#sy").bind("change", setCheck);
        $("#pn").bind("change", setCheck);
        $("#sn").bind("change", setCheck);


    });


    /*
     * 获取用户组数据
     * */
    function getUserGroup() {

        adminUserGroupAllService.get().then(function success(res) {
            $scope.data = res.data;

        }, function error(res) {

        });

    }


    /*
     * 权限分配提交
     * */
    $scope.powerCommit = function () {

        // console.log(zTree.getChangeCheckedNodes());
        // console.log(zTree.getNodes());
        // console.log(zTree.transformToArray(zTree.getNodes()));
        zTreeNodeArray = zTree.transformToArray(zTree.getNodes());
        for (var i = 0; i < zTreeNodeArray.length; i++) {
            //zTreeArray.push(zTreeNodeArray[i].id+':'+zTreeNodeArray[i].checked);
            zTreeObj[zTreeNodeArray[i].id] = zTreeNodeArray[i].checked;
        }
        console.log(zTreeObj);
        adminUserGroupAllService.modify($scope.group.name, zTreeObj).then(function success(res) {
            if (res.data.code === 1) {
                $('#admin_user_group_all_power_modal').modal('hide');
            } else {

            }
        }, function error(res) {

        });

    };
    /*
     *点击权限分配，获取所选择的用户组,并勾选相应的权限
     * */
    $scope.setPower = function (name, group) {
        $scope.group = group;
        $scope.userGroup = name;
        var data;
        var power;


        //获取所选择的用户组的权限数据

       if($scope.group.power==''){
           power= {"panel":"true","basic_info":"true","modify_password":"true","user_manage":"true","admin_user_group_all":"true","admin_user_group_add":"true","admin_user_all":"true","admin_user_add":"true","doc_manage":"true","category_manage":"true","doc_category_all":"true","doc_category_add":"true","menu_manage":"true","menu_edit":"true","menu_location":"true","tag_manage":"true","comment_manage":"true","message_manage":"true","write":"true","published":"true","wait_for_verify":"true","no_access":"true","draft":"true","recycle":"true","file_manage":"true","media_manage":"true","file_backup":"true","file_recover":"true","data_manage":"true","database_manage":"true","database_backup":"true","database_import":"true","database_compress":"true","database_optimise":"true","cache_manage":"true","cache_clear":"true","cache_settings":"true","count_manage":"true","data_count":"true","Custom_center":"true","theme_manage":"true","plugin_manage":"true","hook_manage":"true","ad_manage":"true","system_setting":"true","system_log":"true","web_setting":"true","read_setting":"true","attachment_setting":"true","social_login_setting":"true","update_online":"true","system_info":"true","bug_commit":"true"};
       }else {
           power = JSON.parse($scope.group.power);
       }


        zTreeNodeArray = zTree.transformToArray(zTree.getNodes());


        for (var i = 0, l = zTreeNodeArray.length; i < l; i++) {
            zTreeNodeArray[i].checked = trueOrFalse(power[zTreeNodeArray[i].id]);

        }
        // var nodes = zTree.transformTozTreeNodes(zTreeNodeArray);
        // console.log(nodes);

        for (var m = 0; m < zTreeNodeArray.length; m++) {
            zTree.checkNode(zTreeNodeArray[m], zTreeNodeArray[m].checked, true);
        }


        function trueOrFalse(data) {
            if (data === 'true') {
                data = true;
            } else if (data === 'false') {
                data = false;
            }
            return data;
        }


    };

    /*
     * 禁用用户组
     * */
    $scope.forbidden = function (name) {
        adminUserGroupAllService.forbidden(name).then(function success() {
            getUserGroup();
        }, function error() {

        });
    };

    /*
     * 启用用户组
     * */
    $scope.startUsing = function (name) {
        adminUserGroupAllService.startUsing(name).then(function success() {
            getUserGroup();
        }, function error() {

        });
    };

    /*
     * 点击编辑
     * */
    $scope.edit = function (user) {
        $scope.user = user;
        $scope.pidOptions = [
            {name: '无', id: 0},
            {name: '超级管理员', id: 1},
            {name: '网站管理员', id: 2},
            {name: '内容管理员', id: 3},
        ];
        $scope.pid = $scope.user.pid;//设置默认值
    };
    /*
     * 编辑提交
     * */
    $scope.editCommit = function (user) {
        var name = user.name;
        var pid = user.pid;
        var remark = user.remark;
        var group_id = '超级管理员';
        switch (name) {
            case '超级管理员':
                group_id = 1;
                break;
            case '网站管理员':
                group_id = 2;
                break;
            case '内容管理员':
                group_id = 3;
                break;
            default:
                group_id = 4;


        }
        adminUserGroupAddService.edit(group_id, name, pid, remark).then(function (res) {
            if (res.data.code === 1) {
                $('#myModal').modal({
                    keyboard: true
                });
            }
        }, function (res) {

        });
    };


}]);


/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('bannerManage', ['$scope', '$http', 'bannerManageService', function ($scope, $http, bannerManageService) {
    $scope.editBanner = function (x) {

       // $state.go('producer', {id: x.id});
        window.location.href = '/admin/manage/doc_manage/banner_manage_edit/'+x.id+'/'+x.name;

    };

    $scope.bannerItemAddCommit = function () {

        bannerManageService.bannerItemAddCommit($scope.name, $scope.remark).then(function success(res) {
            if (res.data.code === 1) {
                $('#banner_add_modal').modal('hide');

            } else {
                $scope.banner_add_modal_msg = res.data.msg;
            }
        }, function error(res) {

        });
    };
    $scope.bannerGet = function () {
        bannerManageService.bannerGet().then(function success(res) {
            $scope.bannerData = res.data;


        }, function error(res) {

        });
    };
}]);
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
        // var a='window.QRLogin.code = 200; window.QRLogin.uuid = "QfTZ3owdGQ==";';
        // console.log(a.match(/window\.QRLogin\.uuid\s=\s\"QfTZ3owdGQ==\"\;/)[0].slice(23,35));
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
    /*
    * 点击保存
    * */
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
        // console.log($scope.sliderDataNewAll);
        if ($scope.sliderDataNewAll.length > 0) {
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

        console.log($scope.sliderDataExist);
        bannerManageEditService.saveSlider(bannerId, $scope.sliderDataExist, $scope.sliderDataNewAllFormat).then(function success(res) {
            if (res.data.code === 1) {
                $scope.bannerManageEditSaveMsg = res.data.msg;
                $scope.sliderDataNewAll = [];
                $scope.sliderDataNewAllFormat = [];
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
        }, function error(res) {

        });
    };

}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('basicInfo' , ['$scope', '$http', 'basicInfoService', function ($scope, $http, basicInfoService) {


}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('categoryAdd', ['$scope', '$http', 'categoryAllService', '$sce', 'categoryAddService', function ($scope, $http, categoryAllService, $sce, categoryAddService) {

    /*
     * 格式化所有分类数据
     * */
    categoryAllService.getCategories().then(function success(res) {

        var data = res.data;
        var dataFormat = [];

        if (data.length !== 0) {

            for (var j = 0; j < data.length; j++) {
                if (data[j].parent === '0') {
                    dataFormat.push({
                        name: data[j].name,
                        id: data[j].slug,
                        slug: data[j].slug,
                         order: data[j].order,
                    });
                }

            }

            for (var m = 0; m < dataFormat.length; m++) {
                for (var z = 0; z < data.length; z++) {

                    if (dataFormat[m].id === data[z].parent) {
                        dataFormat.splice(m + 1, 0, {
                            name: '' + '└' + data[z].name,
                            id: data[z].slug,
                            slug: data[z].slug,
                             order: data[z].order,
                        });

                    }

                }
            }
        }

        dataFormat.unshift({
            name: '无',
            id: '0',
            parent:0,
        });

        /*
         * 设置默认值
         * */
        $scope.cateOptions = dataFormat;
        console.log($scope.cateOptions);
        $scope.parent = $scope.cateOptions[0].id;
    }, function error(res) {

    });


    $scope.categoryAdd = function () {

        if ($scope.myForm.$valid) {
            categoryAddService.addCategory($scope.name, $scope.slug, $scope.order, $scope.parent, $scope.remark).then(function success(res) {
                if (res.data.code === 1) {
                    $scope.msg = res.data.msg;
                    $('#category_add_modal').modal({
                        keyboard: true
                    });
                } else {
                    $scope.msg = res.data.msg;
                    $('#category_add_modal').modal({
                        keyboard: true
                    });
                }
            }, function error(res) {

            });
        }

    };



    $scope.editCategoryCommit=function () {
        
    }
}]);
/**
 * Created by v_lljunli on 2017/5/17.
 */
app.controller('categoryAll', ['$scope', '$http', 'categoryAllService', function ($scope, $http, categoryAllService) {
    $scope.getCategories=function () {
        categoryAllService.getCategories().then(function success(res) {

            var data = res.data;
            var dataFormat = [];

            for (var j = 0; j < data.length; j++) {
                if (data[j].parent === '0') {
                    dataFormat.push({
                        name: data[j].name,
                        id: data[j].slug,
                        slug: data[j].slug,
                        parent: data[j].parent,
                        remark: data[j].remark,
                        order: data[j].order,
                        original_id: data[j].id,
                    });
                }

            }

            for (var m = 0; m < dataFormat.length; m++) {
                for (var z = 0; z < data.length; z++) {

                    if (dataFormat[m].id === data[z].parent) {
                        dataFormat.splice(m + 1, 0, {
                            name: '' + '└' + data[z].name,
                            id: data[z].slug,
                            slug: data[z].slug,
                            parent: data[z].parent,
                            remark: data[z].remark,
                            order: data[z].order,
                            original_id: data[z].id,
                        });

                    }

                }
            }

            $scope.data = dataFormat;

            var cate = dataFormat.slice(0);
            // console.log(cate);
            cate.unshift({
                name: '无',
                id: '0'
            });
            $scope.cateOptions = cate;
            //console.log($scope.cateOptions);
            $scope.cate = $scope.cateOptions[0].id;
        }, function error(res) {

        });
    };



    $scope.edit = function (x) {
        function extendCopy(p) {
            var c = {};
            for (var j in p) {
                c[j] = p[j];
            }
            c.uber = p;
            return c;
        }
        $scope.category = x;

        $scope.newCategory =extendCopy(x);


        if ($scope.newCategory.parent == 0) {
            $scope.cate = $scope.cateOptions[0].id;
        } else {
            for (var i = 0; i < $scope.cateOptions.length; i++) {
                if ($scope.cateOptions[i].slug === $scope.newCategory.parent) {
                    $scope.cate = $scope.cateOptions[i].id;
                }
            }
        }

    };

    $scope.editCategoryCommit = function () {

        categoryAllService.editCategoryCommit($scope.newCategory.original_id, $scope.newCategory.name, $scope.newCategory.slug, $scope.newCategory.parent, $scope.newCategory.order, $scope.newCategory.remark).then(function success(res) {
            if (res.data.code === 1) {
                $scope.getCategories();
                $('#category_all_edit_modal').modal('hide');
            } else {
                $scope.category_edit_msg = res.data.msg;
            }
        }, function error(res) {

        });
    };

    $scope.remove = function (x) {
        $scope.category_for_remove = x;
    };

    $scope.removeCommit = function () {
        categoryAllService.removeCommit($scope.category_for_remove.original_id).then(function success(res) {
            if (res.data.code === 1) {
                for (var i = 0; i < $scope.data.length; i++) {
                    if ($scope.data[i].original_id === $scope.category_for_remove.original_id) {
                        var index = i;
                        break;
                    }
                }
                $scope.data.splice(index, 1);
                $('#category_all_remove_modal').modal('hide');
            }
        }, function error(res) {

        });
    }

}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('documentAll', ['$scope', '$http', 'documentAllService', function ($scope, $http, documentAllService) {

  documentAllService.postLimitAndPage(5, 1).then(function success(res) {
    $scope.data = res.data.documentYesDisplayByLimitAndPage;
    $scope.allPage = res.data.allPage;
    $scope.documentCountNum=res.data.documentCountNum;
  }, function error(res) {

  });


  $scope.limit = '5';
  $scope.currentPage = 1;
  /*
   * 按条件获取文档数据
   * */
  $scope.getPage = function (limit, page) {
    documentAllService.postLimitAndPage(limit, page).then(function success(res) {
      $scope.data = res.data.documentYesDisplayByLimitAndPage;
      $scope.allPage = res.data.allPage;
      $scope.documentCountNum=res.data.documentCountNum;
    }, function error(res) {

    });
    $scope.currentPage = 1;

  };
  /*
   * 单击跳转页面
   * */
  $scope.goToPage = function (limit, page) {
    documentAllService.postLimitAndPage(limit, page).then(function success(res) {
      $scope.data = res.data.documentYesDisplayByLimitAndPage;
      $scope.allPage = res.data.allPage;
      $scope.documentCountNum=res.data.documentCountNum;
      $scope.currentPage = page;
    }, function error(res) {

    });
  };
  /*
   * 删除单篇文档
   * */
  $scope.removeOneDocument = function (doc) {
    $scope.oneDocument = doc;
    $('#remove_one_document_modal').modal({
      keyboard: true
    });

  };
  /*
   * 删除单篇文档提交
   * */
  $scope.removeOneDocumentCommit = function (doc) {


    console.log($scope.document_display.name);
    if ($scope.document_display.name == 1) {
      documentAllService.putIntoRecycle(doc).then(function success(res) {
        if (res.data.code === 1) {
          $('#remove_one_document_modal').modal('hide');
          $scope.getPage();
        }
      }, function error(res) {

      });
    } else {
      documentAllService.removeOneDocument(doc).then(function success(res) {
        if (res.data.code === 1) {
          $('#remove_one_document_modal').modal('hide');
          $scope.getPage();
        }
      }, function error(res) {

      });
    }

  };


}]);
/**
 * Created by v_lljunli on 2017/4/27.
 */
app.controller('documentEdit', ['$scope', '$http', 'documentEditService', 'categoriesAllService', '$location', function ($scope, $http, documentEditService, categoriesAllService, $location) {
  var absUrl = $location.absUrl();//获取当前链接的url
  var absUrlFormat = /admin\/manage\/document_manage\/edit\/[a-z0-9]{24}/.exec(absUrl)[0].slice(34, 58);//获取_id

  /*
   * 获取所编辑的文档id，并设置各字段内容
   * */
  documentEditService.postEditId(absUrlFormat).then(function success(res) {
    $scope.data = res.data[0];

    $scope.document_title = $scope.data.document_title;
    $scope.document_from = $scope.data.document_from;
    $scope.document_display = {
      name: String($scope.data.document_display)
    };
    $scope.document_hot = {
      name: String($scope.data.document_hot)
    };
    $scope.document_recommend = {
      name: String($scope.data.document_recommend)
    };
    $scope.document_tags = $scope.data.document_tags;
    $scope.documentImg = $scope.data.document_img;
    console.log($scope.documentImg);
    $scope.document_keywords = $scope.data.document_keywords;
    $scope.document_abstract = $scope.data.document_abstract;
    $scope.document_type = {
      name: String($scope.data.document_type)
    };
    $scope.document_view = $scope.data.document_view;
    $scope.document_author = $scope.data.document_author;

    /*
     * 设置编辑器内容
     * */
    ue.ready(function () {
      ue.setContent($scope.data.document_content, false);
    });

    /*
     * 获取分类，并设置分类
     * */
    categoriesAllService.getCategories().then(function success(res) {
      var data = res.data;
      var dataFormat = [];
      /*
       * 格式化分类数据
       * */
      for (var j = 0; j < data.length; j++) {
        if (data[j].cate_parent === '') {
          dataFormat.push({
            name: data[j].cate_name,
            id: data[j].cate_slug,
            cate_name: data[j].cate_name,
            cate_slug: data[j].cate_slug,
            cate_parent: data[j].cate_parent,
          });
        }

      }

      for (var m = 0; m < dataFormat.length; m++) {
        for (var z = 0; z < data.length; z++) {

          if (dataFormat[m].id === data[z].cate_parent) {
            dataFormat.splice(m + 1, 0, {
              name: data[z].cate_name,
              id: data[z].cate_slug,
              cate_name: data[z].cate_name,
              cate_slug: data[z].cate_slug,
              cate_parent: data[z].cate_parent,
            });

          }

        }
      }

      /*
       * 设置分类默认值
       * */
      $scope.cateOptions = dataFormat;

      var id = 1;
      for (var i = 0; i < dataFormat.length; i++) {
        if (dataFormat[i].cate_slug == $scope.data.document_category) {
          id = i;

          break;
        }
      }
      $scope.document_category = $scope.cateOptions[id].id;
    }, function error(res) {

    });

  }, function error(res) {

  });

  $scope.updateDocument = function () {
    /*
     * 获取编辑器内容
     * */

    ue.ready(function () {
      $scope.document_content = ue.getContent();
    });
    documentEditService.update(absUrlFormat, $scope.document_title, $scope.document_from, $scope.document_display.name, $scope.document_hot.name, $scope.document_recommend.name, $scope.document_tags, $scope.document_category, $scope.document_keywords, $scope.document_abstract, $scope.document_type.name, $scope.document_view, $scope.document_author, $scope.document_content).then(function success(res) {

    }, function error(res) {

    });
  };

  /*
  * 缩略图上传配置
  * */


  $('#document_img').uploadify({


    'swf': '/plugins/uploadify/uploadify.swf',//指定swf文件
    'uploader': '/admin/manage/document_manage/upload' + '?documentTitle=' + 'document_title' + '&type=' + 'images' + '&key=' + 'document_img'+'&id='+absUrlFormat,//后台处理的页面
    'buttonText': '上传图片',//按钮显示的文字
    'buttonClass': 'uploadify-btn-default',//按钮显示的文字
    'width': 100,//显示的高度和宽度，默认 height 30；width 120
    'height': 30,//显示的高度和宽度，默认 height 30；width 120
    'fileTypeDesc': 'Image Files',//上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
    'fileTypeExts': '*.gif; *.jpg; *.png',//允许上传的文件后缀
    'fileSizeLimit': '2000KB',//上传文件大小限制
    'auto': true,//选择文件后自动上传
    'multi': false,//设置为true将允许多文件上传

    'onUploadSuccess': function (file, data, response) {//上传成功的回调
      //$("#document_img_preview").attr("src", data);
      $scope.documentImg = data;

    },
    //
    // 'onComplete': function(event, queueID, fileObj, response, data) {//当单个文件上传完成后触发
    //   //event:事件对象(the event object)
    //   //ID:该文件在文件队列中的唯一表示
    //   //fileObj:选中文件的对象，他包含的属性列表
    //   //response:服务器端返回的Response文本，我这里返回的是处理过的文件名称
    //   //data：文件队列详细信息和文件上传的一般数据
    //   alert("文件:" + fileObj.name + " 上传成功！");
    // },
    //
    // 'onUploadError' : function(file, errorCode, errorMsg, errorString) {//上传错误
    //   alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
    // },
    //
    // 'onError': function(event, queueID, fileObj) {//当单个文件上传出错时触发
    //   alert("文件:" + fileObj.name + " 上传失败！");
    // }


  });
}]);
/**
 * Created by v_lljunli on 2017/4/27.
 */
app.controller('docWrite', ['$scope', '$http', 'docWriteService', 'categoryAllService', 'gatherManageService', function ($scope, $http, docWriteService, categoryAllService, gatherManageService) {

    categoryAllService.getCategories().then(function success(res) {
        var data = res.data;
        var dataFormat = [];

        for (var j = 0; j < data.length; j++) {
            if (data[j].parent === '0') {
                dataFormat.push({
                    name: data[j].name,
                    id: data[j].slug,
                    slug: data[j].slug,
                    parent: data[j].parent,
                    remark: data[j].remark,
                    order: data[j].order,
                    original_id: data[j].id,
                });
            }

        }

        for (var m = 0; m < dataFormat.length; m++) {
            for (var z = 0; z < data.length; z++) {

                if (dataFormat[m].id === data[z].parent) {
                    dataFormat.splice(m + 1, 0, {
                        name: '' + '└' + data[z].name,
                        id: data[z].slug,
                        slug: data[z].slug,
                        parent: data[z].parent,
                        remark: data[z].remark,
                        order: data[z].order,
                        original_id: data[z].id,
                    });

                }

            }
        }

        $scope.data = dataFormat;

        var cate = dataFormat.slice(0);

        $scope.cateOptions = cate;

        $scope.cate = $scope.cateOptions[0].id;
    }, function error(res) {

    });

    $scope.type = {
        name: 'post'
    };

    $scope.docWrite = function () {


        if ($scope.myForm.$valid) {
            var Content = '';
            ue.ready(function () {
                Content = ue.getContent();
                $scope.content = Content;

            });
            $scope.previewImg = $('#doc_preview_img_preview').attr('src');

            docWriteService.get(
                $scope.type.name,
                $scope.title,
                $scope.previewImg,
                $scope.tag.split(','),
                $scope.category,
                $scope.abstract,
                $scope.keyword,
                $scope.view,
                $scope.author,
                $scope.from,
                $scope.content
            ).then(function success(res) {
                if (res.data.code === 1) {
window.location.href='/admin/manage/doc_manage/edit_doc/'+res.data.id;
                }

            }, function error(res) {

            });
        }


    };

    $scope.gatherDoc = function () {
        gatherManageService.getGather().then(function success(res) {
            if (res.data.code === 1) {
                $scope.gatherData = res.data.data;
                $scope.gatherOptions = [];


                for (var i = 0; i < res.data.data.length; i++) {
                    $scope.gatherOptions.push({
                        'name': res.data.data[i].site_name,
                        'id': res.data.data[i].id,

                    });
                }

                $scope.gather = $scope.gatherOptions[0].id;

            }
        }, function error(res) {

        });
    };
    $scope.gatherDocCommit = function () {
        docWriteService.gatherDocCommit($scope.gather, $scope.gatherUrl).then(function success(res) {
            if (res.data.code === 1) {
                $scope.title = res.data.gatheredData.title;
                ue.ready(function () {
                    ue.setContent(res.data.gatheredData.content, false);
                });
                $('#write_doc_gather_modal').modal('hide');
            }
        }, function error(res) {

        });
    };


}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('draft', ['$scope', '$http', 'draftService', function ($scope, $http, draftService) {

  draftService.postLimitAndPage(5, 1).then(function success(res) {
    $scope.data = res.data.documentByLimitAndPage;
    $scope.allPage = res.data.allPage;
    $scope.documentCountNum=res.data.documentCountNum;
  }, function error(res) {

  });


  $scope.limit = '5';
  $scope.currentPage = 1;
  /*
   * 按条件获取文档数据
   * */
  $scope.getPage = function (limit, page) {
    draftService.postLimitAndPage(limit, page).then(function success(res) {
      $scope.data = res.data.documentByLimitAndPage;
      $scope.allPage = res.data.allPage;
      $scope.documentCountNum=res.data.documentCountNum;
    }, function error(res) {

    });
    $scope.currentPage = 1;

  };
  /*
   * 单击跳转页面
   * */
  $scope.goToPage = function (limit, page) {
    draftService.postLimitAndPage(limit, page).then(function success(res) {
      $scope.data = res.data.documentByLimitAndPage;
      $scope.allPage = res.data.allPage;
      $scope.documentCountNum=res.data.documentCountNum;
      $scope.currentPage = page;
    }, function error(res) {

    });
  };
  /*
   * 删除单篇文档
   * */
  $scope.removeOneDocument = function (doc) {
    $scope.oneDocument = doc;
    $('#remove_one_document_modal').modal({
      keyboard: true
    });

  };
  /*
   * 删除单篇文档提交
   * */
  $scope.removeOneDocumentCommit = function (doc) {


    $scope.document_display={
      name:'1',
    };
    if ($scope.document_display.name == 1) {
      draftService.putIntoRecycle(doc).then(function success(res) {
        if (res.data.code === 1) {
          $('#remove_one_document_modal').modal('hide');
          $scope.getPage();
        }
      }, function error(res) {

      });
    } else {
      draftService.removeOneDocument(doc).then(function success(res) {
        if (res.data.code === 1) {
          $('#remove_one_document_modal').modal('hide');
          $scope.getPage();
        }
      }, function error(res) {

      });
    }

  };


}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('editDoc', ['$scope', '$http', 'editDocService', 'categoryAllService', function ($scope, $http, editDocService, categoryAllService) {

    $scope.getDocById = function () {
        var id = $('#doc_id').val();

        editDocService.getDocById(id).then(function success(res) {
            if (res.data.code === 1) {
                $scope.type = {
                    name: String(res.data.data.type)
                };
                $scope.title = res.data.data.title;

                $('#edit_doc_preview_img_preview').attr('src', res.data.data.preview_img);
                $scope.tag = res.data.data.tag;
                $scope.abstract = res.data.data.abstract;
                $scope.keyword = res.data.data.keyword;
                $scope.view = res.data.data.view;
                $scope.author = res.data.data.author;
                $scope.from = res.data.data.from;
                $scope.tag = res.data.data.tag;
                ue.ready(function () {
                    ue.setContent(res.data.data.content, false);
                });
            }
        }, function error(res) {

        });
    };

    categoryAllService.getCategories().then(function success(res) {
        var data = res.data;
        var dataFormat = [];

        for (var j = 0; j < data.length; j++) {
            if (data[j].parent === '0') {
                dataFormat.push({
                    name: data[j].name,
                    id: data[j].slug,
                    slug: data[j].slug,
                    parent: data[j].parent,
                    remark: data[j].remark,
                    order: data[j].order,
                    original_id: data[j].id,
                });
            }

        }

        for (var m = 0; m < dataFormat.length; m++) {
            for (var z = 0; z < data.length; z++) {

                if (dataFormat[m].id === data[z].parent) {
                    dataFormat.splice(m + 1, 0, {
                        name: '' + '└' + data[z].name,
                        id: data[z].slug,
                        slug: data[z].slug,
                        parent: data[z].parent,
                        remark: data[z].remark,
                        order: data[z].order,
                        original_id: data[z].id,
                    });

                }

            }
        }

        $scope.data = dataFormat;

        var cate = dataFormat.slice(0);

        $scope.cateOptions = cate;

        $scope.category = $scope.cateOptions[0].id;
    }, function error(res) {

    });


    $scope.updateDoc = function () {

        ue.ready(function () {
            $scope.content = ue.getContent();
        });
        $scope.previewImg=$('#edit_doc_preview_img_preview').attr('src');
        var id = $('#doc_id').val();
        editDocService.updateDoc(
            id,
            $scope.type.name,
            $scope.title,
            $scope.previewImg,
            $scope.tag,
            $scope.category,
            $scope.abstract,
            $scope.keyword,
            $scope.view,
            $scope.author,
            $scope.from,
            $scope.content
        ).then(function success(res) {

        }, function error(res) {

        });
    };

}]);
/**
 * Created by v_lljunli on 2017/5/17.
 */
app.controller('gatherManage', ['$scope', '$http', 'gatherManageService', function ($scope, $http, gatherManageService) {
    $scope.getGather = function () {
        gatherManageService.getGather().then(function success(res) {
            if (res.data.code === 1) {
                $scope.gatherData = res.data.data;


            }
        }, function error(res) {

        });
    };
    $scope.addGather = function () {
        gatherManageService.addGather($scope.siteName, $scope.docTitle, $scope.docContent).then(function success(res) {

        }, function error(res) {


        });
    };

}]);
/**
 * Created by v_lljunli on 2017/5/15.
 */

app.controller('headerCtrl',['$scope','$http','headerCtrlService',function ($scope,$http,headerCtrlService) {
  $scope.logout=function () {

    headerCtrlService.logout().then(function success(res) {
      if(res.data.code===1){
        window.location.href='/admin';
      }
    },function error(res) {

    });
  };
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('mediaManageAll', ['$scope', '$http', 'mediaManageAllService', function ($scope, $http, mediaManageAllService) {

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
            $scope.count=res.data.count;
            $scope.allPage=res.data.allPage;
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
                    id: 'allFile', name: '所有文件'
                },
                {
                    id: 'image', name: '图片文件'
                },
                {
                    id: 'zip', name: 'ZIP压缩文件'
                },
                {
                    id: 'rar', name: 'RAR压缩文件'
                },
                {
                    id: 'pdf', name: 'PDF文件'
                },
                {
                    id: 'video', name: '视频文件'
                },
            ];
            $scope.media_type = $scope.mediaTypeOptions[0].id;//设置默认值

        }, function error(res) {

        });


    };
    $scope.filterData = function () {

        mediaManageAllService.filterData($scope.media_type, $scope.unique_year_month, $scope.every_page_limit).then(function success(res) {
            $scope.data = res.data.upload;
            $scope.count=res.data.count;
            $scope.allPage=res.data.allPage;
            $scope.currentPage = 1;
        }, function error(res) {

        });

    };
    $scope.listStyle = 1;
    $scope.changeListStyle = function (num) {
        num ? $scope.listStyle = 1 : $scope.listStyle = 0;
    };
    $scope.gotoMediaManageUpload = function () {
        window.location.href = '/admin/manage/file_manage/media_manage_upload';
    };
    $scope.goToPage = function ( page) {
        mediaManageAllService.goToPage($scope.media_type, $scope.unique_year_month, $scope.every_page_limit,page).then(function success(res) {
            $scope.data = res.data;
            $scope.currentPage = page;
        },function error(res) {

        });
    };


}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('mediaManageUpload', ['$scope', '$http', 'mediaManageAllService', function ($scope, $http, mediaManageAllService) {




    $scope.passwordModify = function () {
        passwordModifyService.get($scope.adminUser_password, $scope.adminUser_repassword).then(function success(res) {
            if (res.data.code === 1) {
                $('#password_modify_modal').modal({
                    keyboard: true
                });
            }
        }, function error(res) {

        });


    };

}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('menuManage', ['$scope', '$http', 'menuManageService', function ($scope, $http, menuManageService) {

    $scope.addMenu = function () {
        $scope.targetForAddMenuOptions = [
            {name: '新页面', id: 1},
            {name: '当前页', id: 0},

        ];
        $scope.targetForAddMenu = $scope.targetForAddMenuOptions[0].id;

        menuManageService.getParentMenu().then(function success(res) {
            $scope.parentForAddMenuOptions = [];
            if (res.data.code === 1) {

                for (var m = 0; m < res.data.data.length; m++) {
                    $scope.parentForAddMenuOptions.push({
                        name: res.data.data[m].name,
                        id: res.data.data[m].id,
                    });
                }
                $scope.parentForAddMenuOptions.unshift({name: '无', id: 0});

                $scope.parentForAddMenu = $scope.parentForAddMenuOptions[0].id;
            }
        }, function error(res) {

        });
        $scope.getMenu();
    };
    $scope.addMenuCommit = function () {
        menuManageService.addMenuCommit($scope.name, $scope.url, $scope.targetForAddMenu, $scope.parentForAddMenu, $scope.order).then(function success(res) {
            if (res.data.code === 1) {
                $('#menu_manage_add_menu_modal').modal('hide');
                $scope.getMenu();
            }
        }, function error(res) {

        });
    };
    $scope.getMenu = function () {
        menuManageService.getMenu().then(function success(res) {
            if (res.data.code === 1) {
                $scope.menuData = res.data.data;
                $scope.topMenuData = [];

                for (var i = 0; i < res.data.topMenu.length; i++) {
                    $scope.topMenuData.push(res.data.topMenu[i]);
                    for (var j = 0; j < res.data.data.length; j++) {
                        if (res.data.data[j].parent == res.data.topMenu[i].name) {
                            $scope.topMenuData.push(res.data.data[j]);
                        }
                    }
                }

            }

        }, function error(res) {

        });
    };
    $scope.removeMenu = function (x) {
        $scope.menuWaitingForRemove = x;
    };
    $scope.removeMenuCommit = function () {
        menuManageService.removeMenuCommit($scope.menuWaitingForRemove.id).then(function success(res) {
            if (res.data.code === 1) {
                $('#menu_manage_remove_menu_modal').modal('hide');
                $scope.getMenu();
            }
        }, function error(res) {

        });
    };
    $scope.editMenu = function (x) {


        $scope.menuWaitingForEdit = x;
        function extendCopy(p) {
            var c = {};
            for (var j in p) {
                c[j] = p[j];
            }
            c.uber = p;
            return c;
        }

        $scope.newMenuWaitingForEdit = extendCopy(x);

        $scope.targetForEditMenuOptions = [
            {name: '新页面', id: 1},
            {name: '当前页', id: 0},

        ];
        // console.log($scope.newMenuWaitingForEdit);
        // console.log($scope.targetForEditMenuOptions);
        for (var h = 0; h < $scope.targetForEditMenuOptions.length; h++) {
            if ($scope.targetForEditMenuOptions[h].id == $scope.menuWaitingForEdit.target) {
                // console.log(h);
                // console.log($scope.targetForEditMenuOptions);
                $scope.targetForEditMenu = $scope.targetForEditMenuOptions[h].id;
            }
        }

        menuManageService.getParentMenu().then(function success(res) {
            for (var z = 0; z < res.data.data.length; z++) {
                if ($scope.menuWaitingForEdit.id === res.data.data[z].id) {
                    res.data.data.splice(z, 1);

                }
            }
            $scope.parentForEditMenuOptions = [];
            if (res.data.code === 1) {

                for (var m = 0; m < res.data.data.length; m++) {
                    $scope.parentForEditMenuOptions.push({
                        name: res.data.data[m].name,
                        id: res.data.data[m].id,
                    });
                }
                console.log($scope.newMenuWaitingForEdit);
                console.log($scope.parentForEditMenuOptions);
                $scope.parentForEditMenuOptions.unshift({name: '无', id: 0});
                for (var h = 0; h < $scope.parentForEditMenuOptions.length; h++) {
                    if ($scope.parentForEditMenuOptions[h].id == $scope.menuWaitingForEdit.parent) {
                        $scope.parentForEditMenu = $scope.parentForEditMenuOptions[h].id;
                    }
                }

            }
        }, function error(res) {

        });
    };
    $scope.editMenuCommit = function () {
        menuManageService.editMenuCommit($scope.menuWaitingForEdit.id, $scope.newMenuWaitingForEdit.name, $scope.newMenuWaitingForEdit.url, $scope.targetForEditMenu, $scope.parentForEditMenu, $scope.newMenuWaitingForEdit.order).then(function success(res) {
            if (res.data.code === 1) {
                $('#menu_manage_edit_menu_modal').modal('hide');
                $scope.getMenu();
            }
        }, function error(res) {

        });
    };
}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('modifyPassword', ['$scope', '$http', 'modifyPasswordService', function ($scope, $http, modifyPasswordService) {

  $scope.passwordModify = function () {
    passwordModifyService.get($scope.adminUser_password,$scope.adminUser_repassword).then(function success(res) {
      if(res.data.code===1){
        $('#password_modify_modal').modal({
          keyboard: true
        });
      }
    }, function error(res) {

    });


  };

}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('noAccess', ['$scope', '$http', 'noAccessService', function ($scope, $http, noAccessService) {

  noAccessService.postLimitAndPage(5, 1).then(function success(res) {
    $scope.data = res.data.documentByLimitAndPage;
    $scope.allPage = res.data.allPage;
    $scope.documentCountNum=res.data.documentCountNum;
  }, function error(res) {

  });


  $scope.limit = '5';
  $scope.currentPage = 1;
  /*
   * 按条件获取文档数据
   * */
  $scope.getPage = function (limit, page) {
    noAccessService.postLimitAndPage(limit, page).then(function success(res) {
      $scope.data = res.data.documentByLimitAndPage;
      $scope.allPage = res.data.allPage;
      $scope.documentCountNum=res.data.documentCountNum;
    }, function error(res) {

    });
    $scope.currentPage = 1;

  };
  /*
   * 单击跳转页面
   * */
  $scope.goToPage = function (limit, page) {
    noAccessService.postLimitAndPage(limit, page).then(function success(res) {
      $scope.data = res.data.documentByLimitAndPage;
      $scope.allPage = res.data.allPage;
      $scope.documentCountNum=res.data.documentCountNum;
      $scope.currentPage = page;
    }, function error(res) {

    });
  };
  /*
   * 删除单篇文档
   * */
  $scope.removeOneDocument = function (doc) {
    $scope.oneDocument = doc;
    $('#remove_one_document_modal').modal({
      keyboard: true
    });

  };
  /*
   * 删除单篇文档提交
   * */
  $scope.removeOneDocumentCommit = function (doc) {


    $scope.document_display={
      name:'1',
    };
    if ($scope.document_display.name == 1) {
      noAccessService.putIntoRecycle(doc).then(function success(res) {
        if (res.data.code === 1) {
          $('#remove_one_document_modal').modal('hide');
          $scope.getPage();
        }
      }, function error(res) {

      });
    } else {
      noAccessService.removeOneDocument(doc).then(function success(res) {
        if (res.data.code === 1) {
          $('#remove_one_document_modal').modal('hide');
          $scope.getPage();
        }
      }, function error(res) {

      });
    }

  };


}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('published', ['$scope', '$http', 'publishedService', function ($scope, $http, publishedService) {
    $scope.limit = '5';
    $scope.currentPage = 1;
    /*
     * 按条件获取文档数据
     * */

    $scope.getPublishedByLimitAndCurrentPage = function (limit, currentPage) {

        publishedService.getPublishedByLimitAndCurrentPage(limit, currentPage).then(function success(res) {
            $scope.data = res.data.data;
            $scope.count = res.data.count;
            $scope.allPage = res.data.allPage;
            $scope.documentCountNum = res.data.documentCountNum;
            $scope.currentPage = currentPage;
        }, function error(res) {

        });
        $scope.currentPage = 1;

    };


    $scope.recommend = function (isRec, id, x) {
        publishedService.recommend(isRec, id).then(function success(res) {
            if (res.data.code === 1) {
                if (res.data.action === 1) {
                    x.recommend = '是';
                } else {
                    x.recommend = '否';
                }


            }
        }, function error(res) {

        });
    };
    $scope.hot = function (isRec, id, x) {
        publishedService.hot(isRec, id).then(function success(res) {
            if (res.data.code === 1) {
                if (res.data.action === 1) {
                    x.hot = '是';
                } else {
                    x.hot = '否';
                }


            }
        }, function error(res) {

        });
    };
    /*
     * 删除单篇文档
     * */
    $scope.removeOneDoc = function (doc) {
        $scope.oneDoc = doc;
        $('#remove_one_doc_modal').modal({
            keyboard: true
        });

    };
    /*
     * 删除单篇文档提交
     * */
    $scope.removeOneDocCommit = function (doc) {


        $scope.status = {
            name: '1',
        };
        if ($scope.status.name == 1) {
            publishedService.putIntoRecycle(doc).then(function success(res) {
                if (res.data.code === 1) {
                    $('#remove_one_doc_modal').modal('hide');
                    $scope.getPublishedByLimitAndCurrentPage($scope.limit,$scope.currentPage);
                }
            }, function error(res) {

            });
        } else {
            publishedService.removeOneDoc(doc).then(function success(res) {
                if (res.data.code === 1) {
                    $('#remove_one_doc_modal').modal('hide');
                    $scope.getPage();
                }
            }, function error(res) {

            });
        }

    };
    /*
     * 编辑文档
     * */
    $scope.editDoc = function (doc) {
        window.location.href = '/admin/manage/doc_manage/edit_doc/'+doc.id;

    };


}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('recycle', ['$scope', '$http', 'recycleService', function ($scope, $http, recycleService) {

  recycleService.postLimitAndPage(5, 1).then(function success(res) {
    $scope.data = res.data.documentNoDisplayByLimitAndPage;
    $scope.allPage = res.data.allPage;
    $scope.documentCountNum=res.data.documentCountNum;
  }, function error(res) {

  });


  $scope.limit = '5';
  $scope.currentPage = 1;
  /*
   * 按条件获取文档数据
   * */
  $scope.getPage = function (limit, page) {
    recycleService.postLimitAndPage(limit, page).then(function success(res) {
      $scope.data = res.data.documentNoDisplayByLimitAndPage;
      $scope.allPage = res.data.allPage;
      $scope.documentCountNum=res.data.documentCountNum;
    }, function error(res) {

    });
    $scope.currentPage = 1;

  };
  /*
   * 单击跳转页面
   * */
  $scope.goToPage = function (limit, page) {
    recycleService.postLimitAndPage(limit, page).then(function success(res) {
      $scope.data = res.data.documentNoDisplayByLimitAndPage;
      $scope.allPage = res.data.allPage;
      $scope.documentCountNum=res.data.documentCountNum;
      $scope.currentPage = page;
    }, function error(res) {

    });
  };
  /*
   * 删除单篇文档
   * */
  $scope.removeOneDocument = function (doc) {
    $scope.oneDocument = doc;
    $('#remove_one_document_complete_modal').modal({
      keyboard: true
    });

  };
  /*
   * 删除单篇文档提交
   * */
  $scope.removeOneDocumentCommit = function (doc) {

      recycleService.removeOneDocument(doc).then(function success(res) {
        if (res.data.code === 1) {
          $('#remove_one_document_complete_modal').modal('hide');
          $scope.getPage();
        }
      }, function error(res) {

      });


  };


}]);
/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('waitForVerify', ['$scope', '$http', 'waitForVerifyService', function ($scope, $http, waitForVerifyService) {

  waitForVerifyService.postLimitAndPage(5, 1).then(function success(res) {
    $scope.data = res.data.documentWaitForVerifyByLimitAndPage;
    $scope.allPage = res.data.allPage;
    $scope.documentCountNum=res.data.documentCountNum;
  }, function error(res) {

  });


  $scope.limit = '5';
  $scope.currentPage = 1;
  /*
   * 按条件获取文档数据
   * */
  $scope.getPage = function (limit, page) {
    waitForVerifyService.postLimitAndPage(limit, page).then(function success(res) {
      $scope.data = res.data.documentWaitForVerifyByLimitAndPage;
      $scope.allPage = res.data.allPage;
      $scope.documentCountNum=res.data.documentCountNum;
    }, function error(res) {

    });
    $scope.currentPage = 1;

  };
  /*
   * 单击跳转页面
   * */
  $scope.goToPage = function (limit, page) {
    waitForVerifyService.postLimitAndPage(limit, page).then(function success(res) {
      $scope.data = res.data.documentWaitForVerifyByLimitAndPage;
      $scope.allPage = res.data.allPage;
      $scope.documentCountNum=res.data.documentCountNum;
      $scope.currentPage = page;
    }, function error(res) {

    });
  };
  /*
   * 删除单篇文档
   * */
  $scope.removeOneDocument = function (doc) {
    $scope.oneDocument = doc;
    $('#remove_one_document_modal').modal({
      keyboard: true
    });

  };
  /*
   * 删除单篇文档提交
   * */
  $scope.removeOneDocumentCommit = function (doc) {


    $scope.document_display={
      name:'1',
    };
    if ($scope.document_display.name == 1) {
      waitForVerifyService.putIntoRecycle(doc).then(function success(res) {
        if (res.data.code === 1) {
          $('#remove_one_document_modal').modal('hide');
          $scope.getPage();
        }
      }, function error(res) {

      });
    } else {
      waitForVerifyService.removeOneDocument(doc).then(function success(res) {
        if (res.data.code === 1) {
          $('#remove_one_document_modal').modal('hide');
          $scope.getPage();
        }
      }, function error(res) {

      });
    }

  };


}]);