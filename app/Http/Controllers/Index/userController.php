<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class userController extends Controller
{
  public function view($userId)
  {
    return view('index.woshipm.templates.user_index',[
'$userId'=>$userId
    ]);
  }

}
