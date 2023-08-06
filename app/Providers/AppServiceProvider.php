<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\generalInfo;
use App\Models\redirectLink;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {

//        \Illuminate\Support\Facades\URL::forceScheme('https');
//        $redirectLink = redirectLink::where('link', $request->fullUrl())->first();
//        if ($redirectLink != null and isValidValue(getProperty($redirectLink, 'href_link'))) {
//            header('location: '.getProperty($redirectLink, 'href_link'));
//            exit();
//        }
//        $generalInfos = [];
//        foreach (generalInfo::all() as $generalInfo) {
//            $generalInfos += [$generalInfo->name => $generalInfo->content];
//        }
//        $statuses = getStatus();
//        View::share(['generalInfos' => $generalInfos, 'statuses' => $statuses]);
    }
}
