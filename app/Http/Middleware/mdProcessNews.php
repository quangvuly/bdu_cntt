<?php

namespace App\Http\Middleware;

use Closure;

class mdProcessNews
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
        $chkID = Auth::id();

        if ($chkPermission == 0) {
            return $next($request);
        } 

        if ($chkPermission == 0 || $chkPermission == 1) {
            
        } else {
            return redirect()->route('admin.news.list')->with('error', 'Không thể chỉnh sửa bài viết của người dùng khác');
        }
    }
}
