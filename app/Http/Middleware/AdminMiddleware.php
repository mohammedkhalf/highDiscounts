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
<<<<<<< HEAD
        if (Auth::user() && Auth::user()->level != 'vendor'){
=======
        if (Auth::user() && Auth::user()->level !='vendor' ) {
>>>>>>> 407343925ba25cc5559e70ce47f3690113071ee7
            return redirect('/');
        } elseif (Auth::guard($guard)->check()) {
            /*            return redirect('admin');*/
            return $next($request);
        } else {
            return redirect('admin/login');
        }

    }
}
