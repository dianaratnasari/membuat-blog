<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // auth()->guest() == !auth()->check()
        // auth()->guest() adalah jika tamu belum login, sedangkan auth()->check() yaitu jika tamu sudah login
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403);
        }
        return $next($request);
    }
}
