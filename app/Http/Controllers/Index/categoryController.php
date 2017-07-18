<?php

namespace App\Http\Controllers\Index;

use App\Http\Model\Category;
use App\Http\Model\Doc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
  public function view($category)
  {
    $name=Category::where('slug',$category)->first()['name'];
    return view('index.woshipm.templates.category',[
      'category'=>$name,
    ]);
  }

  public function getDocByCategory(Request $request)
  {

    $name=$request->input('name');


    $cate=Category::where('name',$name)->first(['name','slug']);

    $cate->findDocByCategory;


      return response()->json(['code'=>1,'msg'=>'获取成功','docByCategory'=>$cate->toArray()]);

  }

}
