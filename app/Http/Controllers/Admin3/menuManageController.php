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

  public function addMenuCommit(Request $request)
  {
    $input = Input::all();
    $name = $request->input('name');
    $url = $request->input('url');
    $target = $request->input('target');
    $parent = $request->input('parent');
    $order = $request->input('order');
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
      $menu = new Menu;
      $menu->name = $name;
      $menu->url = $url;
      $menu->target = $target;
      $menu->parent = $parent;
      $menu->order = $order;
      $res = $menu->save();
      if ($res) {
        return response()->json(['code' => 1, 'msg' => '添加成功']);
      }

    } else {
      return response()->json(['code' => 0, 'msg' => '添加失败']);
    }
  }

  public function getMenu(Request $request)
  {
    $menu = Menu::all()->toArray();
    $topMenu = Menu::where('parent', '0')->get()->toArray();
    return response()->json(['code' => 1, 'msg' => '获取成功', 'data' => $menu, 'topMenu' => $topMenu]);
  }

  public function removeMenu(Request $request)
  {
    $id = $request->input('id');
    $res = Menu::where('id', $id)->delete();
    if($res){
      return response()->json(['code'=>1,'msg'=>'删除成功！']);
    }else{
      return response()->json(['code'=>0,'msg'=>'删除失败！']);
    }
  }

  public function editMenu(Request $request)
  {
    $id = $request->input('id');
    $name = $request->input('name');
    $order = $request->input('order');
    $url = $request->input('url');
    $target= $request->input('target');
    $parent = $request->input('parent');
    $res = Menu::where('id', $id)->update(['name'=>$name,'order'=>$order,'url'=>$url,'target'=>$target,'parent'=>$parent]);
    if($res){
      return response()->json(['code'=>1,'msg'=>'更新成功！']);
    }else{
      return response()->json(['code'=>0,'msg'=>'更新失败！']);
    }
  }


  public function getParentMenu(Request $request)
  {
    $parentMenu=Menu::where('parent',0)->get(['id','name']);
    return response()->json(['code'=>1,'msg'=>'获取成功','data'=>$parentMenu]);
  }
}
