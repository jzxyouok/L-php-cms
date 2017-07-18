<?php

namespace App\Http\Controllers\Index;

use App\Http\Model\Category;
use App\Http\Model\Doc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class categoryController extends Controller
{
  public function view($category)
  {
    $name=Category::where('slug',$category)->first()['name'];
    return view('index.woshipm.templates.category',[
      'category'=>$name,
    ]);
  }

  public function getCategory(Request $request)
  {

    $name=$request->input('name');
    $res=Doc::where('title',$name)->get();
    if($res){
      return response()->json(['code'=>1,'msg'=>'获取成功','docByCategory'=>$res]);
    }
  }

}
