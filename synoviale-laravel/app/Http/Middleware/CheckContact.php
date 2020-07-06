<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class CheckContact
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
        if(!Session::has('contact') || !Session::has('organizer'))
        {
            return redirect('/');
        }
        return $next($request);
    }
}