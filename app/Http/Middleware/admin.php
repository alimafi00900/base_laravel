<?php

namespace App\Http\Middleware;

use App\Models\adminUser;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admin
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
        if (Auth::guard("admin")->check()) {
            adminUser::where("id", Auth::guard("admin")->user()->id)->update(["last_ip"=> $request->ip()]);
            return $next($request);
        } else {
            return abort(403);
        }

    }
}
