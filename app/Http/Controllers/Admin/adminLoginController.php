<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Http\Model\AdminUser;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

class adminLoginController extends Controller
{
  public $builder;


  function __construct()
  {


  }

  public function view(Request $request)
  {

    /*
         * 创建验证码
         * */
    $this->builder = new CaptchaBuilder;
    $this->builder->build();


    /*
        * 保存验证码进session
        * */
    $request->session()->put('code', $this->builder->getPhrase());
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
    $username = $request->input('username');
    $password = $request->input('password');
    $code = $request->input('code');


    /*
     * 从session中获取code
     * */
    $code_session = $request->session()->get('code');


    if ($code !== $code_session) {
      return response()->json(['code' => 0, 'msg' => '验证码错误！']);
    } else {
      $username_data = DB::table('admin_users')->where('username', $username)->value('username');

      if (!$username_data) {
        return response()->json(['code' => 0, 'msg' => '用户名或密码错误！']);
      } else {
        $password_data = DB::table('admin_users')->where('username', $username)->value('password');

        if ($password !== Crypt::decrypt($password_data)) {
          return response()->json(['code' => 0, 'msg' => '用户名或密码错误！']);
        } else {
          return response()->json(['code' => 1, 'msg' => '登录成功！']);
        }
      }

    }

    //DB::table('admin_users')
//        $user=AdminUser::first();
//        if($user->username===){
//
//        }
  }


  public function updateCode(){
    // Building a phrase of 3 characters
//    $phrase = PhraseBuilder::build(3);
dd(1);
// Building a phrase of 5 characters, only digits
    $phrase = PhraseBuilder::build();

// Pass it as first argument of CaptchaBuilder
    $captcha = new CaptchaBuilder($phrase);
  }















}
