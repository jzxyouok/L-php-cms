app.controller('userManageCtrl', ['$scope', '$http', 'userManageService', 'userGroupManageService', function ($scope, $http, userManageService, userGroupManageService) {
    $scope.getUser = function () {
        userManageService.getUser().then(function success(res) {
            $scope.data = res.data;

        }, function error(res) {

        });
    };


    $scope.statusOptions = [
        {name: '启用', id: 1},
        {name: '禁用', id: 0},
    ];
    $scope.status = $scope.statusOptions[0].id;//设置默认值


    $scope.getUserGroup = function () {
        userGroupManageService.getUserGroup().then(function success(res) {

            var arr = [];
            for (var i = 0; i < res.data.length; i++) {
                arr.push({
                    name: res.data[i].name,
                    id: Number(res.data[i].id)
                });
            }
            $scope.userGroupOptions = arr;

            $scope.userGroup = $scope.userGroupOptions[0].id;//设置默认值

        }, function error(res) {

        });
    };


    /*
     * 监听对手机号的输入，判断手机号是否已经存在
     * */
    $scope.checkPhone = function () {

        if ($scope.phone == undefined) {
            return;

        }

        $scope.isPhoneExist = false;

        userManageService.checkPhone($scope.phone).then(function (res) {
            if (res.data.code == 0) {
                $scope.isPhoneExist = true;
            }
        }, function (res) {

        });


    };

    $scope.checkEmail = function () {

        if ($scope.email == undefined) {
            return;

        }

        $scope.isEmailExist = false;

        userManageService.checkEmail($scope.email).then(function (res) {
            if (res.data.code == 0) {
                $scope.isEmailExist = true;
            }
        }, function (res) {

        });


    };
    $scope.addUserCommit=function () {

        if($scope.myForm.$valid){
            userManageService.addUserCommit($scope.userGroup,$scope.phone,$scope.email,$scope.nickname,$scope.password,$scope.status,$scope.remark).then(function (res) {
                if (res.data.code == 1) {
                    $scope.getUser();
                    $('#user_manage_add_modal').modal('hide');
                }
            }, function (res) {

            });
        }

    };

    $scope.forbidden = function (id) {
        console.log(id);
        userManageService.forbidden(id).then(function success() {
            $scope.getUser();
        }, function error() {

        });
    };

    $scope.startUsing = function (id) {
        userManageService.startUsing(id).then(function success() {
            $scope.getUser();
        }, function error() {

        });
    };

    $scope.editUser=function (user) {
        userGroupManageService.getUserGroup().then(function success(res) {

            var arr = [];
            for (var i = 0; i < res.data.length; i++) {
                arr.push({
                    name: res.data[i].name,
                    id: Number(res.data[i].id)
                });
            }
            $scope.userGroupForEditOptions = arr;

            $scope.userGroupForEdit = $scope.userGroupForEditOptions[Number(user.user_group_id)-1].id;//设置默认值

        }, function error(res) {

        });
        $scope.idForEdit=user.id;
        $scope.userGroupForEdit=user.user_group_id;
        $scope.phoneForEdit=user.phone;
        $scope.emailForEdit=user.email;
        $scope.nicknameForEdit=user.nickname;
        $scope.remarkForEdit=user.remark;

    };

    $scope.editUserCommit=function () {

        if($scope.myFormForEdit.$valid){
            userManageService.editUserCommit($scope.idForEdit,$scope.userGroupForEdit,$scope.phoneForEdit,$scope.emailForEdit,$scope.nicknameForEdit,$scope.remarkForEdit).then(function (res) {
                if (res.data.code == 1) {
                    $scope.getUser();
                    $('#user_manage_edit_modal').modal('hide');
                }
            }, function (res) {

            });
        }

    };
    
    $scope.removeUser=function (user) {
        $scope.userWaitForRemove=user.id;
    };
    $scope.removeUserCommit=function () {


            userManageService.removeUserCommit($scope.userWaitForRemove).then(function (res) {
                if (res.data.code == 1) {
                    $scope.getUser();
                    $('#user_manage_remove_modal').modal('hide');
                }
            }, function (res) {

            });


    };
    $scope.uploadAvatar=function (user) {
        $scope.defaultAvatar='/public/upload/image/author-avatar.jpg';
        $scope.avatarWaitForUpload=user;
    };

    $scope.uploadAvatarCommit=function (avatar) {
        userManageService.uploadAvatarCommit($scope.avatarWaitForUpload.id,avatar).then(function success(res) {

            if(res.data.code===1){
                $('#user_manage_avatar_modal').modal('hide');
            }
        }, function error(res) {

        });
    };



}]);