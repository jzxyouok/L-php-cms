<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class registerController extends Controller
{
  public function view()
  {
    return view('index.woshipm.templates.register');
  }
  public function step2()
  {
    return view('index.woshipm.templates.register2');
  }
  public function step3()
  {
    return view('index.woshipm.templates.register3');
  }
}
