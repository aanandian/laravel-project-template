<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $accept
     * @return mixed
     */
    public function handle($request, Closure $next, ...$accepts)
    {
        $request->user()->authorizeRoles($accepts);

        return $next($request);
    }
}
