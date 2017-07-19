<?php

namespace App\Http\Controllers\Index;

use App\Http\Model\Category;
use App\Http\Model\Doc;
use App\Http\Model\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class tagController extends Controller
{
  public function view($tag)
  {
    $tag=Tag::where('tag',$tag)->first()['tag'];
    return view('index.woshipm.templates.tag',[
      'tag'=>$tag,
    ]);
  }

  public function getDocByTag(Request $request)
  {
    $tag=$request->input('tag');

$t=Tag::with(['findDocByTag'=> function ($query) {
  $query->select('id','category','title','status','publisher_id','published_date','from','type','url','recommend','hot','status','view','collection','like','author','keyword','abstract','preview_img','created_at');

},'findDocByTag.adminUser'=> function ($query) {
  $query->select('id','avatar');

},'findDocByTag.categorys'=> function ($query) {
  $query->select('slug','name');

}])->where('tag',$tag)->get(['doc_id','tag']);

    foreach ($t as $tt){
      $tt->findDocByTag;
    }
    return response()->json(['code'=>1,'msg'=>'获取成功','docByTag'=>$t->toArray()]);

  }



}
