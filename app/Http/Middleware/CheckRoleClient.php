<?php

namespace App\Http\Middleware;

use Closure;
use ConstUserRole;
use Illuminate\Support\Facades\Auth;

class CheckRoleClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role !== ConstUserRole::ROLE_CLIENT){
            return redirect()->route('home');
        }

        return $next($request);
    }
}
