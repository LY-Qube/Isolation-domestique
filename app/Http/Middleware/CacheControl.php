<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CacheControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        //$response->header('Cache-Control', 'no-cache, must-revalidate');
        // Or whatever you want it to be:
         $response->header('Cache-Control', 'max-age=31536000');

        return $response;
    }
}
