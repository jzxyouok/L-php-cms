<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Http\Model\AdminUser;


class adminLoginController extends Controller
{
    public function view(){
      return view('admin.admin_login', [

      ]);
    }

    public function gotoLogin(){
      return redirect()->route('admin_login');
    }

    public function login(Request $request){
      $name = $request->input('name');
      //DB::table('admin_users')
//        $user=AdminUser::first();
//        if($user->username===){
//
//        }
    }

}
