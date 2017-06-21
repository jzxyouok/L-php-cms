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

    //$file=Input::file('Filedata');
    $file = $request->file('Filedata');
    $realPath = $file->getRealPath();
    $extension = $file->getClientOriginalExtension();
    $fileName = date('YmdHis') . mt_rand(100, 999) . '.' . $extension;

    switch ($extension) {
      case 'jpg':
        $path = $file->move(base_path() . '/public/upload/image/' . date('Ymd'), $fileName);
        break;
      case 'png':
        $path = $file->move(base_path() . '/public/upload/image/' . date('Ymd'), $fileName);
        break;
      case 'gif':
        $path = $file->move(base_path() . '/public/upload/image/' . date('Ymd'), $fileName);
        break;
      case 'jpeg'  :
        $path = $file->move(base_path() . '/public/upload/image/' . date('Ymd'), $fileName);
        break;
      case 'pdf':
        $path = $file->move(base_path() . '/public/upload/pdf/' . date('Ymd'), $fileName);
        break;
      case 'mp4':
        $path = $file->move(base_path() . '/public/upload/video/' . date('Ymd'), $fileName);
        break;
      case 'zip':
        $path = $file->move(base_path() . '/public/upload/zip/' . date('Ymd'), $fileName);
        break;
      case 'rar':
        $path = $file->move(base_path() . '/public/upload/zip/' . date('Ymd'), $fileName);
        break;
      default:
        $path = $file->move(base_path() . '/public/upload/other/' . date('Ymd'), $fileName);
    }

    //判断请求中是否包含name=file的上传文件
    //return response()->json(['code'=>$request->hasFile('file')]);
//    dd($request->hasFile('file'));
//    if (!$request->hasFile('file')) {
//      dd('上传文件为空！');
//    }
  }


}
