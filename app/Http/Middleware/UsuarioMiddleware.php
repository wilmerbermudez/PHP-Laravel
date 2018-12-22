<?php

namespace MediCasa\Http\Middleware;

use Closure;
use Auth;

class UsuarioMiddleware
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
      if(Auth::check() && Auth::user())
        return $next($request);
      return redirect('/');
    }
}
