<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Util\Settings;

class adminUserAllController extends Controller
{




  public function showProfile(Request $request)
  {
    return view('admin.admin_user_group_add', ['name' => '3433']);
  }
}
