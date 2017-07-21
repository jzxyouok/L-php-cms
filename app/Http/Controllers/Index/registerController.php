<?php

namespace App\Http\Controllers\Index;

use App\Http\Model\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class registerController extends Controller
{
  public function view()
  {
    return view('index.woshipm.templates.register');
  }

  public function checkAccount(Request $request)
  {
    $registerStyle = $request->input('registerStyle');
    $input = Input::all();
    $rules = [];

    if ($registerStyle === 'true') {
      $rules = [
        'phone' => 'required|regex:/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/|unique:users,phone',


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

    } elseif ($registerStyle === 'false') {
      $rules = [
        'email' => 'required|regex:/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/|unique:users,email',


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


    ];
    $validator = Validator::make($input, $rules, $messages);

    if ($validator->passes()) {

      return response()->json(['code' => 1, 'msg' => '可以注册']);
    } else {
      return response()->json(['code' => 0, 'msg' => $validator->errors()->all()]);
    }


  }

  public function register(Request $request)
  {
    $registerStyle = $request->input('registerStyle');
    $input = $request->only(['registerStyle', 'account', 'password']);
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

//      User::create($input);
//      return response()->json(['code' => 1, 'msg' => '注册成功']);
      return response()->json(['code' => 1, 'msg' => '邮箱密码符合注册要求']);
    } else {
      return response()->json(['code' => 0, 'msg' => $validator->errors()->all()]);
    }


  }

  public function sendRegisterEmail(Request $request)
  {
    $email = $request->input('email');

    $number = mt_rand(100000, 999999);
    $request->session()->put('randNumber', $number);
    $flag = Mail::send('admin.register_email', ['number' => $number], function ($message) use($email) {
      $to = $email;
      $message->to($to)->subject('【重要】Viralnova中文网验证码');
    });

    if ($flag) {
      echo '发送邮件成功，请查收！';
    } else {
      echo '发送邮件失败，请重试！';
    }
  }

  public function registerAfterSendEmail(Request $request)
  {
    $randNumber = $request->session()->get('randNumber');
    $emailVerifyCode = $request->input('emailVerifyCode');

if($randNumber!=$emailVerifyCode){
  return response()->json(['code'=>0,'msg'=>'验证码错误']);
}

    $registerStyle = $request->input('registerStyle');

    $input = $request->only(['registerStyle', 'account', 'password']);
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

      $res=User::create($input);

      if($res){
        $request->session()->forget('randNumber');
        return response()->json(['code' => 1, 'msg' => '注册成功']);
      }else{
        return response()->json(['code' => 1, 'msg' => '注册失败']);
      }

    } else {
      return response()->json(['code' => 0, 'msg' => $validator->errors()->all()]);
    }

  }


}
