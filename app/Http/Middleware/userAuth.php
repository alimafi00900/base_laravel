<?php

namespace App\Http\Middleware;

use App\Models\adminUser;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class userAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        } else{
            if(str_contains($request->getRequestUri(),'/api')){
                return response(['reLogin'=>0]);
            }else{
                return redirect(URL::previous())->with(['reLogin'=>0]);
            }

        }
    }
}
