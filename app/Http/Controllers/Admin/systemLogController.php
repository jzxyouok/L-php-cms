<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Log\Writer;
use Illuminate\Support\Facades\Storage;

class systemLogController extends Controller
{
  public function view(Request $request)
  {

    return view('admin.system_log', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.system_setting'),
      'item' => config('cms.system_log'),
      'userInfo' => Auth::guard('adminLogin')->user()->toArray(),
    ]);
  }

  public function getSystemLog(Request $request)
  {
//    Log::emergency("系统挂掉了");
//    Log::alert("数据库访问异常");
//    Log::critical("系统出现未知错误");
//    Log::error("指定变量不存在");
//    Log::warning("该方法已经被废弃");
//    Log::notice("用户在异地登录");
//    Log::info("用户xxx登录成功");
//    Log::debug("调试信息");
$logContent=Storage::disk('logs')->get('laravel.log');
   // dd(   $logContent);
    dd(    explode("\n",$logContent));
  }
}
