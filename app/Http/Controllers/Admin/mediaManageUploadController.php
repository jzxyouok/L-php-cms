<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class mediaManageUploadController extends Controller
{
  public function view(Request $request)
  {

    return view('admin.media_manage_upload', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.file_manage'),
      'item' => config('cms.media_manage_upload'),
      'userInfo' => $request->session()->get('userInfo'),
    ]);
  }


  public function mediaManageUpload(Request $request)
  {

dd(Input::file('Filedata'));

    //判断请求中是否包含name=file的上传文件
    //return response()->json(['code'=>$request->hasFile('file')]);
//    dd($request->hasFile('file'));
//    if (!$request->hasFile('file')) {
//      dd('上传文件为空！');
//    }
  }


}
