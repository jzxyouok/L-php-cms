<?php
namespace App\Http\Utils;

use App\Http\Controllers\Controller;

class Functions extends Controller{
  public function cmsConfig($cms,$name){
    return [
      'cms'=>$cms,
      'cms_name'=>$name,
    ];
  }
}