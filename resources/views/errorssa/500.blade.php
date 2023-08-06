<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> {{env('APP_NAME_FA')}} | خطای ۵۰۰</title>
        <link rel="stylesheet" href="/adminAssets/css/main/app.css">
        <link rel="stylesheet" href="/adminAssets/css/pages/error.css">
        <link rel="icon" href="{{asset('userAssets/img/statics/cropped-fav1-1-32x32.png')}}" sizes="32x32">
        <style>
            html{
                background-color: #ebf3ff;
            }
            #error{
                padding: 0!important;
            }
            .error-title{
                font-size: 2rem !important;
            }
        </style>
    </head>
    <body style="width: 100%;">
    <div id="error"  style="width: 100%">
        <div class="error-page container" style="margin: 0 auto">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="/adminAssets/images/samples/error-500.svg" alt="Not Found">
                    <h1 class="error-title">خطای سرور</h1>
                    <p class='fs-5 text-gray-600'>خطایی از سمت سرور به وجود امده است</p>
                    @if(\Illuminate\Support\Facades\Auth::guard('admin')->check())
                        <a href="{{route('admin.dashboard')}}" class="btn btn-lg btn-outline-primary mt-3">برگشت به خانه</a>
                    @else
                        <a href="{{route('user.index')}}" class="btn btn-lg btn-outline-primary mt-3">برگشت به خانه</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
