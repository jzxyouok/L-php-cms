<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\AdminUserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class adminUserGroupAllController extends Controller
{


  public function view(Request $request)
  {
    return view('admin.admin_user_group_all', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.admin_user_manage'),
      'item' => config('cms.admin_user_groups_all'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }

  public function get(Request $request)
  {
    $groups = DB::table('admin_user_groups')->get();
    return response()->json($groups);
  }

  public function forbiddenStatus(Request $request)
  {

    $name=$request->input('name');

    $adminUserGroup=AdminUserGroup::where('name', $name)->first();
    $adminUserGroup->status=0;
    $adminUserGroup->save();
  }

  public function startUsing(Request $request)
  {
    $name=$request->input('name');

    $adminUserGroup=AdminUserGroup::where('name', $name)->first();
    $adminUserGroup->status=1;
    $adminUserGroup->save();
  }

  public function userGroupEdit(Request $request)
  {
    $name=$request->input('name');
    $pid=$request->input('pid');
    $remark=$request->input('remark');

    $adminUserGroup=AdminUserGroup::where('name', $name)->first();
    $adminUserGroup->name=$name;
    $adminUserGroup->pid=$pid;
    $adminUserGroup->remark=$remark;
    $adminUserGroup->save();
  }

  public function modifyPower(Request $request)
  {
    $name=$request->input('name');
    $power=$request->input('power');


    $adminUserGroup=AdminUserGroup::where('name', $name)->first();
    $adminUserGroup->power=json_encode($power) ;

    $adminUserGroup->save();
  }

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

}
