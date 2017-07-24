<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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
  protected $loginView= 'index.woshipm.templates.login';

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
}
