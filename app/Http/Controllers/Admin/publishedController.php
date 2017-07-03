<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Doc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;

class publishedController extends Controller
{
  public function view(Request $request)
  {
    return view('admin.published', [
      'cms' => config('cms.cms'),
      'cms_name' => config('cms.cms_name'),
      'category' => config('cms.doc_manage'),
      'item' => config('cms.published'),
      'userInfo' => $request->session()->get('userInfo'),
    ]);
  }

  public function getPublishedDoc(Request $request)
  {
    $limit = $request->input('limit');
    $currentPage = $request->input('currentPage');
    $offset = ($currentPage - 1) * $limit;

    $docs = Doc::where(['publisher_id' => $request->session()->get('userInfo')->id, 'status' => 'published'])->orderBy('published_date', 'desc')->offset($offset)->limit($limit)->get()->toArray();
    $docsCount = Doc::where(['publisher_id' => $request->session()->get('userInfo')->id, 'status' => 'published'])->count();

    return response()->json(['code' => 1, 'msg' => '获取成功', 'data' => $docs, 'count' => $docsCount, 'allPage' => ceil($docsCount / $limit)]);


  }

  public function recommendDoc(Request $request)
  {
    $isRec = $request->input('isRec');
    $id = $request->input('id');

    $res=false;
    if($isRec=='true'){
      $res=Doc::where('id',$id)->update(['recommend'=>'是']);
      if($res){
        return response()->json(['code'=>1,'msg'=>'推荐成功','action'=>1]);
      }
    }else{
      $res=Doc::where('id',$id)->update(['recommend'=>'否']);
      if($res){
        return response()->json(['code'=>1,'msg'=>'取消成功','action'=>0]);
      }
    }

  }

  public function hotDoc(Request $request)
  {
    $isRec = $request->input('isRec');
    $id = $request->input('id');

    $res=false;
    if($isRec=='true'){
      $res=Doc::where('id',$id)->update(['hot'=>'是']);
      if($res){
        return response()->json(['code'=>1,'msg'=>'热门成功','action'=>1]);
      }
    }else{
      $res=Doc::where('id',$id)->update(['hot'=>'否']);
      if($res){
        return response()->json(['code'=>1,'msg'=>'取消成功','action'=>0]);
      }
    }

  }

  public function putIntoRecycle(Request $request)
  {
    $doc = $request->input('doc');

    //dd($doc);
    $res=Doc::where('id',$doc['id'])->update(['status'=>'recycle']);
    if($res){
      return response()->json(['code'=>1,'msg'=>'放入回收站成功']);
    }
  }


}
