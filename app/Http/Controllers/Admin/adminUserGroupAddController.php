<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Util\Settings;
use Illuminate\Support\Facades\DB;

class adminUserGroupAddController extends Controller
{




  public function view(Request $request)
  {
    return view('admin.admin_user_group_add', ['name' => '3433']);
  }

  public function add(Request $request){
//    $name = $request->input('name');
//    $pid = $request->input('pid');
//    echo $pid;

//    DB::connection();
    DB::table('admin_user_groups')->insert([
      ['id'=>1,'name'=>'超级管理员','remark'=>'laravel@test.com','group_id'=>'0','pid'=>'0','status'=>'1'],

    ]);
  }






}
