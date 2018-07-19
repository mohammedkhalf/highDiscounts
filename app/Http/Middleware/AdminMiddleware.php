<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next = null, $guard = null)
    {

        if (Auth::user() && Auth::user()->level !='vendor' ) {
            return redirect('/');
        } elseif (Auth::guard($guard)->check()) {
            /*            return redirect('admin');*/
            return $next($request);
        } else {
            return redirect('admin/login');
        }

    }
}
