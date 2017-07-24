<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class meController extends Controller
{

  public function mePost()
  {
    return view('index.woshipm.templates.me_post');
  }
  public function meCollection()
  {
    return view('index.woshipm.templates.me_collection');
  }
  public function meAnswer()
  {
    return view('index.woshipm.templates.me_answer');
  }
  public function meComment()
  {
    return view('index.woshipm.templates.me_comment');
  }
  public function meSubscribe()
  {
    return view('index.woshipm.templates.me_subscribe');
  }
  public function meReward()
  {
    return view('index.woshipm.templates.me_reward');
  }
  public function meMessage()
  {
    return view('index.woshipm.templates.me_message');
  }
  public function meSetting()
  {
    return view('index.woshipm.templates.me_setting');
  }
  public function meSettingPassword()
  {
    return view('index.woshipm.templates.me_setting_password');
  }
  public function meSettingAvatar()
  {
    return view('index.woshipm.templates.me_setting_avatar');
  }

  public function getUserInfo(Request $request)
  {
$user=Auth::user()->toArray();
    return response()->json(['code'=>1,'user'=>$user]);
  }

}
