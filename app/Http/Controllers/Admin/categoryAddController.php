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
      'userInfo' => $request->session()->get('userInfo'),
    ]);
  }


  public function addCategory(Request $request)
  {
    $name = $request->input('name');
    $slug = $request->input('slug');
    $order = $request->input('order');
    $parent = $request->input('parent');
    $remark = $request->input('remark');


    if ($name != '') {
      if (Category::where('name', $name)->first()) {
        return response()->json(['code' => 0, 'msg' => '分类已经存在！']);
      }

      if (Category::where('slug', $slug)->first()) {
        return response()->json(['code' => 0, 'msg' => '别名已经存在！']);
      }
      $category = new Category;
      $category->name = $name;
      $category->slug = $slug;
      $category->order = $order;
      $category->parent = $parent;
      $category->remark = $remark;
      $res = $category->save();
      if ($res) {
        return response()->json(['code' => 1, 'msg' => '添加成功！']);
      } else {
        return response()->json(['code' => 0, 'msg' => '添加失败！']);
      }
    }


  }


}
