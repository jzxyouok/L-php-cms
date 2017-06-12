<?php
/*
 * 登录退出
 * */
Route::group(['namespace' => 'Admin'], function () {
  Route::get('/admin', 'adminLoginController@gotoLogin')->name('admin');
  Route::get('/admin/admin_login', 'adminLoginController@view')->name('admin_login');
  Route::post('/admin/admin_login', 'adminLoginController@login')->name('admin_login_post');
  Route::post('/admin/admin_login_get_code', 'adminLoginController@getCode')->name('admin_login_post_get_code');
  Route::post('/admin/admin_login_update_code', 'adminLoginController@updateCode')->name('admin_login_post_update_code');
});
/*
 * 仪表盘
 * */
Route::group(['namespace' => 'Admin'], function () {

  Route::get('/admin/manage/panel/basic_info', 'basicInfoController@view')->name('basic_info');
  Route::get('/admin/manage/panel/modify_password', 'modifyPasswordController@view')->name('modify_password');

});


/*
 * 用户管理
 * */
Route::group(['namespace' => 'Admin'], function () {

  Route::get('/admin/manage/user_manage/admin_user_group_all', 'adminUserGroupAllController@view')->name('admin_user_group_all');
  Route::get('/admin/manage/user_manage/admin_user_group_get', 'adminUserGroupAllController@get')->name('admin_user_group_get');
  Route::get('/admin/manage/user_manage/admin_user_group_add', 'adminUserGroupAddController@view')->name('admin_user_group_add');
  Route::post('/admin/manage/user_manage/admin_user_group_add', 'adminUserGroupAddController@add')->name('admin_user_group_add_post');
  Route::get('/admin/manage/user_manage/admin_user_all', 'adminUserAllController@view')->name('admin_user_all');
  Route::get('/admin/manage/user_manage/admin_user_get', 'adminUserAllController@get')->name('admin_user_get');
  Route::get('/admin/manage/user_manage/admin_user_add', 'adminUserAddController@view')->name('admin_user_add');
});


/*
 * 文档管理
 * */
Route::group(['middleware' => 'auth','namespace' => 'Admin'], function () {

  Route::get('/admin/manage/doc_manage/doc_category_all', 'docCategoryAllController@showProfile')->name('doc_category_all');
  Route::get('/admin/manage/doc_manage/doc_category_add', 'docCategoryAddController@showProfile')->name('doc_category_add');
  Route::get('/admin/manage/doc_manage/edit_menu', 'editMenuController@showProfile')->name('edit_menu');
  Route::get('/admin/manage/doc_manage/menu_location', 'menuLocationController@showProfile')->name('menu_location');
  Route::get('/admin/manage/doc_manage/tag_manage', 'tagManageController@showProfile')->name('tag_manage');
  Route::get('/admin/manage/doc_manage/comment_manage', 'commentManageController@showProfile')->name('comment_manage');
  Route::get('/admin/manage/doc_manage/message_manage', 'messageManageController@showProfile')->name('message_manage');
  Route::get('/admin/manage/doc_manage/write', 'writeController@showProfile')->name('write');
  Route::get('/admin/manage/doc_manage/published', 'publishedController@showProfile')->name('published');
  Route::get('/admin/manage/doc_manage/wait_for_verify', 'waitForVerifyController@showProfile')->name('wait_for_verify');
  Route::get('/admin/manage/doc_manage/no_access', 'noAccessController@showProfile')->name('no_access');
  Route::get('/admin/manage/doc_manage/draft', 'draftController@showProfile')->name('draft');
  Route::get('/admin/manage/doc_manage/recycle', 'recycleController@showProfile')->name('recycle');


});

/*
 * 文件管理
 * */
Route::group(['middleware' => 'auth','namespace' => 'Admin'], function () {

  Route::get('/admin/manage/file_manage/media_manage', 'mediaManageController@showProfile')->name('media_manage');
  Route::get('/admin/manage/file_manage/file_backup', 'file_backupController@showProfile')->name('file_backup');
  Route::get('/admin/manage/file_manage/file_recover', 'file_recoverController@showProfile')->name('file_recover');
});

/*
 * 数据管理
 * */
Route::group(['middleware' => 'auth','namespace' => 'Admin'], function () {

  Route::get('/admin/manage/data_manage/database_backup','databaseBackupController@showProfile')->name('database_backup');
  Route::get('/admin/manage/data_manage/database_import','databaseImportController@showProfile')->name('database_import');
  Route::get('/admin/manage/data_manage/database_compress','databaseCompressController@showProfile')->name('database_compress');
  Route::get('/admin/manage/data_manage/database_optimize','databaseOptimizeController@showProfile')->name('database_optimize');
  Route::get('/admin/manage/data_manage/clear_cache','clearCacheController@showProfile')->name('clear_cache');
  Route::get('/admin/manage/data_manage/setting_cache','settingCacheController@showProfile')->name('setting_cache');
  Route::get('/admin/manage/data_manage/count_statistics','countStatisticsController@showProfile')->name('count_statistics');


});


/*
 * 定制中心
 * */
Route::group(['middleware' => 'auth','namespace' => 'Admin'], function () {

  Route::get('/admin/manage/customization_center/install_theme','installThemeController@showProfile')->name('install_theme');
  Route::get('/admin/manage/customization_center/local_theme','localThemeController@showProfile')->name('local_theme');
  Route::get('/admin/manage/customization_center/edit_template','editTemplateController@showProfile')->name('edit_template');
  Route::get('/admin/manage/customization_center/plugin_manage','pluginManageController@showProfile')->name('plugin_manage');
  Route::get('/admin/manage/customization_center/hook_manage','hookManageController@showProfile')->name('hook_manage');
  Route::get('/admin/manage/customization_center/ad_manage','adManageController@showProfile')->name('ad_manage');

});


/*
 * 系统设置
 * */
Route::group(['middleware' => 'auth','namespace' => 'Admin'], function () {

  Route::get('/admin/manage/system_setting/system_log','systemLogController@showProfile')->name('system_log');
  Route::get('/admin/manage/system_setting/website_setting','websiteSettingController@showProfile')->name('website_setting');
  Route::get('/admin/manage/system_setting/read_setting','readSettingController@showProfile')->name('read_setting');
  Route::get('/admin/manage/system_setting/attachment_setting','attachmentSettingController@showProfile')->name('attachment_setting');
  Route::get('/admin/manage/system_setting/social_login_setting','socialLoginSettingController@showProfile')->name('social_login_setting');
  Route::get('/admin/manage/system_setting/update_online','updateOnlineController@showProfile')->name('update_online');
  Route::get('/admin/manage/system_setting/system_info','systemInfoController@showProfile')->name('system_info');
  Route::get('/admin/manage/system_setting/bug_feedback','bugFeedbackController@showProfile')->name('bug_feedback');

});