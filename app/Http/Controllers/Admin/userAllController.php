<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Util\Settings;
use Illuminate\Support\Facades\DB;

class userAllController extends Controller
{


  public function view(Request $request)
  {
    return view('admin.admin_user_all', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.users_manage'),
      'item' => config('cms.admin_user_all'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }

  public function get(Request $request)
  {
    $users=DB::table('admin_users')->get();
    return response()->json($users);
  }


}
