<?php

namespace App\Http\Middleware;

use Closure;

class CheckOrganizer
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
        if(!Session::has('organizer'))
        {
            return redirect('/');
        }
        return $next($request);
    }
}
