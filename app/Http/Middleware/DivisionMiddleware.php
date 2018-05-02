<?php

namespace App\Http\Middleware;

use Closure;

class DivisionMiddleware
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
        if ($request->input('divisor')!=0){

            return $next($request);
        }else{
            return redirect('incorrecto');
        }


    }
}
