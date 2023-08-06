<?php

namespace App\Http\Middleware;

use App\Models\adminUser;
use App\Models\User;
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
            if(Auth::user()->status=="active"){
            
                return $next($request);
            }else{
                
                return redirect(route('user.index'))->with(['errMsg'=>'دسترسی شما محدود شده است']);
            }
        } else {
            if (str_contains($request->getRequestUri(), '/api')) {
                return response(['reLogin' => 0]);
            } else {
                
                $route = route('user.index');
                return redirect($route)->with(['reLogin' => 0]);
            }

        }
    }
}
