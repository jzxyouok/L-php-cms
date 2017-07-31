<?php

return [

  'SESSION_SECRET' => 'L-blog-secret',
  'COOKIE_SECRET' => 'L-BLOG',


  /*
   * 本地缓存设置
   * */
  'REDIS_HOST' => '127.0.0.1',
  'REDIS_PORT' => 6379,
  'REDIS_PSD' => '',
  'REDIS_DB' => 0,

  /*
   * cms配置
   * */
  'cms' => 'L-php-cms管理系统',
  'cms_name' => 'L-php-cms',


  /*
   * 博客功能列表
   * */
  'panel' => '仪表盘',
  'basic_info' => '基本信息',
  'modify_password' => '修改密码',

  'admin_user_manage' => '用户管理',

  'user_group_manage' => '用户组管理',
  'user_manage' => '用户管理',
  'admin_user_groups_all' => '所有用户组',
  'admin_user_groups_add' => '添加用户组',
  'admin_user_all' => '所有用户',
  'admin_user_add' => '添加用户',


  'doc_manage' => '文档管理',
  'write' => '写文档',
  'published' => '已发布',
  'edit_doc' => '文档编辑',
  'wait_for_verify' => '待审核',
  'verify_doc' => '文档审核',
  'no_access' => '未通过',
  'draft' => '草稿箱',
  'recycle' => '回收站',
  'category_all' => '所有分类',
  'category_add' => '添加分类',
  'menu_manage' => '菜单管理',
  'banner_manage' => '轮播管理',
  'gather_manage'=>'采集管理',
  'banner_manage_edit' => '轮播编辑',
  'tag_manage' => '标签管理',
  'comment_manage' => '评论管理',
  'message_manage' => '消息管理',


  'file_manage' => '文件管理',
  'media_manage_all' => '所有媒体',
  'media_manage_upload' => '添加媒体',
  'file_backup' => '文件备份',
  'file_recover' => '文件恢复',

  'data_manage' => '数据管理',
  'database_manage' => '数据库管理',
  'database_backup' => '数据库备份',
  'database_import' => '数据库导入',
  'database_compress' => '数据库压缩',
  'database_optimize' => '数据库优化',
  'cache_manage' => '缓存管理',
  'clear_cache' => '缓存清理',
  'setting_cache' => '缓存设置',
  'statistics_manage' => '统计管理',
  'count_statistics' => '数据统计',

  'customization_center' => '定制中心',
  'theme_manage' => '主题管理',
  'install_theme' => '安装主题',
  'local_theme' => '本地主题',
  'edit_template' => '模版编辑',
  'plugin_manage' => '插件管理',
  'hook_manage' => '钩子管理',
  'ad_manage' => '广告管理',

  'system_setting' => '系统设置',
  'system_log' => '系统日志',
  'website_setting' => '站点设置',
  'read_setting' => '阅读设置',
  'attachment_setting' => '附件设置',
  'social_login_setting' => '社交登录设置',
  'update_online' => '在线更新',
  'system_info' => '系统信息',
  'bug_feedback' => 'BUG反馈',


];
