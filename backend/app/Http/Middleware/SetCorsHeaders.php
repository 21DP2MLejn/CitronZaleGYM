<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetCorsHeaders
{
    public function handle($request, Closure $next)
    {
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");
        if ($request->getMethod() == 'OPTIONS') {
            http_response_code(200);
            exit;
        }

        return $next($request);
    }
}
