<?php

namespace App\Http\Controllers\Index;

use App\Http\Model\Banner;
use App\Http\Model\BannerSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class indexController extends Controller
{
  public function view()
  {
    return view('index.woshipm.templates.index');
  }

  public function indexBannerGet(Request $request)
  {

    //$bannerId =Banner::where('name', '首页主轮播')->first()->toArray();

    $sliders =BannerSlider::where('banner_id', 1)->get(['id', 'banner_id', 'img_src', 'title', 'url', 'img_title', 'img_alt'])->toArray();
    return response()->json(['code'=>1,'data'=>$sliders ]);
  }
  
  
  
  
  
}
