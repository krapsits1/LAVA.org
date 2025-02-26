<?php

namespace App\Http\Middleware;
//session
use Illuminate\Support\Facades\Session;
//app
use Illuminate\Support\Facades\App;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    
        $locale = Session::get('locale', config('app.locale'));
    
        // Log the retrieved locale value
    
        App::setLocale($locale);
    
        // Log the locale that is being set
    
        return $next($request);
    }
    
}
