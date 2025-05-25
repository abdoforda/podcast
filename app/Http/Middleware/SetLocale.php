<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // جلب اللغات المتاحة من config
        $availableLanguages = Config::get('app.available_locales');

        // تحديد اللغة من Session أو استخدام اللغة الافتراضية
        $locale = Session::get('locale', Config::get('app.locale'));

        // التأكد أن اللغة المختارة متاحة
        if (array_key_exists($locale, $availableLanguages)) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}
