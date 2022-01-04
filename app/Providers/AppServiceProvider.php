<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\generalInfo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $generalInfos = [];
        foreach (generalInfo::all() as $generalInfo) {
            $generalInfos += [$generalInfo->name => $generalInfo->content];
        }
        $statuses=getStatus();
        View::share(['generalInfos' => $generalInfos,'statuses'=>$statuses]);
    }
}
