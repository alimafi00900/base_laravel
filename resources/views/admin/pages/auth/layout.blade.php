<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME_FA")}} - ورود</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/adminAssets/css/main/app.css?v=3232">
    <link rel="stylesheet" href="/adminAssets/css/main/app-dark.css?v=2822">
    <link rel="stylesheet" href="/adminAssets/css/pages/auth.css?v=432333">
    <link rel="stylesheet" href="/adminAssets/vendor/toastr/css/toastr.min.css?v=8998">
    <link rel="shortcut icon" href="/adminAssets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="/adminAssets/images/logo/favicon.png" type="image/png">
</head>
<body  class="theme-dark">
<div id="auth" class="w-100">
    <div class="row mx-0 h-100 w-100">
        <div class="col-lg-5 col-12 d-flex flex-column align-items-center justify-content-center">
            @yield("main_content")
        </div>
        <div class="col-lg-7 px-0 d-none d-lg-block">
            <div id="auth-right">
            </div>
        </div>
    </div>

</div>

<script src="/adminAssets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="/adminAssets/vendor/toastr/js/toastr.min.js"></script>
<script>
    toastr.options = {
        "positionClass": "toast-bottom-left",
    }
</script>
<script>
    @if(count($errors))
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    @endif
    @if(session()->has("msg"))
    toastr.success("{{session()->get("msg")}}");
    @endif
    @if(session()->has("warMsg"))
    toastr.warning("{{session()->get("warMsg")}}");
    @endif
    @if(session()->has("errMsg"))
    toastr.error("{{session()->get("errMsg")}}");
    @endif
    @php
        session()->forget("errMsg")
    @endphp
</script>

</body>

</html>
@php
    sessionUpdate(["previous_url"=>url()->full()]);
@endphp
