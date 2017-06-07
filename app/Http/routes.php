<?php

Route::get('/',function(){
  return view('welcome');
});

/*
 * 仪表盘
 * */
Route::group(['namespace' => 'Admin'], function () {

  Route::get('/admin/manage/admin_user_group_add','adminUserGroupAddController@view')->name('admin_user_group_add');
  Route::post('/admin/manage/admin_user_group_add/add','adminUserGroupAddController@add')->name('admin_user_group_add_add');
  Route::get('/admin/manage/admin_user_group_all','adminUserAllController@showProfile')->name('admin_user_group_all');

});


/*
 * 用户管理
 * */
Route::group(['namespace' => 'Admin'], function () {

  Route::get('/admin/manage/users_manage/admin_user_group_add','adminUserGroupAddController@view')->name('admin_user_group_add');
  Route::post('/admin/manage/users_manage/admin_user_group_all','adminUserGroupAddController@add')->name('admin_user_group_all');
  Route::get('/admin/manage/users_manage/admin_user_add','adminUserGroupAddController@add')->name('admin_user_add');
  Route::get('/admin/manage/users_manage/admin_user_all','adminUserGroupAddController@add')->name('admin_user_all');
});



/*
 * 文档管理
 * */
Route::group(['middleware' => 'auth'], function () {

  Route::get('/admin/manage/admin_user_all','adminUserAllController@showProfile')->name('admin_user_all');
  Route::get('/admin/manage/admin_user_add','adminUserAllController@showProfile')->name('admin_user_add');

});

/*
 * 文件管理
 * */
Route::group(['middleware' => 'auth'], function () {

  Route::get('/admin/manage/admin_user_all','adminUserAllController@showProfile')->name('admin_user_all');
  Route::get('/admin/manage/admin_user_add','adminUserAllController@showProfile')->name('admin_user_add');

});

/*
 * 数据管理
 * */
Route::group(['middleware' => 'auth'], function () {

  Route::get('/admin/manage/admin_user_all','adminUserAllController@showProfile')->name('admin_user_all');
  Route::get('/admin/manage/admin_user_add','adminUserAllController@showProfile')->name('admin_user_add');

});


/*
 * 定制中心
 * */
Route::group(['middleware' => 'auth'], function () {

  Route::get('/admin/manage/admin_user_all','adminUserAllController@showProfile')->name('admin_user_all');
  Route::get('/admin/manage/admin_user_add','adminUserAllController@showProfile')->name('admin_user_add');

});


/*
 * 系统设置
 * */
Route::group(['middleware' => 'auth'], function () {

  Route::get('/admin/manage/admin_user_all','adminUserAllController@showProfile')->name('admin_user_all');
  Route::get('/admin/manage/admin_user_add','adminUserAllController@showProfile')->name('admin_user_add');

});