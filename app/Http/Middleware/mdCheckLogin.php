<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class mdCheckLogin
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
        if(Auth::check()) {
            return redirect()->route('admin.dashboard');
        } else {
            return $next($request);
        }
    }
}
