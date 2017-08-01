<?php

namespace App\Http\Controllers;

use App\Http\Model\UserGroup;
use App\Http\Requests\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
  use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

  public function getPower($request)
  {

    $groupId = Auth::guard('adminLogin')->user()->toArray()['user_group_id'];
    return $power = UserGroup::where('id', $groupId)->first(['power'])->toArray();
  }
}
