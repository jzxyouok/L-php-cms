<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsLogin
{

    public function handle($request, Closure $next, $guard = null)
    {


      if (Auth::check()) {
        return redirect()->guest('/admin/manage/panel/basic_info');
      }


      return $next($request);
    }
}
