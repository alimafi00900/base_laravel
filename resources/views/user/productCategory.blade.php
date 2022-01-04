@extends("user.layouts.mainLayout")
@section("title")
    {{$productCategory->title}}
@endsection
@section("header")
    <style>
        .box-cartBuy {
            box-shadow: 0 10px 20px 0 var(--black-shadow);
        }
    </style>
    <div class="signUpLogin custom-modal" id="paymentResult">
        <div class="signUpLogin-box">
            <div class="signUpLogin-box-header">
                <h1 id="title">
                    نتیجه تراکنش
                </h1>
                <button type="button" class="closelogin"
                        onclick="$(this).parents('.custom-modal').removeClass('signUpLoginshow')">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.242 34.242">
                            <g id="close" transform="translate(-7982.379 23038.621)">
                              <line id="Line_112" data-name="Line 112" x2="30" y2="30"
                                    transform="translate(7984.5 -23036.5)" fill="none" stroke="" stroke-linecap="round"
                                    stroke-width="3"></line>
                              <line id="Line_113" data-name="Line 113" x1="30" y2="30"
                                    transform="translate(7984.5 -23036.5)" fill="none" stroke="" stroke-linecap="round"
                                    stroke-width="3"></line>
                            </g>
                          </svg>
                    </span>
                </button>
            </div>
            <div class="signUpLogin-box-body ">
                <p class="mb-3" style="text-align: center" id="msg"></p>
            </div>
        </div>
    </div>

