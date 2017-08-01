<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Http\Model\AdminUser;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Support\Facades\Input;

class adminLoginController extends Controller
{
  protected $redirectTo = '/me';
  protected $redirectAfterLogout = '/';

  function __construct()
  {


  }

  public function view(Request $request)
  {



    return view('admin.admin_login', [

    ]);


  }

  public function gotoLogin()
  {

    return redirect()->route('admin_login');
  }

  public function login(Request $request)
  {

    $email = $request->input('email');
    $password = $request->input('password');
    $code = $request->input('code');
$input=Input::only(['email','password']);
//dd(Crypt::encrypt(''));
    /*
     * 从session中获取code
     * */
    $code_session = $request->session()->get('code');


    if ($code !== $code_session) {

      return response()->json(['code' => 0, 'msg' => '验证码错误！']);

    } else {

      $email_data = DB::table('users')->where('email', $email)->value('email');

      if (!$email_data) {

        return response()->json(['code' => 0, 'msg' => '用户名或密码错误！']);
      } else {

        $password_data = DB::table('users')->where('email', $email)->value('password');
        //$password !== Crypt::decrypt($password_data)
        if (false) {
          return response()->json(['code' => 0, 'msg' => '用户名或密码错误！']);

        } else {







          if (Auth::guard('adminLogin')->attempt($input)) {
            return response()->json(['code' => 1, 'msg' => '登录成功！']);
          }

//          $request->session()->put('email', $username);
//          $userInfo = DB::table('users')->where('email', $request->session()->get('email'))->first();
//          $request->session()->put('userInfo', $userInfo);
//          return response()->json(['code' => 1, 'msg' => '登录成功！']);
        }
      }

    }

    //DB::table('admin_users')
//        $user=AdminUser::first();
//        if($user->username===){
//
//        }
  }


  public function updateCode(Request $request){
    /*
             * 创建验证码
             * */
    $this->builder = new CaptchaBuilder;
    $this->builder->build();


    /*
        * 保存验证码进session
        * */
    $request->session()->put('code', $this->builder->getPhrase());
    $base64=$this->builder->inline();

    return response()->json(['code' => 1, 'base64' => $base64]);

  }


  public function getCode(Request $request){
    /*
            * 创建验证码
            * */
    $this->builder = new CaptchaBuilder;
    $this->builder->build();


    /*
        * 保存验证码进session
        * */
    $request->session()->put('code', $this->builder->getPhrase());
    $base64=$this->builder->inline();
    return response()->json(['code' => 1, 'base64' => $base64]);
  }















}
