<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bannerManageEditController extends Controller
{


  public function view(Request $request)
  {
    return view('admin.banner_manage_edit', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.banner_manage_edit'),
      'userInfo' => $request->session()->get('userInfo'),
    ]);
  }

  public function bannerManageEditUpload(Request $request)
  {
    //$file=Input::file('Filedata');
    $file = $request->file('Filedata');
    if ($file->isValid()) {


      $realPath = $file->getRealPath();
      $extension = $file->getClientOriginalExtension();
      $fileNameOriginal = $file->getClientOriginalName();

      $fileName = date('YmdHis') . mt_rand(100, 999) . '.' . $extension;
      $extensionReal = $file->guessExtension();
      $size = $file->getClientSize();

      if ($extension !== 'jpg' || $extensionReal !== 'jpeg') {
        if ($extension !== $extensionReal) {

          return response()->json(['code' => 0, 'msg' => '文件类型错误!!!']);
        }
      }

      switch ($extension) {
        case 'jpg':
          $dir = 'image';

          break;
        case 'png':
          $dir = 'image';
          break;
        case 'gif':
          $dir = 'image';
          break;
        case 'jpeg'  :
          $dir = 'image';
          break;
        case 'pdf':
          $dir = 'pdf';
          break;
        case 'mp4':
          $dir = 'mp4';
          break;
        case 'zip':
          $dir = 'zip';
          break;
        case 'rar':
          $dir = 'rar';
          break;
        default:
          $dir = 'other';
          break;
      }
      $path = $file->move(base_path() . '/public/upload/' . $dir . '/' . date('Ymd'), $fileName);

      if ($path) {
        $uploadTime = date('Y-m-d H:i:s', $path->getMTime());
        $fileNameNow = $path->getFilename();
        $fileType = $path->guessExtension();
        $fileSize = $path->getSize();
        $uploadPath = $path->getPath();

        $upload = new Upload;

        $upload->admin_user = $request->session()->get('userInfo')->username;
        $upload->filename_original = $fileNameOriginal;
        $upload->filename_now = $fileNameNow;
        $upload->url = $uploadPath;
        $upload->type_real = $fileType;
        $upload->size = $fileSize;
        $upload->upload_time = $uploadTime;
        $res = $upload->save();
      }


//if(){
//
//}
      switch ($dir) {
        case 'zip':
          return response()->json(['code' => 1, 'msg' => '上传成功', 'url' => $dir . '/' . 'zip-default.jpg', 'fileName' => $fileName, 'size' => round($size / 1024, 2)]);
          break;
        case 'rar':
          return response()->json(['code' => 1, 'msg' => '上传成功', 'url' => $dir . '/' . 'rar-default.jpg', 'fileName' => $fileName, 'size' => round($size / 1024, 2)]);
          break;
        case 'pdf':
          return response()->json(['code' => 1, 'msg' => '上传成功', 'url' => $dir . '/' . 'pdf-default.jpg', 'fileName' => $fileName, 'size' => round($size / 1024, 2)]);
          break;
        case 'mp4':
          return response()->json(['code' => 1, 'msg' => '上传成功', 'url' => $dir . '/' . 'mp4-default.jpg', 'fileName' => $fileName, 'size' => round($size / 1024, 2)]);
          break;
        default:
          return response()->json(['code' => 1, 'msg' => '上传成功', 'url' => $dir . '/' . date('Ymd') . '/' . $fileName, 'fileName' => $fileName, 'size' => round($size / 1024, 2)]);
          break;
      }


    }


    //判断请求中是否包含name=file的上传文件
    //return response()->json(['code'=>$request->hasFile('file')]);
//    dd($request->hasFile('file'));
//    if (!$request->hasFile('file')) {
//      dd('上传文件为空！');
//    }
  }

  public function saveSlider()
  {
    $res=DB::table('banner_sliders')->insert(array(
      array('title' => 'taylor@example.com', 'url' => '8', 'img_title' =>  '8', 'img_alt' =>  '8'),
      array('title' => 'taylor@example.com', 'url' => '8', 'img_title' =>  '8', 'img_alt' =>  '8'),
    ));

    dd($res);
  }

}
