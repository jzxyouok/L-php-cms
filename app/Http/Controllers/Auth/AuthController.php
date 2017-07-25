<?php

namespace App\Http\Controllers\Auth;

use App\Http\Model\Doc;
use App\Http\Model\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Registration & Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users, as well as the
  | authentication of existing users. By default, this controller uses
  | a simple trait to add these behaviors. Why don't you explore it?
  |
  */

  use AuthenticatesAndRegistersUsers, ThrottlesLogins;

  /**
   * Where to redirect users after login / registration.
   *
   * @var string
   */
  protected $redirectTo = '/me';
  protected $redirectAfterLogout = '/';

  protected $registerView = 'index.woshipm.templates.register';//自定义注册页面的所用的模版所在的位置
  protected $loginView = 'index.woshipm.templates.login';

  /**
   * Create a new authentication controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware($this->guestMiddleware(), ['except' => 'logout']);

  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
    return Validator::make($data, [
//      'name' => 'required|max:255',
      'email' => 'required|regex:/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/|unique:users,email',
      'password' => 'required|regex:/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/|between:6,21',
    ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array $data
   * @return User
   */
  protected function create(array $data)
  {

    return User::create([
      'nickname' => $data['nickname'],
      'email' => $data['email'],
      'password' => bcrypt($data['password']),

    ]);
  }

  public function register(Request $request)
  {
    $randNumber = $request->session()->get('randNumber');
    $emailVerifyCode = $request->input('emailVerifyCode');

    if ($randNumber != $emailVerifyCode) {
      return response()->json(['code' => 0, 'msg' => '验证码错误']);
    }
    $registerStyle = $request->input('registerStyle');

    $input = $request->only(['email', 'password', 'nickname']);


    $rules = [];

    if ($registerStyle === 'true') {//手机注册
      $rules = [
        'phone' => 'required|regex:/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/|unique:users,phone',
        'password' => 'required|regex:/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/|between:6,21',

      ];
      foreach ($input as $k => $v) {
        if ($k === 'registerStyle') {
          unset($input[$k]);

        }
        if ($k === 'account') {
          $input['phone'] = $input[$k];
        }
      }
      foreach ($input as $k => $v) {
        if ($k === 'account') {
          unset($input[$k]);

        }

      }

    } elseif ($registerStyle === 'false') {//邮箱注册
      $rules = [
        'email' => 'required|regex:/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/|unique:users,email',
        'password' => 'required|regex:/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/|between:6,21',

      ];
      foreach ($input as $k => $v) {
        if ($k === 'registerStyle') {
          unset($input[$k]);

        }
        if ($k === 'account') {
          $input['email'] = $input[$k];
        }
      }
      foreach ($input as $k => $v) {
        if ($k === 'account') {
          unset($input[$k]);

        }

      }

    }

    $messages = [
      'phone.required' => '手机号码不能为空',
      'phone.regex' => '手机号码格式不正确',
      'phone.unique' => '手机号码是否唯一',
      'email.required' => '邮箱不能为空',
      'email.regex' => '邮箱格式不符合要求',
      'email.unique' => '邮箱已经被注册',
      'password.required' => '密码不能为空',
      'password.regex' => '密码格式不正确',
      'password.between' => '密码长度必须在6-21之间'

    ];

    $validator = Validator::make($input, $rules, $messages);

    if ($validator->passes()) {


//dd($input);

      $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
      $key = '';
      for ($i = 0; $i < 8; $i++) {
        $key .= $pattern{mt_rand(0, 35)};    //生成php随机数
      }


      $randNickName = '新用户' . $key;
      $input['nickname'] = $randNickName;

      // dd($input);


      Auth::guard($this->getGuard())->login($this->create($input));
      // dd($request->session()->all());
      $request->session()->forget('randNumber');
      //return redirect($this->redirectPath());
      //return Redirect::to($this->redirectPath());

      return response()->json(['code' => 1, 'msg' => '注册成功']);

    } else {
      return response()->json(['code' => 0, 'msg' => $validator->errors()->all()]);
    }

//        $validator = $this->validator($request->all());

//        if ($validator->fails()) {
//            $this->throwValidationException(
//                $request, $validator
//            );
//        }

//        Auth::guard($this->getGuard())->login($this->create($request->all()));
//
//        return redirect($this->redirectPath());
  }


  public function login(Request $request)
  {

    $account = $request->input('account');
    $password = $request->input('password');
    if (preg_match('/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/', $account)) {

      $input['email'] = $account;
      $input['password'] = $password;
     // dd($input);
      $rules = [
        'email' => 'required|regex:/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/',
        'password' => 'required|regex:/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/|between:6,21',

      ];
      $messages = [
        'phone.required' => '手机号码不能为空',
        'phone.regex' => '手机号码格式不正确',
        'phone.unique' => '手机号码是否唯一',
        'email.required' => '邮箱不能为空',
        'email.regex' => '邮箱格式不符合要求',
        'email.unique' => '邮箱已经被注册',
        'password.required' => '密码不能为空',
        'password.regex' => '密码格式不正确',
        'password.between' => '密码长度必须在6-21之间'

      ];

      $validator = Validator::make($input, $rules, $messages);

      if ($validator->passes()) {

      //  Auth::guard($this->getGuard())->attempt($input);
       if(Auth::guard($this->getGuard())->attempt($input)){
         return response()->json(['code' => 1, 'msg' => '邮箱登录成功']);
       }else{
         return response()->json(['code' => 0, 'msg' => '用户名或密码错误']);
       }

      } else {
        return response()->json(['code' => 0, 'msg' => $validator->errors()->all()]);
      }
    } else {
      $input['phone'] = $account;
      $input['password'] = $password;
      // dd($input);
      $rules = [
        'phone' => array('required', 'regex:/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/'),

        'password' => 'required|regex:/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/|between:6,21',

      ];
      $messages = [
        'phone.required' => '手机号码不能为空',
        'phone.regex' => '手机号码格式不正确',
        'phone.unique' => '手机号码是否唯一',
        'email.required' => '邮箱不能为空',
        'email.regex' => '邮箱格式不符合要求',
        'email.unique' => '邮箱已经被注册',
        'password.required' => '密码不能为空',
        'password.regex' => '密码格式不正确',
        'password.between' => '密码长度必须在6-21之间'

      ];

      $validator = Validator::make($input, $rules, $messages);

      if ($validator->passes()) {
        if(Auth::guard($this->getGuard())->attempt($input)){
          return response()->json(['code' => 1, 'msg' => '手机登录成功']);
        }else{
          return response()->json(['code' => 0, 'msg' => '用户名或密码错误']);
        }
      } else {
        return response()->json(['code' => 0, 'msg' => $validator->errors()->all()]);
      }


    }




  }
}
