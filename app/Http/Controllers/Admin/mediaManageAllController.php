<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class mediaManageAllController extends Controller
{
  public function view(Request $request)
  {


    return view('admin.media_manage_all', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.file_manage'),
      'item' => config('cms.media_manage_all'),
      'userInfo' => $request->session()->get('userInfo'),
    ]);
  }

  public function getAllMedia(Request $request)
  {
//    $image = Storage::disk('upload')->allFiles('image');
//    $mp4 = Storage::disk('upload')->allFiles('mp4');
//    $pdf = Storage::disk('upload')->allFiles('pdf');
//    $rar = Storage::disk('upload')->allFiles('rar');
//    $zip = Storage::disk('upload')->allFiles('zip');

    //$upload = Upload::select(['admin_user'])->get();
    //$upload = Upload::all(['admin_user']);
    //$upload = Upload::find('admin_user', ['name']);

    $upload = Upload::where('admin_user', $request->session()->get('userInfo')->username)->get(['admin_user', 'filename_now', 'url', 'size', 'upload_time', 'type_real']);

    return response()->json($upload->toArray());


  }

  public function filterData(Request $request)
  {
    $type_real = $request->input('type_real');
    switch ($type_real) {
      case 'allFile':
        $type_real = ['jpeg', 'png', 'gif','rar','zip','pdf'];
        break;
      case 'image':
        $type_real = ['jpeg', 'png', 'gif'];
        break;
      case 'rar':
        $type_real = ['rar'];
        break;
      case 'zip':
        $type_real = ['zip'];
        break;
      case 'pdf':
        $type_real = ['pdf'];
        break;
    }


    $upload_time = $request->input('upload_time');

    if($upload_time==='allTime'){

      $upload = Upload::where('admin_user', $request->session()->get('userInfo')->username)
        ->whereIn('type_real',  $type_real)
        ->get(['admin_user', 'filename_now', 'url', 'size', 'upload_time', 'type_real']);
    }else{

      $upload = Upload::where('admin_user', $request->session()->get('userInfo')->username)
        ->whereBetween('upload_time', [$upload_time . '-01 00:00:00', $upload_time . '-31 24:00:00'])
        ->whereIn('type_real',  $type_real)
        ->get(['admin_user', 'filename_now', 'url', 'size', 'upload_time', 'type_real']);
    }


    return response()->json($upload->toArray());
  }


}
