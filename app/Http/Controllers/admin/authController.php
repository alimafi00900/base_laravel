<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Http\Requests\addMedia;
use App\Http\Requests\adminLoginReq;
use App\Http\Requests\idValidate;
use App\Imports\PeriodsImport;
use App\Models\adminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class authController extends Controller
{
    public function login()
    {
        if (Auth::guard("admin")->check() != true) {
            return view("admin.pages.auth.login");
        } else {
            return redirect(route("admin.dashboard"));
        }
    }

    public function login_submit(adminLoginReq $request)
    {

        if (session()->has('admin_login_try')) {
            if (session()->get('admin_login_try') <= 0) {
                return back()->withErrors("دسترسی شما محدود شده است");
            }
        }

        $remember = false;
        if ($request->input('remember') == "on") {
            $remember = true;
        }

        $admin_verify_code = session()->get('admin_verify_code');

        // if (isValidValue($admin_verify_code) == true and (getProperty($admin_verify_code, ['code_try']) <= 0 or getProperty($admin_verify_code, ['code_get_sms']) <= 0)) {
        //     banIp($request->ip());
        //     return redirect(route('admin.login'))->withErrors('به دلایل امنیتی دسترسی شما محدود شده است ');
        // }

        $email = $request->input('email');
        $password = $request->input('password');
        $admin = adminUser::where('email', $request->input('email'))->first();
       
        
       
        if ($admin == null) {
            return back()->withErrors("ایمیل یا پسورد اشتباه است");
        }
        if (Hash::check($password, getProperty($admin, 'password')) == true) {
            $code = rand(11111, 99999);
            if (session()->has('admin_verify_code') != true) {
                sessionUpdate([
                    'admin_verify_code' => [
                        'email' => $email,
                        'password' => $password,
                        'remember' => $remember,
                        'code' => $code,
                        'code_try' => 6,
                        'code_get_sms' => 4,
                    ]
                ]);
            } else {
                sessionUpdate([
                    'admin_verify_code' => [
                        'email' => $email,
                        'password' => $password,
                        'remember' => $remember,
                        'code' => $code,
                        'code_try' => 6,
                        'code_get_sms' => intval(getProperty(session()->get('admin_verify_code'), 'code_get_sms')) - 1,
                    ]
                ]);
            }
            if (isValidValue(getProperty($admin, 'phone_number'))) {
                sendSms(phoneNumberWithZero(getProperty($admin, 'phone_number')), 'code2', $code);
            }
            \Session::flash('c', $code);

            return redirect(route('admin.verify_sms_code'));
        } else {


            // if (session()->has('admin_login_try')) {
            //     sessionUpdate(['admin_login_try' => intval(session()->get('admin_login_try')) - 1]);
            // } else {
            //     sessionUpdate(['admin_login_try' => 4]);
            // }
            return back()->withErrors("ایمیل یا پسورد اشتباه است");
        }
    }

    public function verify_sms_code(Request $request)
    {
        if (session()->has('admin_verify_code') != true) {
            return redirect(route('admin.login'))->withErrors('خطایی رخ داده است');
        }
        $admin_verify_code = session()->get('admin_verify_code');
        if (isValidValue($admin_verify_code) == true and (getProperty($admin_verify_code, ['code_try']) <= 0 or getProperty($admin_verify_code, ['code_get_sms']) <= 0)) {
            banIp($request->ip());
            return redirect(route('admin.login'))->withErrors('به دلایل امنیتی دسترسی شما محدود شده است ');
        }
        return view('admin.pages.auth.verifySMSCode');
    }

    public function verify_sms_code_submit(Request $request)
    {
        $code = $request->input("code");
        if (isValidValue($code, true) != true) {
            return back()->withErrors('کد تایید وارد نشده است');
        }
        if (session()->has('admin_verify_code') != true) {
            return redirect(route('admin.login'))->withErrors('خطایی رخ داده است');
        }
        $admin_verify_code = session()->get('admin_verify_code');
        if (isValidValue($admin_verify_code) == true and (getProperty($admin_verify_code, ['code_try']) <= 0 or getProperty($admin_verify_code, ['code_get_sms']) <= 0)) {
            banIp($request->ip());
            return redirect(route('admin.login'))->withErrors('به دلایل امنیتی دسترسی شما محدود شده است ');
        }
        ///////////////
        if (getProperty($admin_verify_code, 'code') == $code) {
            if (Auth::guard("admin")->attempt(['email' => getProperty($admin_verify_code, 'email'), 'password' => getProperty($admin_verify_code, 'password')], getProperty($admin_verify_code, 'remember'))) {
                adminLog('admin_login', "ورود به پنل ادمین");
                sessionForget('admin_verify_code');
                return redirect(route("admin.dashboard"));
            } else {
                return redirect(route('admin.login'))->withErrors('خطایی رخ داده است');
            }
        }
        sessionUpdate([
            'admin_verify_code' => [
                'code_try' => intval(getProperty(session()->get('admin_verify_code'), 'code_try')) - 1,
            ]
        ]);
        return back()->withErrors('کد تایید اشتباه است');
    }

    public function logout()
    {
        adminLog('admin_logout', "خروج از پنل ادمین");
        Auth::guard("admin")->logout();
        return redirect(route("admin.login"));
    }

}
