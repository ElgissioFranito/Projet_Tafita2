<?php

namespace App\Http\Middleware;

use Closure;

class BelleMiddleware
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
        if ($request === 3) {
            # code...
        }
        return $next($request);
    }
}
