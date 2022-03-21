<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admins" && Auth::guard($guard)->check()) {
            return redirect('/admin');
        }elseif($guard == "web" && Auth::guard($guard)->check()){
            return redirect('/home');
        }
        return $next($request);
    }
}
