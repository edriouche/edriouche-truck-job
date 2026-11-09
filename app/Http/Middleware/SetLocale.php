<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $supported = ['ar', 'es', 'fr', 'en'];

        $cookieLocale = $request->cookie('locale');
        $sessionLocale = $request->session()->get('locale');

        $locale = in_array($cookieLocale, $supported, true)
            ? $cookieLocale
            : (in_array($sessionLocale, $supported, true) ? $sessionLocale : 'ar');

        App::setLocale($locale);

        return $next($request);
    }
}
