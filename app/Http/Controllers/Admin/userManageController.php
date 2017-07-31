<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Util\Settings;
use Illuminate\Support\Facades\DB;

class userManageController extends Controller
{


  public function view(Request $request)
  {
    return view('admin.user_manage', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.user_manage'),
      'item' => config('cms.user_manage'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }

  public function getUser(Request $request)
  {
    $users=DB::table('users')->get();
    return response()->json($users);
  }



}
