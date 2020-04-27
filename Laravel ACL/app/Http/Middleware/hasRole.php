<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class hasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
      if( !Auth::check() ) {
        return redirect('/login');
      }

      if(auth()->user()->hasRole($permission) > 0) {
        return $next($request);
      }

      if(Request::ajax()) {
        return response('insufficient permission', 403);
      }

      return redirect('/home');
    }

}
