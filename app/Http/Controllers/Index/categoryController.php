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


    $cate=Category::with(['findDocByCategory' => function ($query) {
      $query->select('category','title','status','publisher_id','published_date','from','type','url','recommend','hot','status','view','collection','like','author','tag','keyword','abstract','preview_img','created_at'        );

    },'findDocByCategory.adminUser'=> function ($query) {
      $query->select('id','avatar');

    }])->where('name',$name)->first(['name','slug']);

    $cate->findDocByCategory;


      return response()->json(['code'=>1,'msg'=>'获取成功','docByCategory'=>$cate->toArray()]);

  }

}
