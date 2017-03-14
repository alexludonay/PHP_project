<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$autz)
    {
       if($this->auth->user()->hasAuth($az))
       {
             return $next($request);
       }

    }
}

//$this->auth->user()->hasAuth($az)
