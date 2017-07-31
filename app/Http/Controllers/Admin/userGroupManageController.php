<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\userGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class userGroupManageController extends Controller
{


  public function view(Request $request)
  {
    return view('admin.user_group_manage', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.user_manage'),
      'item' => config('cms.user_group_manage'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }

  public function addUserGroup(Request $request)
  {

    $name = $request->input('name');
    $remark = $request->input('remark');
    $group_id = $request->input('group_id');
    $pid = $request->input('pid');
    $status = $request->input('status');
    if($name!=''){

      if(userGroup::where('name', $name)->first()){
        return response()->json(['code'=>false,'msg'=>'用户组已经存在！']);
      }

//    DB::table('admin_user_groups')->insert([
//      ['name'=>$name,'remark'=>$remark,'pid'=>$pid,'status'=>$status],
//
//    ]);
      $adminUserGroup=new userGroup;
      $adminUserGroup->name=$name;
      $adminUserGroup->remark=$remark;
      $adminUserGroup->group_id=$group_id;
      $adminUserGroup->pid=$pid;
      $adminUserGroup->status=$status;
      $res=$adminUserGroup->save();
      if($res){
        return response()->json(['code'=>1,'msg'=>'添加成功！']);
      }else{
        return response()->json(['code'=>0,'msg'=>'添加失败！']);
      }

    }

  }

  public function getUserGroup(Request $request)
  {
    $groups = DB::table('user_groups')->get();
    return response()->json($groups);
}

  public function forbiddenStatus(Request $request)
  {

    $name=$request->input('name');

    $adminUserGroup=userGroup::where('name', $name)->first();
    $adminUserGroup->status=0;
    $adminUserGroup->save();
  }

  public function startUsing(Request $request)
  {
    $name=$request->input('name');

    $adminUserGroup=userGroup::where('name', $name)->first();
    $adminUserGroup->status=1;
    $adminUserGroup->save();
  }

  public function modifyPower(Request $request)
  {
    $name=$request->input('name');
    $power=$request->input('power');


    $adminUserGroup=userGroup::where('name', $name)->first();
    $adminUserGroup->power=json_encode($power) ;

    $res=$adminUserGroup->save();
    if($res){
      return response()->json(['code'=>1,'msg'=>'提交成功']);
    }else{
      return response()->json(['code'=>0,'msg'=>'提交失败']);
    }
  }

  public function editUserGroup(Request $request)
  {
    $id=$request->input('id');
    $name=$request->input('name');
    $pid=$request->input('pid');
    $remark=$request->input('remark');


    $adminUserGroup=userGroup::where('id', $id)->first();
    $adminUserGroup->name=$name;
    $adminUserGroup->pid=$pid;
    $adminUserGroup->remark=$remark;
    $res=$adminUserGroup->save();
    if($res){
      return response()->json(['code'=>1,'msg'=>'编辑成功']);
    }else{
      return response()->json(['code'=>0,'msg'=>'编辑失败']);
    }
  }







}
