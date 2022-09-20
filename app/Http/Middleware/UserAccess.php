<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    public function handle(Request $request, Closure $next, $userRole)
    {
        if (auth()->user()->role == $userRole) {
            return $next($request);
        }

        return response()->json(["You don't have permission to access this page."]);
        // return response()->view('errors.check-permission');
    }
}
