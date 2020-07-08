<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckBadge
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
        if(!Session::has('client'))
        {
            return redirect('404');
        }
        if($request->pass != Session::get('user.id'))
        {
            return redirect()->route('pass.show',Session::get('user.id'));
        }

        return $next($request);
    }
}
