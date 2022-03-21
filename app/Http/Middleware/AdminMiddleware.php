<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware; 

class AdminMiddleware extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected function redirectTo($request)
    {    
        if (! $request->expectsJson()) {
            return '/adminLogin';
            // return redirect('/adminLogin');
        }
    }
}
