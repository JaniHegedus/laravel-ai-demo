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
        if(auth()->check()){
            return $next($request);
        }
        return redirect(route('login'));
    }
}
