<?php

namespace App\Http\Middleware;

use App\Http\Traits\IdentityTrait;
use Closure;
use Illuminate\Http\Request;

class IdentityMiddleware
{
    use IdentityTrait;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        if (!$request->cookie('Identity')) {
            $this->createNewClient();
        }
        elseif (!$this->hasIdentity($request->cookie('Identity'))) {
            $this->createNewClient();
        }
        return $next($request);
    }
}
