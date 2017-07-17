<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Doc;
use App\Http\Model\Gather;
use App\Http\Model\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;



class gatherManageController extends Controller
{
  public function view(Request $request)
  {
    return view('admin.gather', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.gather_manage'),
      'userInfo' => $request->session()->get('userInfo'),
    ]);
  }

  public function getGather(Request $request)
  {

   $gather= Gather::all();

    return response()->json(['code'=>1,'msg'=>'获取成功','data'=>$gather->toArray()]);

  }

  public function addGather(Request $request)
  {
    $siteName = $request->input('siteName');
    $docTitle = $request->input('docTitle');
    $docContent = $request->input('docContent');
    $gather = new Gather;
    $gather->site_name = $siteName;
    $gather->doc_title = $docTitle;
    $gather->doc_content = $docContent;
    $res = $gather->save();
    if($res){
      return response()->json(['code'=>1,'msg'=>'添加成功']);
    }else{
      return response()->json(['code'=>0,'msg'=>'添加失败']);
    }


  }


}
