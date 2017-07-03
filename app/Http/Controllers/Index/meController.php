<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class meController extends Controller
{
  public function mePost()
  {
    return view('index.woshipm.templates.me_post');
  }

}
