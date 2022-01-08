<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(\Illuminate\Http\Request $request, Closure $next)
    {
        if (auth()->user()->role->id === 1) {
            return $next($request);
        }
//        if(Auth::user() && Auth::user()->role->id === 1)
//            return $next($request);

        return redirect('/')->with('errorMessage', 'Access denied.');
    }
}
