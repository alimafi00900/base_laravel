@extends('admin.pages.auth.layout')
@section("main_content")
    <div id="auth-left" class="w-100">
        <h1 class="auth-title">{{env("APP_NAME_FA")}}</h1>
        <p class="auth-subtitle mb-5">نام کاربری و گذرواژه خود را وارد کنید</p>
        <form  action="{{route('admin.login_submit')}}" method="post" >
            @csrf
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="text" name="email" required class="form-control form-control-xl" placeholder="نام کاربری">
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="password"  required name="password" class="form-control form-control-xl" placeholder="گذرواژه">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
            <div class="form-check form-check-lg me-2 align-items-end">
                <input class="form-check-input" type="checkbox" value="" name="remember" id="flexCheckDefault">
                <span class="form-check-label mx-2 text-gray-600" for="flexCheckDefault">
                    مرا به خاطر بسپار
                    </span>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">ورود</button>
        </form>
    </div>
@endsection