<?php

namespace MediCasa\Http\Middleware;

use Closure;
use Auth;

class MedicamentoMiddleware
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
        if(Auth::check() && Auth::user()->email=='admin@admind.com')
          return $next($request);
        return redirect('/');
    }
}
