<?php

namespace App\Http\Middleware;

use App\Models\adminUser;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class userBasic
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
            if(Auth::check()){
                User::where("ID", Auth::user()->ID)->update(["last_ip" => $request->ip()]);
            }
            return $next($request);

    }
}
