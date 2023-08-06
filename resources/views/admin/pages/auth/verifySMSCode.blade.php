@extends('admin.pages.auth.layout')
@section("main_content")
    <div id="auth-left" class="w-100">
        <h1 class="auth-title">{{env("APP_NAME_FA")}}</h1>
        <p class="auth-subtitle mb-5">کد تایید را وارد نماید</p>

     @if(Session::has('c'))

        {{Session::get('c')}}
    
        @endif  

        <form  action="{{route('admin.verify_sms_code_submit')}}" method="post" >
            @csrf
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="text" name="code" required class="form-control form-control-xl" placeholder="کد تایید">
                <div class="form-control-icon">
                    <i class="bi bi-phone"></i>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">تایید</button>
        </form>
    </div>
@endsection