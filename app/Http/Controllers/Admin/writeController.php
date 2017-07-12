<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Doc;
use App\Http\Model\Upload;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class writeController extends Controller
{
  public function view(Request $request)
  {
    return view('admin.write', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.write'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }



  public function previewImgUpload(Request $request)
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
      $dir = 'image';
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


      return response()->json(['code' => 1, 'msg' => '上传成功', 'url' =>'/public/upload/'. $dir . '/' . date('Ymd') . '/' . $fileName, 'fileName' => $fileName, 'size' => round($size / 1024, 2)]);



    }


    //判断请求中是否包含name=file的上传文件
    //return response()->json(['code'=>$request->hasFile('file')]);
//    dd($request->hasFile('file'));
//    if (!$request->hasFile('file')) {
//      dd('上传文件为空！');
//    }
  }

  public function write(Request $request)
  {
    $type=$request->input('type');
    $title=$request->input('title');
    $previewImg=$request->input('previewImg');
    $tag=$request->input('tag');
    $category=$request->input('category');
    $abstract=$request->input('abstract');
    $keyword=$request->input('keyword');
    $view=$request->input('view');
    $author=$request->input('author');
    $from=$request->input('from');
    $content=$request->input('content');

    $doc = new Doc;

    $doc->type = $type;
    $doc->title = $title;
    $doc->preview_img = $previewImg;
    $doc->tag = $tag;
    $doc->category = $category;
    $doc->abstract = $abstract;
    $doc->keyword = $keyword;
    $doc->view = $view;
    $doc->author = $author;
    $doc->from = $from;
    $doc->content = $content;
    $doc->status = 'published';
    $doc->published_date = date('Y-m-d H:i:s', time());
    $doc->url = date('Y-m-d H:i:s', time());
    $doc->publisher_id =$request->session()->get('userInfo')->id;
    $res = $doc->save();

    if($res){
      return response()->json(['code'=>1,'msg'=>'添加成功']);
    }
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
}
