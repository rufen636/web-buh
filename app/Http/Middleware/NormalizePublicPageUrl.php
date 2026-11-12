<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class NormalizePublicPageUrl
{
    /** @param Closure(Request): Response $next */
    public function handle(Request $request, Closure $next): Response
    {
        if (! $request->isMethod('GET') && ! $request->isMethod('HEAD')) {
            return $next($request);
        }

        $original = explode('?', $request->getRequestUri(), 2)[0];
        $path = '/'.trim(strtolower(rawurldecode($original)), '/');
        if ($path === '/index.php' || str_starts_with($path, '/index.php/')) {
            $path = '/'.ltrim(substr($path, strlen('/index.php')), '/');
        }

        if ($path !== $original && array_key_exists($path, config('seo.pages'))) {
            $query = $request->getQueryString();

            return redirect($path.($query === null ? '' : '?'.$query), 301);
        }

        return $next($request);
    }
}
