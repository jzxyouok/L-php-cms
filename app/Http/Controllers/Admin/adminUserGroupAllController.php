<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class adminUserGroupAllController extends Controller
{


  public function view(Request $request)
  {
    return view('admin.admin_user_group_all', [
      'name' => '3433',
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.users_manage'),
      'item' => config('cms.admin_user_groups_all'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }

  public function get(Request $request)
  {
    $groups = DB::table('admin_user_groups')->get();
    return response()->json($groups);
  }


}
