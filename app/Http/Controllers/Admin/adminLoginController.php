<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Http\Model\AdminUser;
use Gregwar\Captcha\CaptchaBuilder;

class adminLoginController extends Controller
{
  public $builder;
  function __construct() {
    $this->builder = new CaptchaBuilder;

  }
  public function view()
  {
    /*
     * 创建验证码
     * */

    $this->builder->build();
 
    return view('admin.admin_login', [
      'builder' => $this->builder
    ]);
  }

  public function gotoLogin()
  {

    return redirect()->route('admin_login');
  }

  public function login(Request $request)
  {
    $name = $request->input('username');
    $password = $request->input('password');
    $code = $request->input('code');
    $this->builder->testPhrase(1);
    if ($this->builder->testPhrase($code)) {
      dd(1);
    }
    dd(2);
    //DB::table('admin_users')
//        $user=AdminUser::first();
//        if($user->username===){
//
//        }
  }

}
