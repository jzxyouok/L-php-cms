<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Model\Category;
use Illuminate\Support\Facades\DB;

class categoryAddController extends Controller
{
  public function view(Request $request)
  {

    return view('admin.category_add', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.category_add'),
      'userInfo'=>$request->session()->get('userInfo'),
    ]);
  }

  public function get(Request $request)
  {
    $categories=DB::table('categories')->get();
    return response()->json($categories);
  }

  public function addCategory(Request $request)
  {
    $name = $request->input('name');
    $slug = $request->input('slug');
    $order = $request->input('order');
    $parent = $request->input('parent');
    $remark = $request->input('remark');

    $category = new Category;
    $category->name = $name;
    $category->slug = $slug;
    $category->order = $order;
    $category->parent = $parent;
    $category->remark = $remark;
    $category->save();
  }
  
  
  
  
  
}
