<?php

namespace BillJellesmaBlog\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
         if(Auth::id() == 1)
         {
             return $next($request);
         }
         else
         {
             abort(404);
         }

     }
}
