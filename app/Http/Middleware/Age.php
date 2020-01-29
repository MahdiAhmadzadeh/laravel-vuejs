<?php

namespace App\Http\Middleware;

use Closure;
use function redirect;
use function route;
use function variant_round;

class Age
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
        $msg='سن شما کمتر از حد معین میباشد';
        if ($request->input('title')<20){
            return redirect(route('index.index'))->with('dan',$msg);
        }
        return $next($request);
    }
}
