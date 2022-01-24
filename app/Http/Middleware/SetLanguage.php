<?php

namespace App\Http\Middleware;

use Closure;

class SetLanguage
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
        if (session()->has('lang')) {
            $lang = session('lang');
        }else{
            session()->put('lang','ar');
            $lang = 'ar';
        }

        app()->setlocale($lang);

        return $next($request);

        // \App::setlocale($request->language);
        // return $next($request);
    }
}
