<?php

namespace App\Http\Middleware;

use Closure;

class ApprovalMiddleware
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
        if(auth()->user()->is_approved == 0){
            return redirect()->route('dashboard')->with('message', 'You need admin Approval first!');
        }
        return $next($request);
    }
}
