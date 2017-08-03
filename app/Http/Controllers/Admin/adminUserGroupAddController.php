<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\AdminUserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adminUserGroupAddController extends Controller
{




  public function view(Request $request)
  {
    return view('admin.admin_user_group_add', [
      'cms'=>config('cms.cms'),
      'cms_name'=>config('cms.cms_name'),
      'category'=>config('cms.admin_user_manage'),
      'item'=>config('cms.admin_user_groups_add'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }

  public function add(Request $request){

    $name = $request->input('name');
    $remark = $request->input('remark');
    $group_id = $request->input('group_id');
    $pid = $request->input('pid');
    $status = $request->input('status');
    if($name!=''){
      if(AdminUserGroup::where('name', $name)->first()){
        return response()->json(['code'=>false,'msg'=>'用户组已经存在！']);
      }

//    DB::table('admin_user_groups')->insert([
//      ['name'=>$name,'remark'=>$remark,'pid'=>$pid,'status'=>$status],
//
//    ]);
      $adminUserGroup=new AdminUserGroup;
      $adminUserGroup->name=$name;
      $adminUserGroup->remark=$remark;
      $adminUserGroup->group_id=$group_id;
      $adminUserGroup->pid=$pid;
      $adminUserGroup->status=$status;
      $res=$adminUserGroup->save();
      return response()->json(['code'=>$res,'msg'=>'添加成功！']);
    }




  }








}
