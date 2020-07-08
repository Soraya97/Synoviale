<?php

namespace App\Http\Middleware;

use Closure;

use Session;

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
            return redirect('404');
        }
        return $next($request);
    }
}
