@extends("user.layouts.mainLayout")
@section("title")
    مقالات اموزشی
@endsection
@section("content")
    <main>
        <div class="container-lg container-fluid">
            <div class="row col-cheng">
                <div class="col-12 mt-5">
                    <div class="topic-shadow">
                        <h1>
                            آموزش های ایران نوا
                        </h1>
                        <span>
                        Training
                    </span>
                    </div>
                </div>


                @foreach($articles as $article)
                    <div class="col col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="cart-boxLerning">
                            <div class="cart-boxLerning-content">
                                <a style="text-align: center" href="{{route("user.single_article",[$article->slug])}}">
                                    {{$article->title}}
                                </a>
                                <span>{{$article->summary}}</span>
                                <div class="cart-boxLerning-content-info">
                                    <img src="{{asset("userAssets/image/img/c1cb904db7c834fb45a0f30dcb17f204.png")}}"
                                         alt="">
                                    <span>
                                    <dd>{{getProperty(App\Models\adminUser::where("id",$article->author_id)->first(),"display_name")}}</dd>
                                    <dd>{{$article->date}}</dd>
                                </span>
                                    <a href="{{route("user.single_article",[$article->slug])}}"><img
                                                src="{{asset("userAssets/image/img/Group-6424.svg")}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="col-12 mt-5">
                    <div class="pagination-SixSide">
                        {{$articles->links('vendor.pagination.custom')}}
                    </div>
                </div>


            </div>
        </div>
    </main>
@endsection