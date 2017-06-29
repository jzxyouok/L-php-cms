<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;

class writeController extends Controller
{
  public function view(Request $request)
  {
    return view('admin.write', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.write'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }

  public function write(Request $request)
  {
    $type=$request->input('type');
    $title=$request->input('title');
    $previewImg=$request->input('previewImg');
    $tag=$request->input('tag');
    $category=$request->input('category');
    $abstract=$request->input('abstract');
    $keyword=$request->input('keyword');
    $view=$request->input('view');
    $author=$request->input('author');
    $from=$request->input('from');
    $content=$request->input('content');

  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
}
