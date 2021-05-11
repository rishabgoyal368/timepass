<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckAdminAuth
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
        if(!Auth::guard('admin')->check()){
            
            return redirect('/')->with('error','Please login first');
        }
        return $next($request);
    }
}
