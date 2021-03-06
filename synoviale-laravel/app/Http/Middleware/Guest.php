<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class Guest
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
        if(Session::has('user'))
        {
            return redirect('404');
        }
        return $next($request);
    }
}
