<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\BannerSlider;
use App\Http\Model\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bannerManageEditController extends Controller
{


  public function view(Request $request, $id, $name)
  {

    return view('admin.banner_manage_edit', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.banner_manage_edit') . '(' . $name . ')',
      'userInfo' => $request->session()->get('userInfo'),
      'bannerId' => $id,
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

  public function saveSlider(Request $request)
  {

    $bannerId = $request->input('bannerId');
    $sliderDataExist = $request->input('sliderDataExist');
    $sliderDataExistOriginal = $request->input('sliderDataExistOriginal');
    $sliderDataNewAllFormat = $request->input('sliderDataNewAllFormat');
///dd($sliderDataExistOriginal);
    if (count($sliderDataNewAllFormat) >= 1) {
      for ($z = 0; $z < count($sliderDataNewAllFormat); $z++) {
        $res = DB::table('banner_sliders')->insertGetId($sliderDataNewAllFormat[$z]);
        $sliderDataNewAllFormat[$z]['id'] = $res;

      }
//      dd($sliderDataNewAllFormat);


      //dd($selectLength);


    }

    //  dd($sliderDataExist);
    // dd($sliderDataNewAllFormat);


    if ($sliderDataNewAllFormat === null) {
      $sliderDataNewAllFormat = [];
//dd($sliderDataExistOriginal);
      //   dd(BannerSlider::where(['id'=>'53','banner_id'=>$bannerId])->get()->toArray());
      $sliderDataExistOriginal = BannerSlider::where('banner_id', $bannerId)->get(['id', 'banner_id', 'img_src', 'title', 'url', 'img_title', 'img_alt'])->toArray();
      //dd($sliderDataExistOriginal);
    }
    //else{
    $sliders = array_merge($sliderDataExistOriginal, $sliderDataNewAllFormat);

    //}
    // dd($sliders);
//    dd($sliders[0]['id']);
    $length = count($sliders);
    //  $data = array();
    dd($length);
    $updateRes = [];
    for ($i = 0; $i < $length; $i++) {
//dd($sliders[$i]['id']);
      $updateRes[$i] = BannerSlider::where(['id' => $sliders[$i]['id'], 'banner_id' => $bannerId])
        ->update([
          'img_src' => $sliders[$i]['img_src'],
          'title' => $sliders[$i]['title'],
          'url' => $sliders[$i]['url'],
          'img_title' => $sliders[$i]['img_title'],
          'img_alt' => $sliders[$i]['img_alt']
        ]);


//      array_push($data, array(
//          'banner_id' => $bannerId,
//          'title' => $bannerTitle[$i],
//          'url' => $bannerUrl[$i],
//          'img_title' => $imgTitle[$i],
//          'img_alt' => $imgAlt[$i]
//        )
//      );
    }

    $updateResIf = true;
    for ($j = 0; $j < count($updateRes); $j++) {

      if (!$updateRes[$j]) {
        $updateResIf = false;
        break;
      }

    }

    if ($updateResIf === true) {
      return response()->json(['code' => 1, 'msg' => '保存成功']);
    } else {
      return response()->json(['code' => 0, 'msg' => '保存失败']);
    }


  }

  public function sliderGet(Request $request)
  {
    $bannerId = $request->input('bannerId');
    $sliders = BannerSlider::where('banner_id', $bannerId)->get(['id', 'banner_id', 'img_src', 'title', 'url', 'img_title', 'img_alt']);
    return response()->json($sliders->toArray());

  }


}
