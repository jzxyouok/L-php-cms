<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class mediaManageAllController extends Controller
{
  public function view(Request $request)
  {
    return view('admin.media_manage_all', [
      'cms'=>config('cms.cms'),
      'cms_name'=>config('cms.cms_name'),
      'category'=>config('cms.file_manage'),
      'item'=>config('cms.media_manage_all'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }
}
