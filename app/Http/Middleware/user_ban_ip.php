<?php

namespace App\Http\Middleware;

use App\Http\Helpers\jsonStorage;
use App\Models\ban_ip;
use Closure;
use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user_ban_ip
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
        return $next($request);
        $nowTimeStamp = intval(verta()->now()->timestamp);
        if(ban_ip::where('ip',$request->ip())->where('timestamp', '>', $nowTimeStamp )->first()!=null){
            Auth::logout();
            return redirect(route("user.index"))->withErrors("دسترسی شما موقتا مسدود شده است");
        }else{
            dd('asdasdasdasdasdasdasdasdasd');
            return $next($request);
        }
    }
}
