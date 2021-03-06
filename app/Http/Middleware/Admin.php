<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        // Check if the user is logged in. Admin
        if (Auth::check()){
            if (Auth::user()->isAdmin()){
                return $next($request);
            }
        }
//        return redirect(404);
        return redirect('/');
    }
}
