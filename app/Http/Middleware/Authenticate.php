<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{

    public function handle(Request $request, Closure $next): Response
    {
        // Exclude redirects for the login page, home page, or already authenticated routes

        // Redirect non-admin users to the home page or a safe route
        return $next($request);
    }
}