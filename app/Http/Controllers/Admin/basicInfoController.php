<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class basicInfoController extends Controller
{
    public function view(Request $request){

    //  dd($request->session()->all());
//      dd(Auth::guard('adminLogin')->user()->toArray()['email']);

      return view('admin.basic_info', [
        'cms'=>config('cms.cms'),
        'cms_name'=>config('cms.cms_name'),
        'category'=>config('cms.panel'),
        'item'=>config('cms.basic_info'),
        'userInfo'=>Auth::guard('adminLogin')->user()->toArray(),
      ]);
    }
}
