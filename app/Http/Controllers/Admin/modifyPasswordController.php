<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class modifyPasswordController extends Controller
{
  public function view(){
    return view('admin.modify_password', [
      'cms'=>config('cms.cms'),
      'cms_name'=>config('cms.cms_name'),
      'category'=>config('cms.panel'),
      'item'=>config('cms.modify_password'),
    ]);
  }
}
