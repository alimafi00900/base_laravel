@extends("user.layouts.mainLayout")
@section("title")
    {{$article->title}}
@endsection
@section("content")
    @php
        $comments=App\Models\comment::where('section',"product_category")->where('post_id',$article->id)->get()->reverse();
    @endphp
    <main>
        <div class="container-lg container-fluid">
            <div class="row">
                <div class="col-12 my-5">
                    <div class="img-heder">
                        <img src="{{asset($article->poster)}}" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div class="content-info">
                        <h1>
                           {{$article->title}}
                        </h1>
                        <div class="content-info-LikeComment">

                            @php
                                $marks=(array)json_decode($article->marks);
                            @endphp
                            <svg xmlns="http://www.w3.org/2000/svg" id="mark-btn" style="cursor: pointer" viewBox="0 0 23.811 29.251">
                                <g id="Bookmark" transform="translate(0.75 0.75)">
                                    <path id="Path_33968" class="marks-icon" d="M10.608,22.824,2.069,27.5a1.423,1.423,0,0,1-1.9-.567h0A1.5,1.5,0,0,1,0,26.264V5.535C0,1.581,2.7,0,6.589,0h9.132c3.769,0,6.589,1.476,6.589,5.271V26.264a1.41,1.41,0,0,1-1.41,1.41,1.555,1.555,0,0,1-.685-.171l-8.592-4.678A1.067,1.067,0,0,0,10.608,22.824Z" transform="translate(0 0)"
                                          fill="@if(\Illuminate\Support\Facades\Auth::check()) @if(in_array(\Illuminate\Support\Facades\Auth::user()->ID,$marks)) #f3cd00 @else none @endif @else none @endif " stroke="#414141" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                    <path id="Line_209" d="M0,.458H10.5" transform="translate(5.864 8.965)" fill="none" stroke="#414141" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                </g>
                            </svg>
                          @php
                          $likes=(array)json_decode($article->likes);
                          @endphp
                            <span id="likes-count">{{count($likes)}}</span>
                            <svg style="cursor: pointer" id="like-btn" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 28.909 27.465">
                                <g id="Iconly_Light_Heart" data-name="Iconly/Light/Heart" transform="translate(0.777 0.801)">
                                    <g id="Heart" transform="translate(0 0)">
                                        <path class="likes-icon" id="Path_33961" d="M13.333,25.7a50.159,50.159,0,0,1-8.67-6.75A17.263,17.263,0,0,1,.537,12.375C-1.012,7.559.8,2.046,5.861.414a8.607,8.607,0,0,1,7.81,1.316h0A8.62,8.62,0,0,1,21.482.414c5.064,1.632,6.886,7.145,5.337,11.961a17.263,17.263,0,0,1-4.126,6.579,50.159,50.159,0,0,1-8.67,6.75l-.338.211Z" transform="translate(0 0)" fill="@if(\Illuminate\Support\Facades\Auth::check()) @if(in_array(\Illuminate\Support\Facades\Auth::user()->ID,$likes)) red @else none @endif @else none @endif " stroke="#414141" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                        <path id="Path_33964" d="M0,0A4,4,0,0,1,2.76,3.487" transform="translate(19.061 5.835)" fill="none" stroke="#414141" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.5"/>
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="content-info-author">
                            <img src="{{asset("userAssets/image/img/c1cb904db7c834fb45a0f30dcb17f204.png")}}" alt="">
                            <div class="content-info-author-info">
                                <span>{{getProperty(App\Models\adminUser::where("id",$article->author_id)->first(),"name")}}</span>
                                <div class="content-info-author-info-c">
                                    <span>{{$article->date}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 h-100 mt-2">
                    {!! fixUrl($article->content) !!}
                </div>
                <div class="col-12 my-4">
                    <div class="sharing">
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30.836" height="30.836" viewBox="0 0 30.836 30.836">
                            <g id="Group_6062" data-name="Group 6062" transform="translate(-1750.582 -3152.582)">
                              <g id="Group_6061" data-name="Group 6061">
                                <g id="Group_6060" data-name="Group 6060">
                                  <g id="share" transform="translate(1750.582 3152.582)">
                                    <path id="Path_13997" data-name="Path 13997" d="M0,0H30.836V30.836H0Z" fill="none"/>
                                    <circle id="Ellipse_178" data-name="Ellipse 178" cx="4" cy="4" r="4" transform="translate(3.418 11.418)" fill="none" stroke="#a956f1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                    <circle id="Ellipse_179" data-name="Ellipse 179" cx="4" cy="4" r="4" transform="translate(19.418 3.418)" fill="none" stroke="#a956f1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                    <circle id="Ellipse_180" data-name="Ellipse 180" cx="4" cy="4" r="4" transform="translate(19.418 19.418)" fill="none" stroke="#a956f1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                    <line id="Line_61" data-name="Line 61" y1="4.368" x2="8.48" transform="translate(11.178 9.379)" fill="none" stroke="#a956f1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                    <line id="Line_62" data-name="Line 62" x2="8.48" y2="4.368" transform="translate(11.178 17.088)" fill="none" stroke="#a956f1" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                     </span>
                        <h4>
                            اشتراک گذاری :
                        </h4>
                        <div class="sharing-social">
                            <div class="sharing-social-sixSide">
                                <a href="{{$article->instagram_link}}">
                                    <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31.011" height="39.419" viewBox="0 0 51.011 59.419">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" y1="0.008" x2="0.5" y2="0.998" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#e09b3d"/>
                                                <stop offset="0.3" stop-color="#c74c4d"/>
                                                <stop offset="0.6" stop-color="#c21975"/>
                                                <stop offset="1" stop-color="#7024c4"/>
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-2" y1="-0.451" y2="1.462" xlink:href="#linear-gradient"/>
                                            <linearGradient id="linear-gradient-3" y1="-1.396" y2="6.586" xlink:href="#linear-gradient"/>
                                        </defs>
                                        <g id="Group_6802" data-name="Group 6802" transform="translate(-733.994 -6709.581)">
                                            <path id="NoPath_-_Copy_43_" data-name="NoPath - Copy (43)" d="M430.859,139.823l-25.449,14.8v29.934l25.449,14.687,25.561-14.687V154.622Z" transform="translate(328.585 6569.758)" fill="#fff" opacity="0.27"/>
                                            <g id="Group_6056" data-name="Group 6056" transform="translate(11160.465 -1277.211)">
                                                <g id="instagram" transform="translate(-10417.291 8000.175)">
                                                    <path id="Path_123" data-name="Path 123" d="M22.924,0H9.727A9.738,9.738,0,0,0,0,9.727v13.2a9.738,9.738,0,0,0,9.727,9.727h13.2a9.738,9.738,0,0,0,9.727-9.727V9.727A9.738,9.738,0,0,0,22.924,0Zm6.442,22.924a6.442,6.442,0,0,1-6.442,6.442H9.727a6.442,6.442,0,0,1-6.442-6.442V9.727A6.442,6.442,0,0,1,9.727,3.285h13.2a6.442,6.442,0,0,1,6.442,6.442v13.2Z" fill="url(#linear-gradient)"/>
                                                    <path id="Path_124" data-name="Path 124" d="M141.445,133a8.445,8.445,0,1,0,8.445,8.445A8.454,8.454,0,0,0,141.445,133Zm0,13.6a5.16,5.16,0,1,1,5.16-5.16A5.16,5.16,0,0,1,141.445,146.6Z" transform="translate(-125.119 -125.119)" fill="url(#linear-gradient-2)"/>
                                                    <circle id="Ellipse_4" data-name="Ellipse 4" cx="2.024" cy="2.024" r="2.024" transform="translate(22.763 5.921)" fill="url(#linear-gradient-3)"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <a href="{{$article->whatsapp_link}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.011" height="39.419" viewBox="0 0 51.011 59.419">
                                        <g id="Group_6803" data-name="Group 6803" transform="translate(-660.994 -6709.581)">
                                            <path id="NoPath_-_Copy_43_" data-name="NoPath - Copy (43)" d="M430.859,139.823l-25.449,14.8v29.934l25.449,14.687,25.561-14.687V154.622Z" transform="translate(255.585 6569.758)" fill="#fff" opacity="0.27"/>
                                            <g id="whatsapp" transform="translate(670.662 6722.324)">
                                                <path id="Path_244" data-name="Path 244" d="M16.754.019A15.844,15.844,0,0,0,3.414,23.031L1.732,31.193a.616.616,0,0,0,.746.724l8-1.895a15.839,15.839,0,1,0,6.277-30ZM26.3,24.607a12.409,12.409,0,0,1-14.288,2.339l-1.114-.555-4.9,1.162,1.032-5.011-.549-1.075a12.412,12.412,0,0,1,2.284-14.4A12.4,12.4,0,1,1,26.3,24.607Z" transform="translate(-1.69 0)" fill="#7ad06d"/>
                                                <path id="Path_245" data-name="Path 245" d="M120.247,118.486l-3.068-.881a1.143,1.143,0,0,0-1.132.3l-.75.764a1.118,1.118,0,0,1-1.215.256,16.377,16.377,0,0,1-5.284-4.659,1.118,1.118,0,0,1,.088-1.239l.655-.847a1.143,1.143,0,0,0,.141-1.162l-1.291-2.919a1.144,1.144,0,0,0-1.786-.409,5.16,5.16,0,0,0-2,3.044c-.218,2.149.7,4.859,4.19,8.112,4.027,3.759,7.252,4.255,9.352,3.747A5.16,5.16,0,0,0,120.9,120.2,1.144,1.144,0,0,0,120.247,118.486Z" transform="translate(-96.723 -99.214)" fill="#7ad06d"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>

                            </div>
                        </div>
                        <div class="sharing-link"
                             onclick="copyLink('{{route("user.single_product_category",$article->slug)}}')">
                        <span>
                           کپی لینک
                        </span>
                            <svg id="copy" xmlns="http://www.w3.org/2000/svg" width="37.168" height="37.168" viewBox="0 0 37.168 37.168">
                                <path id="Path_14002" data-name="Path 14002" d="M37.168,0H0V37.168H37.168Z" fill="none"/>
                                <rect id="Rectangle_7861" data-name="Rectangle 7861" width="18" height="19" rx="2" transform="translate(6 12.537)" fill="none" stroke="#a956f1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                <path id="Path_14003" data-name="Path 14003" d="M4,10.195V7.1A3.1,3.1,0,0,1,7.1,4H19.487a3.1,3.1,0,0,1,3.1,3.1V19.487a3.1,3.1,0,0,1-3.1,3.1h-3.1" transform="translate(8.389 2.195)" fill="none" stroke="#a956f1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <div class="bg-box">
                        <div class="topic-top topic-top-c">
                            <h4>
                                دیدگاه خود را برای این نوشته بنویسید
                            </h4>
                        </div>
                        <form id="comment-from" action="{{route('user.comment_submit')}}" method="post">
                            @csrf
                            <input name="s" type="hidden" value="product_category">
                            <input name="pi" type="hidden" value="{{$article->id}}">
                            <div class="form-gr">
                                @if(\Illuminate\Support\Facades\Auth::check()!=true)
                                    <div class="form-gr-input">
                                        <label for="">نام نام خانوادگی</label>
                                        <input name="name" type="text">
                                    </div>
                                    <div class="form-gr-input">
                                        <label for="">شماره موبایل</label>
                                        <input name="phone_number" type="number">
                                    </div>
                                @endif
                                <div class="form-gr-input form-gr-textarea">
                                    <label for="">توضیحات</label>
                                    <textarea name="content" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-gr-submit">
                                    <button type="submit">
                                        ارسال دیگاه
                                        <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.119" height="14.524"
                                     viewBox="0 0 24.119 14.524">
                                    <g id="Iconly_Light_Arrow_-_Left" data-name="Iconly/Light/Arrow - Left"
                                       transform="translate(-3.375 -5.012)">
                                      <g id="Arrow_-_Left" data-name="Arrow - Left"
                                         transform="translate(20 5.5) rotate(90)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M.5,22.369V0"
                                              transform="translate(6.274 -6.619)" fill="none" stroke="#a855f1"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="1.75"/>
                                        <path id="Stroke_3" data-name="Stroke 3" d="M12.049,0,6.025,6.05,0,0"
                                              transform="translate(0.75 9.7)" fill="none" stroke="#a855f1"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                              stroke-width="1.75"/>
                                      </g>
                                    </g>
                                  </svg>
                                </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <div class="bg-box-comment">
                        <div class="bg-box">
                            <div class="topic-top topic-top-c">
                                <h4>
                                    دیدگاه ها برای این نوشته
                                </h4>
                            </div>
                        </div>

                        <div class="bg-box-comment-body">
                            <ul>
                                @foreach($comments as $comment)
                                    <li>
                                        <div class="bg-box-comment-body-info">
                                            <img src="{{asset('userAssets/image/img/c1cb904db7c834fb45a0f30dcb17f204.png')}}"
                                                 alt="">
                                            @if($comment->user_type!="guest")
                                                <span>{{getProperty(App\Models\User::where('ID',$comment->user_id)->first(),"display_name")}}</span>
                                            @else
                                                {{$comment->fullName}}
                                            @endif

                                            <span>{{$comment->date}}</span>
                                        </div>
                                        <p>
                                            {{$comment->content}}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script>
        $('#like-btn').click(function (){
            $.ajax({
                url: '{{route("user.api_like_submit")}}',
                type: 'GET',
                data: {
                    id:"{{$article->id}}"
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.success == 0) {
                        $("#likes-count").text(data.likesCount)
                        if(data.isLiked){
                            $(".likes-icon").attr('fill','red')
                        } else{
                            $(".likes-icon").attr('fill','none')
                        }
                    }
                    if (data.reLogin == 0) {
                        signUpLogin()
                    }
                    if (data.hasOwnProperty("msg")) {
                        toastr.success(data.msg);
                    }
                    if (data.hasOwnProperty("errMsg")) {
                        toastr.error(data.errMsg);
                    }
                },
                error: function (data) {
                    let errors = data.responseJSON.errors;
                    for (error in errors) {
                        toastr.error(errors[error][0]);
                    }
                }
                ,
                complete: function () {

                }
            });
        })
        $('#mark-btn').click(function (){
            $.ajax({
                url: '{{route("user.api_mark_submit")}}',
                type: 'GET',
                data: {
                    id:"{{$article->id}}"
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.success == 0) {
                        if(data.isMarked){
                            $(".marks-icon").attr('fill','#f3cd00')
                        } else{
                            $(".marks-icon").attr('fill','none')
                        }
                    }
                    if (data.reLogin == 0) {
                        signUpLogin()
                    }
                    if (data.hasOwnProperty("msg")) {
                        toastr.success(data.msg);
                    }
                    if (data.hasOwnProperty("errMsg")) {
                        toastr.error(data.errMsg);
                    }
                },
                error: function (data) {
                    let errors = data.responseJSON.errors;
                    for (error in errors) {
                        toastr.error(errors[error][0]);
                    }
                }
                ,
                complete: function () {

                }
            });
        })
    </script>
@endsection