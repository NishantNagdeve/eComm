<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();
        if ($path=="admin-login" && Session::get('admin')){
            return redirect('/product-add');
        }else if($path=="product-add" && !Session::get('admin')){
            return redirect('/admin-login');
        }
        return $next($request);
    }
}
