<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Utils\Functions;

class adminUserGroupAddController extends Controller
{




  public function view(Request $request)
  {
    return view('admin.admin_user_group_add', [
      'name' => '3433',
      'cms'=>config('cms.cms'),
      'cms_name'=>config('cms.cms_name'),
      'category'=>config('cms.users_manage'),
      'item'=>config('cms.admin_user_groups_add'),
    ]);
  }

  public function add(Request $request){
    $name = $request->input('name');
    $remark = $request->input('remark');
    $group_id = $request->input('group_id');
    $pid = $request->input('pid');
    $status = $request->input('status');
//    echo $pid;

//    DB::connection();
    DB::table('admin_user_groups')->insert([
      ['name'=>$name,'remark'=>$remark,'group_id'=>$group_id,'pid'=>$pid,'status'=>$status],

    ]);
  }






}
