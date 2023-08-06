<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\addMedia;
use App\Http\Requests\idValidate;
use App\Imports\PeriodsImport;
use App\Models\admin_log;
use App\Models\user_message;
use Illuminate\Http\Request;


class adminController extends Controller
{


    public function dashboard()
    {
        
        adminLog('dashboard', "ورود به داشبورد");
        $remainCreditSMS = getSmsAccountInfo();
        $logs = admin_log::where("status", "active")->get()->reverse()->take(200);

        return view("admin.pages.dashboard", compact('logs', "remainCreditSMS"));
    }

    public function dark_mood(Request $request)
    {
        $status = $request->get('status');
        if (isValidValue($status, true) != true or ($status != "1" and $status != "0")) {
            return back()->withErrors('خطایی رخ داده است');
        }
        if ($status == "1") {
            return back()->cookie(cookie('dark-mood', '1'));
        } else {
            return back()->cookie(cookie('dark-mood', '0'));
        }
    }



}
