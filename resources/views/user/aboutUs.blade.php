@extends("user.layouts.mainLayout")
@section("title")
    درباره ما
@endsection
@section("content")
<main class="my-5 contactUs">
    <div class="container-lg container-fluid">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="topic-shadow">
                    <h1>
                        {{getProperty($generalInfos, 'aboutUs-headerText1')}}
                    </h1>
                    <span>
                         {{getProperty($generalInfos, 'aboutUs-headerText2')}}
                    </span>
                </div>
            </div>
            <div class="col-12 col-md-6 contactUs-vector">
                <img src="{{asset(getProperty($generalInfos, 'aboutUs-img'))}}" alt="">
            </div>
            <div class="col-12 col-md-6">
                <div class="topic-top topic-top-q">
                    <h4 >
                        {{getProperty($generalInfos, 'aboutUs-boxText')}}
                    </h4>
                </div>
                <p class="font-df mt-3">
                    {{getProperty($generalInfos, 'aboutUs-mainText')}}
                </p>
            </div>
        </div>
    </div>
</main>
@endsection