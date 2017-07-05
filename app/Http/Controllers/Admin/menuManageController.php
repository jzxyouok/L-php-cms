<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class menuManageController extends Controller
{
  public function view(Request $request)
  {

    return view('admin.menu_manage', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.menu_manage'),
      'userInfo' => $request->session()->get('userInfo'),

    ]);
  }

  public function addMenu(Request $request)
  {
    $input = Input::all();
    $name=$request->input('name');
    $url=$request->input('url');
    $target=$request->input('target');
    $parent=$request->input('parent');
    $order=$request->input('order');
    $rules = [
      'name' => 'required',
      'url' => 'required',
      'target' => 'required',
      'parent' => 'required',
      'order' => 'required|regex:/\d{1,1000}/',
    ];
    $messages = [

    ];
    $validator = Validator::make($input, $rules, $messages);

    if ($validator->passes()) {
      $menu=new Menu;
      $menu->name=$name;
      $menu->url=$url;
      $menu->target=$target;
      $menu->parent=$parent;
      $menu->order=$order;
      $res=$menu->save();
      if ($res) {
        return response()->json(['code' => 1, 'msg' => '添加成功']);
      }

    } else {
      return response()->json(['code' => 0, 'msg' => '添加失败']);
    }
  }

  public function getMenu(Request $request)
  {
    $menu=Menu::all()->toArray();
    $topMenu=Menu::where('parent','0')->get()->toArray();
    return response()->json(['code'=>1,'msg'=>'获取成功','data'=>$menu,'topMenu'=>$topMenu]);
  }


}
