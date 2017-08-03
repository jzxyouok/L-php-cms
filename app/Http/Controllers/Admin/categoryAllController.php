<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class categoryAllController extends Controller
{
  public function view(Request $request)
  {

    return view('admin.category_all', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.category_all'),
      'userInfo' => Auth::guard('adminLogin')->user()->toArray(),
    ]);
  }

  public function categoryGet(Request $request)
  {

    $categories = DB::table('categories')->get();

    return response()->json($categories);
  }

  public function editCommit(Request $request)
  {
    $id = $request->input('id');
    $name = $request->input('name');
    $slug = $request->input('slug');
    $parent = $request->input('parent');
    $order = $request->input('order');
    $remark = $request->input('remark');

    if ($name != '') {

      if (Category::where('name', $name)->where('id','<>',$id)->get()->count()>=1) {
        return response()->json(['code' => 0, 'msg' => '分类已经存在！']);
      }

      if (Category::where('slug', $slug)->where('id','<>',$id)->get()->count()>=1) {
        return response()->json(['code' => 0, 'msg' => '别名已经存在！']);
      }

      $category = Category::where('id', $id)->first();


      $category->name = $name;
      $category->slug = $slug;
      $category->parent = $parent;
      $category->order = $order;
      $category->remark = $remark;
      $res = $category->save();

      if ($res) {
        return response()->json(['code' => 1, 'msg' => '修改成功！']);
      } else {
        return response()->json(['code' => 0, 'msg' => '修改失败！']);
      }

    }
  }

  public function removeCommit(Request $request)
  {
    $id = $request->input('id');

    if(Category::where('id', $id)->first()){
      $res = Category::where('id', $id)->first()->delete();
      if($res){
        return response()->json(['code'=>1,'msg'=>'删除成功！']);
      }else{
        return response()->json(['code'=>0,'msg'=>'删除失败！']);
      }
    }

  }


}
