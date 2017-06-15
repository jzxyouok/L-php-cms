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

