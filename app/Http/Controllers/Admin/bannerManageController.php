<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class bannerManageController extends Controller
{


  public function view(Request $request)
  {

    return view('admin.banner_manage', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.banner_manage'),
      'userInfo' => Auth::guard('adminLogin')->user()->toArray(),
    ]);
  }


  public function bannerItemAddCommit(Request $request)
  {
    $name = $request->input('name');
    $remark = $request->input('remark');

    if (Banner::where('name', $name)->first()) {
      return response()->json(['code' => 0, 'msg' => '轮播项目已经存在']);
    } else{
      $banner = new Banner;
      $banner->name = $name;
      $banner->remark = $remark;
      $res = $banner->save();
      if ($res) {
        return response()->json(['code' => 1, 'msg' => '新增成功']);
      } else {
        return response()->json(['code' => 0, 'msg' => '新增失败']);
      }
    }

  }

  public function bannerGet()
  {

    $bannerAll = DB::table('banners')->get();

    return response()->json($bannerAll);
  }

}
