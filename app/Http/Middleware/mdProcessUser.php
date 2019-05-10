<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class mdProcessUser
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
        $chkPermission = Auth::user()->cnttUserLevel;
        if ($chkPermission == 0 || $chkPermission == 1) {
            return $next($request);
        } else {
            return redirect()->route('admin.dashboard')->with('error', 'Người dùng không có quyền thực thi nội dung này');
        }
    }
}
