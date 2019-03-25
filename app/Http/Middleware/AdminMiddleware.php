<?php

namespace App\Http\Middleware;
use Session;
use Illuminate\Contracts\Auth\Guard;
use Closure;

class AdminMiddleware
{

    public function_construct(Guard $auth){
      $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
        return $next($request);
     }
}
