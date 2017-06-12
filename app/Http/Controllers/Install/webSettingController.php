<?php

namespace App\Http\Controllers\Install;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class webSettingController extends Controller
{
  public function view()
  {
    return view('install.web_setting');
  }
}
