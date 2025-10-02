<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetCountry
{
    public function handle(Request $request, Closure $next)
    {
        // если есть cookie, сохраняем в сессию
        if ($request->hasCookie('country')) {
            session(['country' => $request->cookie('country')]);
        }

        return $next($request);
    }
}
