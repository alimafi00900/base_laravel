<?php

namespace App\Http\Controllers;

use App\Http\Requests\adminLoginReq;
use App\Http\Requests\loginAdminSubmitReq;
use App\Models\adminUser;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{

    public function test()
    {

    }
    ////////////////
    public function login()
    {
        if(Auth::guard("admin")->check()!=true) {
            return view("admin.login.login");
        }else{
            return redirect(route("admin.dashboard"));
        }
    }

    public function login_submit(adminLoginReq $request)
    {
        $remember= false;
        if ($request->input('remember')=="on"){
            $remember=true;
        }
        if(Auth::guard("admin")->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$remember)){
            return redirect(route("admin.dashboard"));
        }else{
            return back()->withErrors("ایمیل یا پسورد اشتباه است");
        }
    }

    public function logout()
    {
        Auth::guard("admin")->logout();
        return  redirect(route("admin.login"));
    }
    ///////////////////
    public function dashboard()
    {
        return view("admin.admin_dashboard");
    }



}
