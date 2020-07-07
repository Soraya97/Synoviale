<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class CheckUser
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
        if(!Session::has('user'))
        {
            return redirect('/');
        }
        elseif($request->user != Session::get('user.id'))
        {
            return redirect()->route('user.show',Session::get('user.id'));
        }
        
        return $next($request);
    }
}