@endsection
@section("content")
    <main>
        <div class="container-fluid">
            <div class="col-12 col-md-11 my-5 mx-auto">
                <div class="img-heder-fluid">
                    <img src="{{asset($productCategory->poster)}}" alt="">
                    <h1>
                        {{$productCategory->title}}
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-lg container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row col-cheng" id="list-product">
                        @foreach($products as $product)
                            <div class="col-6 col-sm-6 col-md-4 col-xl-3 single-product"
                                 id="product-id-{{$product->id}}">
                                <div class="box-cartBuy" style="min-height: 207px">
                                    <a class="text-center"> <img src="{{asset($product->img_link)}}"
                                                                 alt="{{$product->tags}}"></a>
                                    <a style="text-align:center">
                                        {{$product->title}}
                                    </a>
                                    <div class="box-cartBuy-price"
                                         style="justify-content: @if($product->status=="active") space-between @else center @endif">
                                        <div class="box-cartBuy-price-cat">
                                            @if($product->status=="active" and getProperty($productCategory,'status')=="active")
                                                @if($product->product_type=="physical")
                                                    @if(intval($product->stock_count)>0)
                                                        @if(intval($product->stock_count)>0 and $product->stock_count<=5)
                                                            <span><span>{{$product->stock_count}}</span> عدد باقی مانده </span>
                                                        @endif
                                                        <span>قیمت</span>
                                                        <span>{{number_format($product->price)}} تومان </span>
                                                    @else
                                                        <span style="color: var(--bs-red)">ناموجود</span>
                                                    @endif
                                                @else
                                                    <span>قیمت</span>
                                                    <span>{{number_format($product->price)}} تومان </span>
                                                @endif
                                            @else
                                                <span style="color: var(--bs-red)">ناموجود</span>
                                            @endif

                                        </div>
                                        @if($product->status=="active" and getProperty($productCategory,'status')=="active")
                                            <div class="table-custom-body-row-cunter d-none"
                                                 id="num-control-single-product" style="margin: 0">
                                                <button class="table-custom-body-row-cunter-plus"
                                                        id="add-num-single-product" type="button">+
                                                </button>
                                                <input class="table-custom-body-row-cunter-input" type="number"
                                                       id="num-single-product" value="0"/>
                                                <button class="table-custom-body-row-cunter-minus"
                                                        id="remove-num-single-product" type="button">-
                                                </button>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-7 mt-5" id="buy-boxs">
                    <div class="bg-box bg-box-noShadow">
                        <div>
                            <div class="sroll">
                                <div class="table-custom">
                                    <div class="table-custom-header">
                                        <ul>
                                            <li>نام محصول</li>
                                            <li>قیمت</li>
                                            <li>تعداد</li>
                                            <li>مجموع</li>
                                        </ul>
                                    </div>
                                    <div class="table-custom-body" id="list-order-item">


                                    </div>
                                    <div class="table-custom-footer">
                                        <div class="table-custom-footer-code mt-3">
                                            <label for="">کد تخفیف</label>
                                            <input type="number">
                                            <span> قابل پرداخت : </span>
                                            <span style="color: var(--green)" id="total-price-order">0,000 تومان</span>
                                        </div>
                                        <div class="table-custom-footer-radius" style="direction: unset">
                                            @foreach($forms as $formKey => $formValue)
                                                <div class="">
                                                    <input type="radio" id="form-show-btn-{{$formKey}}"
                                                           class="field-group-btn"
                                                           name="form-btn"
                                                           @if(array_key_first((array)$forms)==$formKey) checked @endif >
                                                    <label for="form-btn-{{$formKey}}">{{getProperty($forms,[$formKey,'form_title'])}}</label>

                                                </div>
                                            @endforeach
                                        </div>
                                        @foreach($forms as $formKey => $formValue)
                                            <div class="table-custom-footer-buy form-description @if(array_key_first((array)$forms)!=$formKey) d-none @endif"
                                                 id="form-description-{{$formKey}}">
                                                <p>{{getProperty($forms,[$formKey,'form_description'])}}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="flex-column form-gr form-gr-dark mt-0 px-2">
                                <form id="main-form" method="post"
                                      action="{{route("user.order_submit",[$productCategory->id])}}">
                                    @csrf
                                    <input name="form_key" style="display: none"
                                           value="{{array_key_first((array)$forms)}}"/>
                                    <input name="item_orders" style="display: none">
                                    @foreach($forms as $formKey => $formValue)
                                        <div id="field-group-{{$formKey}}"
                                             class="field-group @if(array_key_first((array)$forms)!=$formKey) d-none @else form-active @endif">
                                            @foreach(getProperty($formValue,'form_fields') as $form_fieldKey => $form_fieldValue)
                                                <div class="form-gr-input form-gr-textarea">
                                                    <label for="">{{getProperty($form_fieldValue,'field_title')}}</label>
                                                    <input name="{{$formKey.'_'.$form_fieldKey}}"
                                                           @if(getProperty($form_fieldValue,'field_min_chars')==true) required
                                                           @endif   min="{{getProperty($form_fieldValue,'field_min_chars')}}"
                                                           max="{{getProperty($form_fieldValue,'field_max_chars')}}"
                                                           type="{{getProperty($form_fieldValue,'field_condition')}}"/>
                                                </div>
                                                <div class="form-gr-p">
                                                    <p>
                                                        {{getProperty($form_fieldValue,'field_description')}}
                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </form>
                                <div class="form-gr-submit">
                                    <button class="button-submit " id="form-submit-btn">
                                        پرداخت نهایی
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
                              ></path>
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
                              ></path>
                            </g>
                          </g>
                        </svg>
                      </span>
                                    </button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-5 mt-5">
                    <div class="bg-box bg-box-noShadow">
                        <div class="topic-top topic-top-header">
                            <h4>
                                توجه داشته باشید که :
                            </h4>
                        </div>
                        <ul class="list-information">
                            @php
                                $notices= App\Models\notice::where("productCategory_id",$productCategory->id)->get();
                            @endphp
                            @foreach($notices as $notice)
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         viewBox="0 0 25.928 30.202">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                            gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#cf67ee"/>
                                                <stop offset="1" stop-color="#713cf6"/>
                                            </linearGradient>
                                        </defs>
                                        <g id="Group_5046" data-name="Group 5046"
                                           transform="translate(-740.301 -3800.202)">
                                            <path id="NoPath_-_Copy_43_" data-name="NoPath - Copy (43)"
                                                  d="M418.345,139.823l-12.935,7.522V162.56l12.935,7.465,12.992-7.465V147.345Z"
                                                  transform="translate(334.891 3660.379)" fill="url(#linear-gradient)"/>
                                            <path id="Path_11497" data-name="Path 11497"
                                                  d="M-5712.486-19130.881l5.23,4.621,8.169-9.086"
                                                  transform="translate(6459.957 22946.105)" fill="none" stroke="#fff"
                                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                        </g>
                                    </svg>
                                    <span>
                                   {{$notice->content}}
                                  </span>
                                </li>
                            @endforeach
                        </ul>
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
                    {!!fixUrl($productCategory->content)!!}
                </div>
                <div class="col-12 my-4">
                    <div class="sharing">
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30.836" height="30.836"
                             viewBox="0 0 30.836 30.836">
                            <g id="Group_6062" data-name="Group 6062" transform="translate(-1750.582 -3152.582)">
                              <g id="Group_6061" data-name="Group 6061">
                                <g id="Group_6060" data-name="Group 6060">
                                  <g id="share" transform="translate(1750.582 3152.582)">
                                    <path id="Path_13997" data-name="Path 13997" d="M0,0H30.836V30.836H0Z" fill="none"/>
                                    <circle id="Ellipse_178" data-name="Ellipse 178" cx="4" cy="4" r="4"
                                            transform="translate(3.418 11.418)" fill="none" stroke="#a956f1"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                    <circle id="Ellipse_179" data-name="Ellipse 179" cx="4" cy="4" r="4"
                                            transform="translate(19.418 3.418)" fill="none" stroke="#a956f1"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                    <circle id="Ellipse_180" data-name="Ellipse 180" cx="4" cy="4" r="4"
                                            transform="translate(19.418 19.418)" fill="none" stroke="#a956f1"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                    <line id="Line_61" data-name="Line 61" y1="4.368" x2="8.48"
                                          transform="translate(11.178 9.379)" fill="none" stroke="#a956f1"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                    <line id="Line_62" data-name="Line 62" x2="8.48" y2="4.368"
                                          transform="translate(11.178 17.088)" fill="none" stroke="#a956f1"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
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
                                <a href="{{$productCategory->instagram_link}}">
                                    <svg class="ms-2" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="31.011" height="39.419"
                                         viewBox="0 0 51.011 59.419">
                                        <defs>
                                            <linearGradient id="linear-gradient" x1="0.5" y1="0.008" x2="0.5" y2="0.998"
                                                            gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#e09b3d"/>
                                                <stop offset="0.3" stop-color="#c74c4d"/>
                                                <stop offset="0.6" stop-color="#c21975"/>
                                                <stop offset="1" stop-color="#7024c4"/>
                                            </linearGradient>
                                            <linearGradient id="linear-gradient-2" y1="-0.451" y2="1.462"
                                                            xlink:href="#linear-gradient"/>
                                            <linearGradient id="linear-gradient-3" y1="-1.396" y2="6.586"
                                                            xlink:href="#linear-gradient"/>
                                        </defs>
                                        <g id="Group_6802" data-name="Group 6802"
                                           transform="translate(-733.994 -6709.581)">
                                            <path id="NoPath_-_Copy_43_" data-name="NoPath - Copy (43)"
                                                  d="M430.859,139.823l-25.449,14.8v29.934l25.449,14.687,25.561-14.687V154.622Z"
                                                  transform="translate(328.585 6569.758)" fill="#fff" opacity="0.27"/>
                                            <g id="Group_6056" data-name="Group 6056"
                                               transform="translate(11160.465 -1277.211)">
                                                <g id="instagram" transform="translate(-10417.291 8000.175)">
                                                    <path id="Path_123" data-name="Path 123"
                                                          d="M22.924,0H9.727A9.738,9.738,0,0,0,0,9.727v13.2a9.738,9.738,0,0,0,9.727,9.727h13.2a9.738,9.738,0,0,0,9.727-9.727V9.727A9.738,9.738,0,0,0,22.924,0Zm6.442,22.924a6.442,6.442,0,0,1-6.442,6.442H9.727a6.442,6.442,0,0,1-6.442-6.442V9.727A6.442,6.442,0,0,1,9.727,3.285h13.2a6.442,6.442,0,0,1,6.442,6.442v13.2Z"
                                                          fill="url(#linear-gradient)"/>
                                                    <path id="Path_124" data-name="Path 124"
                                                          d="M141.445,133a8.445,8.445,0,1,0,8.445,8.445A8.454,8.454,0,0,0,141.445,133Zm0,13.6a5.16,5.16,0,1,1,5.16-5.16A5.16,5.16,0,0,1,141.445,146.6Z"
                                                          transform="translate(-125.119 -125.119)"
                                                          fill="url(#linear-gradient-2)"/>
                                                    <circle id="Ellipse_4" data-name="Ellipse 4" cx="2.024" cy="2.024"
                                                            r="2.024" transform="translate(22.763 5.921)"
                                                            fill="url(#linear-gradient-3)"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <a href="{{$productCategory->whatsapp_link}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.011" height="39.419"
                                         viewBox="0 0 51.011 59.419">
                                        <g id="Group_6803" data-name="Group 6803"
                                           transform="translate(-660.994 -6709.581)">
                                            <path id="NoPath_-_Copy_43_" data-name="NoPath - Copy (43)"
                                                  d="M430.859,139.823l-25.449,14.8v29.934l25.449,14.687,25.561-14.687V154.622Z"
                                                  transform="translate(255.585 6569.758)" fill="#fff" opacity="0.27"/>
                                            <g id="whatsapp" transform="translate(670.662 6722.324)">
                                                <path id="Path_244" data-name="Path 244"
                                                      d="M16.754.019A15.844,15.844,0,0,0,3.414,23.031L1.732,31.193a.616.616,0,0,0,.746.724l8-1.895a15.839,15.839,0,1,0,6.277-30ZM26.3,24.607a12.409,12.409,0,0,1-14.288,2.339l-1.114-.555-4.9,1.162,1.032-5.011-.549-1.075a12.412,12.412,0,0,1,2.284-14.4A12.4,12.4,0,1,1,26.3,24.607Z"
                                                      transform="translate(-1.69 0)" fill="#7ad06d"/>
                                                <path id="Path_245" data-name="Path 245"
                                                      d="M120.247,118.486l-3.068-.881a1.143,1.143,0,0,0-1.132.3l-.75.764a1.118,1.118,0,0,1-1.215.256,16.377,16.377,0,0,1-5.284-4.659,1.118,1.118,0,0,1,.088-1.239l.655-.847a1.143,1.143,0,0,0,.141-1.162l-1.291-2.919a1.144,1.144,0,0,0-1.786-.409,5.16,5.16,0,0,0-2,3.044c-.218,2.149.7,4.859,4.19,8.112,4.027,3.759,7.252,4.255,9.352,3.747A5.16,5.16,0,0,0,120.9,120.2,1.144,1.144,0,0,0,120.247,118.486Z"
                                                      transform="translate(-96.723 -99.214)" fill="#7ad06d"/>
                                            </g>
                                        </g>
                                    </svg>
                                </a>

                            </div>
                        </div>
                        <div class="sharing-link"
                             onclick="copyLink('{{route("user.single_product_category",$productCategory->slug)}}')">
                        <span>
                           کپی لینک
                        </span>
                            <svg id="copy" xmlns="http://www.w3.org/2000/svg" width="37.168" height="37.168"
                                 viewBox="0 0 37.168 37.168">
                                <path id="Path_14002" data-name="Path 14002" d="M37.168,0H0V37.168H37.168Z"
                                      fill="none"/>
                                <rect id="Rectangle_7861" data-name="Rectangle 7861" width="18" height="19" rx="2"
                                      transform="translate(6 12.537)" fill="none" stroke="#a956f1"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                <path id="Path_14003" data-name="Path 14003"
                                      d="M4,10.195V7.1A3.1,3.1,0,0,1,7.1,4H19.487a3.1,3.1,0,0,1,3.1,3.1V19.487a3.1,3.1,0,0,1-3.1,3.1h-3.1"
                                      transform="translate(8.389 2.195)" fill="none" stroke="#a956f1"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
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
                            <input name="pi" type="hidden" value="{{$productCategory->id}}">
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
                        @php
                            $comments=App\Models\comment::all()->reverse();
                        @endphp
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
    <div style="display: none" id="component">
        <div class="table-custom-body-row order-item">
            <ul>
                <li id="item-title">خرید گیفت کارت ایتونز 20 دلاری</li>
                <li id="item-unit-price">۵۶،۰۰۰ تومان</li>
                <li>
                    <div class="table-custom-body-row-cunter">
                        <button class="table-custom-body-row-cunter-plus" id="add-num-item-order" type="button">+
                        </button>
                        <input class="table-custom-body-row-cunter-input" type="number" id="num-item-order" value="1"/>
                        <button class="table-custom-body-row-cunter-minus" id="remove-num-item-order" type="button">-
                        </button>
                    </div>
                </li>
                <li id="item-sun-price">۵۶،۰۰۰ تومان</li>
            </ul>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const products = {!!json_encode($productsJson)!!};
        let order = {}
        $(".field-group-btn[name='form-btn']").change(function () {
            let formKey = $(this).attr("id").split("form-show-btn-")[1]
            $(".form-description").addClass("d-none")
            $(".form-description#form-description-" + formKey).removeClass("d-none").hide().show('fade')
            $("#main-form [name='form_key']").val(formKey)
            $("#main-form .field-group").addClass("d-none").removeClass("form-active")
            $("#main-form .field-group#field-group-" + formKey).removeClass("d-none").addClass("form-active").hide().show('fade')
        })

        ////////////////
        function AddNumItemOrder(productId) {
            if (order.hasOwnProperty(productId) != true) {
                order[productId] = {num: 0}
            }
            if (products[productId].type == "physical" && parseInt(order[productId].num) >= parseInt(products[productId].stock_count)) {
                return;
            }
            if (!order[productId].hasOwnProperty('num')) {
                Object.assign(order[productId], {num: 1})
            } else {
                order[productId].num += 1;
            }
            updateAllItemOrder()
        }

        function updateNumItemOrder(productId, num) {
            order[productId].num = parseInt(num);
            updateAllItemOrder()
        }

        function removeNumItemOrder(productId) {
            if (order.hasOwnProperty(productId) != true) {
                updateAllItemOrder()
                return
            }
            if (parseInt(order[productId].num) <= 0) {
                updateAllItemOrder()
                return
            } else {
                order[productId].num -= 1;
            }
            updateAllItemOrder()
        }

        function updateAllItemOrder() {
            $('#list-order-item').empty()
            totalPrice = 0
            if (Object.getOwnPropertyNames(order).length > 0) {
                for (item in order) {
                    $("#list-product .single-product#product-id-" + item + " #num-single-product").val(order[item].num)
                    if (order[item].num > 0) {
                        $("#list-product .single-product#product-id-" + item + " #num-control-single-product").removeClass('d-none')
                    } else {
                        $("#list-product .single-product#product-id-" + item + " #num-control-single-product").addClass('d-none')
                    }

                    if (parseInt(order[item].num) > 0) {
                        let singleProduct = $("#component .order-item").clone()
                        $(singleProduct).attr('id', 'order-item-' + item)
                        $(singleProduct).find("#item-title").text(products[item].title)
                        $(singleProduct).find("#num-item-order").val(order[item].num)
                        $(singleProduct).find("#item-unit-price").text(formatNumber(products[item].price) + ' تومان ')
                        $(singleProduct).find("#item-sun-price").text((formatNumber(parseInt(products[item].price) * parseInt(order[item].num))).toString() + ' تومان ')
                        $('#list-order-item').append($(singleProduct))
                        totalPrice += parseInt(products[item].price) * parseInt(order[item].num)
                    }

                }
                for (item in order) {
                    if (parseInt(order[item].num) <= 0) {
                        delete order[item]
                    }
                }
            }
            $("#total-price-order").text(formatNumber(totalPrice) + ' تومان ')

        }

        ////////////////

        function formatNumber(number) {
            let numberArray = number.toString().split('')
            let count = 0
            let out = ''
            for (let index = numberArray.length - 1; 0 <= index; index--) {
                out = numberArray[index] + out
                count += 1
                if (count == 3 && index != 0) {
                    count = 0
                    out = ',' + out
                }
            }
            return out
        }


        $(document).on("click", "#list-product .single-product", function () {
            let productId = $(this).attr('id').toString().split('product-id-')[1]
            if (products[productId].status != "active") {
                return
            }
            AddNumItemOrder(productId)
        })
        ////////////////////

        $(document).on("click", "#list-order-item .order-item #add-num-item-order", function () {
            let productId = $(this).parents('.order-item').attr('id').toString().split('order-item-')[1]
            if (products[productId].status != "active") {
                return
            }
            AddNumItemOrder(productId)
        })
        $(document).on("change", "#list-order-item .order-item #num-item-order", function () {
            let productId = $(this).parents('.order-item').attr('id').toString().split('order-item-')[1]
            if (products[productId].status != "active") {
                return
            }
            updateNumItemOrder(productId, $(this).val())
        })

        $(document).on("click", "#list-order-item .order-item #remove-num-item-order", function () {
            let productId = $(this).parents('.order-item').attr('id').toString().split('order-item-')[1]
            if (products[productId].status != "active") {
                return
            }
            removeNumItemOrder(productId)
        })

        ///////////////////////
        $(document).on("click", "#list-product .single-product #add-num-single-product", function (e) {
            let productId = $(this).parents('.single-product').attr('id').toString().split('product-id-')[1]
            if (products[productId].status != "active") {
                return
            }
            AddNumItemOrder(productId)
            e.stopPropagation();
        })
        $(document).on("change", "#list-product .single-product #num-single-product", function (e) {
            let productId = $(this).parents('.single-product').attr('id').toString().split('product-id-')[1]
            if (products[productId].status != "active") {
                return
            }
            updateNumItemOrder(productId, $(this).val())
            e.stopPropagation();
        })
        $(document).on("click", "#list-product .single-product #num-single-product", function (e) {
            e.stopPropagation();
        })
        $(document).on("click", "#list-product .single-product #remove-num-single-product", function (e) {
            let productId = $(this).parents('.single-product').attr('id').toString().split('product-id-')[1]
            if (products[productId].status != "active") {
                return
            }
            removeNumItemOrder(productId)
            e.stopPropagation();
        })

        ///////////////////

        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }

        $("#form-submit-btn").click(function () {
            exit = false
            $("#main-form .field-group.form-active input").each(function () {
                if (exit) {
                    return
                }
                let fieldName = $(this).parents(".form-gr-input").find("label").text()
                if ($(this).attr("required") != undefined && $(this).val().length == 0) {
                    toastr.error(' وارد کردن ' + fieldName + " الزامی می باشد ")
                    exit = true
                    return
                }
                if ($(this).attr("type") == 'email' && validateEmail($(this).val()) != true) {
                    toastr.error('' + fieldName + " به درستی وارد نشده است ")
                    exit = true
                    return
                }
                let min = parseInt($(this).attr("min"))
                let max = parseInt($(this).attr("max"))
                if (min != undefined && min != '') {
                    if ($(this).val().length < min) {
                        toastr.error(' طول ' + fieldName + " کمتر از حد مجاز است")
                        exit = true
                        return
                    }
                }
                if (max != undefined && max != '') {
                    if ($(this).val().length > max) {
                        toastr.error(' طول ' + fieldName + " بیشتر از حد مجاز است")
                        exit = true
                        return
                    }
                }
            })
            if (exit) {
                return
            }
            if (Object.getOwnPropertyNames(order).length <= 0) {
                toastr.error('سبد خرید شما خالی است')
                return
            }
            $("[name='item_orders']").val(JSON.stringify(order))
            $('#main-form').submit()
        })

    </script>
    <script>
        @if(session()->has("paymentMsg"))
        $("#paymentResult").addClass("signUpLoginshow");
        $("#paymentResult #title").text("تراکنش موافق");
        $("#paymentResult #title").attr('style', 'color:var(--bs-teal) !important');
        $("#paymentResult #msg").text("{{session()->get("paymentMsg")}}");
        @endif
        @if(session()->has("paymentErrMsg"))
        $("#paymentResult").addClass("signUpLoginshow");
        $("#paymentResult #title").text("تراکنش ناموفق");
        $("#paymentResult #title").attr('style', 'color:#ff273b!important');
        $("#paymentResult #msg").text("{{session()->get("paymentErrMsg")}}");
        @endif
    </script>
@endsection