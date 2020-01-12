<?php

namespace App\Http\Middleware;

use Closure;

class PasswordExpiry
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (now()->greaterThan(auth()->user()->password_expired_at)) {
            auth()->logout();

            throw new \App\Exceptions\ExpiredPasswordException();
        }

        return $next($request);
    }
}
