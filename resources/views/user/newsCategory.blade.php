@extends("user.layouts.mainLayout")
@section("title")
    اخبار
@endsection
@section("content")
    <main>
        <div class="container-lg container-fluid">
            <div class="row">
                <div class="col-12 mt-5 mb-3 mb-md-5">
                    <div class="topic-shadow">
                        <h1>جدیترین مطالب</h1>
                        <span> Latest News </span>
                    </div>
                </div>
                @php
                    $index=0;
                @endphp
                @foreach($news as $new)
                    <div class="col-12">
                        <div class="blog-box">
                            @if($index%2==0)
                                <div class="blog-box-img">
                                    <a href="{{route("user.single_news",[$new->slug])}}"> <img
                                                src="{{asset("userAssets/image/img/NoPath - Copy (73).png")}}" alt=""/></a>
                                </div>
                            @endif
                            <div class="blog-box-info">
                                <h3>{{$new->title}}</h3>
                                <p>
                                    {{$new->summary}}
                                </p>
                                <div class="blog-box-info-person">
                                    <div class="blog-box-info-person-info">
                                        <dd>
                                            <img
                                                    src="{{asset("userAssets/image/img/c1cb904db7c834fb45a0f30dcb17f204.png")}}"
                                                    alt=""
                                            />
                                            {{getProperty(App\Models\adminUser::where("id",$new->author_id)->first(),"display_name")}}
                                        </dd>
                                        <svg
                                                id="Iconly_Bold_Time_Circle"
                                                data-name="Iconly/Bold/Time Circle"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16.324"
                                                height="16.324"
                                                viewBox="0 0 16.324 16.324"
                                        >
                                            <g
                                                    id="Time_Circle"
                                                    data-name="Time Circle"
                                                    transform="translate(0 0)"
                                            >
                                                <path
                                                        id="Time_Circle-2"
                                                        data-name="Time Circle"
                                                        d="M8.162,0a8.162,8.162,0,1,0,0,16.324A8.165,8.165,0,0,0,13.936,2.388,8.11,8.11,0,0,0,8.162,0ZM7.876,12.3a.613.613,0,0,1-.612-.612V7.566a.61.61,0,0,1,.3-.522l3.2-1.91a.624.624,0,0,1,.318-.09.608.608,0,0,1,.522.3.617.617,0,0,1-.212.84L8.489,7.917v3.771A.613.613,0,0,1,7.876,12.3Z"
                                                        transform="translate(16.324 16.324) rotate(180)"
                                                        fill="#707070"
                                                />
                                            </g>
                                        </svg>
                                        <span>{{$new->date}}</span>
                                        <svg
                                                id="Iconly_Bold_Heart"
                                                data-name="Iconly/Bold/Heart"
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="16.324"
                                                height="15.508"
                                                viewBox="0 0 16.324 15.508"
                                        >
                                            <g id="Heart" transform="translate(0 0)">
                                                <path
                                                        id="Heart-2"
                                                        data-name="Heart"
                                                        d="M8.189,0h0l-.211.13a31.149,31.149,0,0,0-5.2,4.049A10.6,10.6,0,0,0,.321,8.1,6.321,6.321,0,0,0,.438,12.4a4.966,4.966,0,0,0,3.092,2.886,3.677,3.677,0,0,0,.726.17h.1a4.656,4.656,0,0,0,.686.049h.09a5.114,5.114,0,0,0,1.494-.27h.048a.27.27,0,0,0,.073-.048,2.755,2.755,0,0,0,.514-.213l.31-.138a2.144,2.144,0,0,0,.233-.155c.047-.034.087-.063.118-.082l.033-.019a1.987,1.987,0,0,0,.211-.135,5.08,5.08,0,0,0,3.107,1.061h.036a4.755,4.755,0,0,0,1.518-.237A4.913,4.913,0,0,0,15.891,12.4a6.46,6.46,0,0,0,.126-4.3,10.432,10.432,0,0,0-2.456-3.926A31.506,31.506,0,0,0,8.393.123L8.189,0Zm4.006,12.963a.66.66,0,0,1-.618-.443.669.669,0,0,1,.408-.84,1.368,1.368,0,0,0,.873-1.282v-.025a.7.7,0,0,1,.155-.506.686.686,0,0,1,.465-.237.672.672,0,0,1,.645.621v.1a2.694,2.694,0,0,1-1.722,2.58A.636.636,0,0,1,12.194,12.963Z"
                                                        transform="translate(16.324 15.508) rotate(180)"
                                                        fill="#707070"
                                                />
                                            </g>
                                        </svg>
                                        <span>{{count((array)json_decode($new->likes))}}</span>
                                    </div>
                                    <a href="{{route("user.single_news",[$new->slug])}}" type="button"
                                       class="button-purple">
                                        بیشتر بخوانید
                                        <span>
                                     <svg
                                             xmlns="http://www.w3.org/2000/svg"
                                             width="24.119"
                                             height="14.524"
                                             viewBox="0 0 24.119 14.524"
                                     >
                        <g
                                id="Iconly_Light_Arrow_-_Left"
                                data-name="Iconly/Light/Arrow - Left"
                                transform="translate(-3.375 -5.012)"
                        >
                          <g
                                  id="Arrow_-_Left"
                                  data-name="Arrow - Left"
                                  transform="translate(20 5.5) rotate(90)"
                          >
                            <path
                                    id="Stroke_1"
                                    data-name="Stroke 1"
                                    d="M.5,22.369V0"
                                    transform="translate(6.274 -6.619)"
                                    fill="none"
                                    stroke="#a855f1"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    stroke-width="1.75"
                            />
                            <path
                                    id="Stroke_3"
                                    data-name="Stroke 3"
                                    d="M12.049,0,6.025,6.05,0,0"
                                    transform="translate(0.75 9.7)"
                                    fill="none"
                                    stroke="#a855f1"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-miterlimit="10"
                                    stroke-width="1.75"
                            />
                          </g>
                        </g>
                      </svg>
                                      </span>
                                    </a>
                                </div>
                            </div>
                            @if($index%2!=0)
                                <div class="blog-box-img">
                                    <a href="{{route("user.single_news",[$new->slug])}}"> <img
                                                src="{{asset("userAssets/image/img/NoPath - Copy (73).png")}}" alt=""/></a>
                                </div>
                            @endif
                        </div>
                    </div>
                    @php
                        $index+=1;
                    @endphp
                @endforeach


                <div class="col-12 mt-5">
                    <div class="pagination-SixSide">
                        {{$news->links('vendor.pagination.custom')}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection