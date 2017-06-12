<?php

namespace App\Http\Controllers\Install;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class completeController extends Controller
{
  public function view()
  {
    return view('install.complete');
  }
}
