<?php

namespace App\Http\Middleware;

use Carbon\Translator;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckTranslatorRole
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role !== \ConstUserRole::TRANSLATOR){
            return redirect()->route('home');
        }

        return $next($request);
    }
}
