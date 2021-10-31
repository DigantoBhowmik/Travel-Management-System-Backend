<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->get('adminId')){
            return $next($request);
        }
        return redirect()->route('admin');
    }
}
