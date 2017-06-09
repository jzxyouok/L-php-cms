<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Http\Model\AdminUser;
use Gregwar\Captcha\CaptchaBuilder;

class adminLoginController extends Controller
{
  public function view()
  {
    /*
     * 创建验证码
     * */
    $builder = new CaptchaBuilder;
    $builder->build();
    return view('admin.admin_login', [
      'builder'=>$builder
    ]);
  }

  public function gotoLogin()
  {
    return redirect()->route('admin_login');
  }

  public function login(Request $request)
  {
    $name = $request->input('name');
    //DB::table('admin_users')
//        $user=AdminUser::first();
//        if($user->username===){
//
//        }
  }

}
