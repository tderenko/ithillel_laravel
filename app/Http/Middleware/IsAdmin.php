<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user()->isAdmin()) {
            return redirect()->back();
        }
        return $next($request);
    }
}
