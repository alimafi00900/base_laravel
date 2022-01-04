@extends("user.layouts.mainLayout")
@section("title")
    {{$branch->display_name}}
@endsection
@section("content")
    <main>
        <div class="container-fluid">
            <div class="col-12 col-md-11 my-5 mx-auto">
                <div class="img-heder-fluid">
                    <img src="{{asset($branch->poster)}}" alt="">
                    <h1>
                        {{$branch->display_name}}
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-lg container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row col-cheng">
                        @foreach($product_categories as $product_category)
                            <div class="col col-sm-6 col-md-4 col-lg-3">
                                <div >
                                    <div class="app-cart">
                                        <a href="{{route("user.single_product_category",$product_category->slug)}}"><img src="{{asset($product_category->img_link)}}" alt=""></a>
                                        <a href="{{route("user.single_product_category",$product_category->slug)}}">{{$product_category->title}}</a>
                                        <a href="{{route("user.single_product_category",$product_category->slug)}}"><img src="{{asset("/userAssets/image/img/Group6723.png")}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12">
                    <div class="title-section">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 76.358 85.978">
                            <defs>
                                <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#cf67ee"/>
                                    <stop offset="1" stop-color="#713cf6"/>
                                </linearGradient>
                                <filter id="NoPath_-_Copy_45_" x="0" y="0" width="76.358" height="85.978"
                                        filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="3" result="blur"/>
                                    <feFlood flood-color="#c964ef" flood-opacity="0.4"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                            </defs>
                            <g id="Group_6580" data-name="Group 6580" transform="translate(-935 -4069.858)">
                                <g transform="matrix(1, 0, 0, 1, 935, 4069.86)" filter="url(#NoPath_-_Copy_45_)">
                                    <path id="NoPath_-_Copy_45_2" data-name="NoPath - Copy (45)"
                                          d="M434.525,139.823l-29.115,16.93V191l29.115,16.8L463.768,191V156.754Z"
                                          transform="translate(-396.41 -133.82)" fill="url(#linear-gradient)"/>
                                </g>
                                <g id="Iconly_Bold_Ticket_Star" data-name="Iconly/Bold/Ticket Star"
                                   transform="translate(957 4093.449)">
                                    <g id="Ticket_Star" data-name="Ticket Star" transform="translate(2 3)">
                                        <path id="Ticket_Star-2" data-name="Ticket Star"
                                              d="M23.608,26.8H6.167A6.146,6.146,0,0,1,0,20.687V16.7A1.113,1.113,0,0,1,1.116,15.6a2.21,2.21,0,0,0,2.219-2.2,2.1,2.1,0,0,0-2.219-2.067A1.114,1.114,0,0,1,0,10.226L0,6.111A6.146,6.146,0,0,1,6.169,0H23.605a6.146,6.146,0,0,1,6.167,6.111V10.1A1.109,1.109,0,0,1,28.658,11.2a2.2,2.2,0,1,0,0,4.392A1.113,1.113,0,0,1,29.774,16.7v3.985A6.145,6.145,0,0,1,23.608,26.8ZM14.887,16.778h0L17.054,17.9a1.118,1.118,0,0,0,.52.131,1.1,1.1,0,0,0,1.081-1.278l-.415-2.394,1.755-1.694a1.071,1.071,0,0,0,.279-1.121,1.085,1.085,0,0,0-.887-.738l-2.425-.351L15.876,8.282a1.106,1.106,0,0,0-1.976,0l-1.085,2.179-2.42.35a1.1,1.1,0,0,0-.894.74A1.076,1.076,0,0,0,9.78,12.67l1.755,1.694-.414,2.394a1.082,1.082,0,0,0,.439,1.069,1.1,1.1,0,0,0,1.156.082l2.17-1.13Z"
                                              transform="translate(0)" fill="#fff"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h2>
                            توضیحات
                        </h2>
                        <div class="title-section-line">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-2 h-100">
                    {!! fixUrl($branch->content) !!}
                </div>
            </div>
        </div>
    </main>

@endsection