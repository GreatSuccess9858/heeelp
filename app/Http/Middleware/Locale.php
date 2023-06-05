<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;
use Illuminate\Support\Facades\App;

class Locale extends Middleware
{
    public function handle($request, Closure $next)
    {
        $lang = "en";
        if(str_contains('el', $request->getPreferredLanguage())) {
            $lang = "gr";
        }
        App::setLocale(session('locale', $lang));
        return $next($request);
    }
}
