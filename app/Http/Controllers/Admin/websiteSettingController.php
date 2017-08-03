<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class websiteSettingController extends Controller
{
  public function view(Request $request)
  {

    return view('admin.website_setting', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.system_setting'),
      'item' => config('cms.website_setting'),
      'userInfo' => Auth::guard('adminLogin')->user()->toArray(),
    ]);
  }
}
