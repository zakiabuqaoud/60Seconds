<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$type)
    {
        //controllrt
        //store => user validition =>  
        $user = $request->user();
        if (!in_array($user->type, $type)) {
            abort(403, "you not Admin");
        } else {
            return $next($request);
        }
    }
}
