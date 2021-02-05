<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsSiteadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    { 
        if(Auth::user() && Auth::user()->getRoleNames()[0] == "siteadmin")
        {
            return $next($request);
        }
        abort(403, 'OHH !!.You have not permission....');
    
    }
}
