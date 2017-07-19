<?php

namespace App\Http\Controllers\Index;

use App\Http\Model\Banner;
use App\Http\Model\BannerSlider;
use App\Http\Model\Doc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class contentController extends Controller
{
  public function view(Request $request,$category,$id)
  {
    return view('index.woshipm.templates.content', [
      'content_id'=>$id,

    ]);
  }

  public function getContent(Request $request)
  {
    $id=$request->input('id');
    $docs=Doc::where('id',$id)->first(['title','published_date','category','from','recommend','hot','view','collection','like','author','keyword','abstract','preview_img','content']);
    return response()->json(['code'=>1,'data'=>$docs]);
}
  
  
  
  
}
