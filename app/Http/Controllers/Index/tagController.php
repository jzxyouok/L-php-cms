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



}
