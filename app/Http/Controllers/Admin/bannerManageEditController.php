<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bannerManageEditController extends Controller
{



  public function view(Request $request)
  {
    return view('admin.banner_manage', [
      'cms'=>config('cms.cms'),
      'cms_name'=>config('cms.cms_name'),
      'category'=>config('cms.doc_manage'),
      'item'=>config('cms.banner_manage'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }




}
