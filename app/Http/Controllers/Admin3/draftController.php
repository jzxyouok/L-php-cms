<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class draftController extends Controller
{
  public function view(Request $request)
  {
    return view('admin.draft', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.draft'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }
}
