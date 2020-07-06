<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class RedirectLogin
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

        if(Session::has('client'))
        {
            return redirect('/');
        }
        if(Session::has('contact'))
        {
            return redirect('/');
        }
        if(Session::has('employee'))
        {
            return redirect('/');
        }
        if(Session::has('organizer'))
        {
            return redirect('/');
        }
        return $next($request);
    }
}
