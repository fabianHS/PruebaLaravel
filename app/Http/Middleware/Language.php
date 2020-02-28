<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;

use Closure;

class Language
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
      $handle = $request->server('HTTP_ACCEPT_LANGUAGE');
        $lang = substr($handle, 0, 2);
        App::setLocale($lang);
        return  $next($request);
    }
}
