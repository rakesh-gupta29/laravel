<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class CheckDummyParameter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $name): Response
    {
        if ($request->query('isDummy') === 'true' && $name !== "") {
            $counter = 10;
            $request->merge(['counter' => $counter]);

        }

        return $next($request);


    }
}
