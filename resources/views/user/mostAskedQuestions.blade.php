@extends("user.layouts.mainLayout")
@section("title")
    سوالات متداول
@endsection
@section("content")

    <main class="my-5 contactUs">
        <div class="container-lg container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="topic-shadow">
                        <h1>
                            سولات متداول
                        </h1>
                        <span>
                            FAQ
                        </span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="topic-top topic-top-q">
                        <h4 >
                            سوالاتی متداولی که از ما داشتید
                        </h4>
                    </div>
                    <div class="accordion accordion-flush contactUs-fq" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header " id="flush-headingOne">

                            <span>
                                <img src="{{asset("/assets/image/img/Group-5046.png")}}" alt="">
                            </span>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    معتبرترین فروشگاه رسمی فروش گیفت کارت ?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">با توجه به خدمات دهی 24 ساعته ما در 7 روز هفته شما تنها 10 ثانیه بعد از پرداخت قادر هستید گیفت کارت را دریافت کنید ، همچنین تحویل گیفت کارت به 3 روش 【1】  ارسال پیامک 【2】 ارسال ایمیل 【3】 مشاهده در فروشگاه ما امکان پذیر می باشد و همچنین همزمان با تحویل آموزش استفاده به صورت کامل برای شما ارسال می گردد</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                            <span>
                                <img src="{{asset("/assets/image/img/Group-5046.png")}}" alt="">
                            </span>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    بعد از پرداخت چه زمانی گیفت کارت تحویل میگیرم ؟
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">با توجه به خدمات دهی 24 ساعته ما در 7 روز هفته شما تنها 10 ثانیه بعد از پرداخت قادر هستید گیفت کارت را دریافت کنید ، همچنین تحویل گیفت کارت به 3 روش 【1】  ارسال پیامک 【2】 ارسال ایمیل 【3】 مشاهده در فروشگاه ما امکان پذیر می باشد و همچنین همزمان با تحویل آموزش استفاده به صورت کامل برای شما ارسال می گردد</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                            <span>
                                <img src="{{asset("/assets/image/img/Group-5046.png")}}" alt="">
                            </span>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    تمامی گیفت کارت ها پشتیبانی 24 ساعته دارند
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">با توجه به خدمات دهی 24 ساعته ما در 7 روز هفته شما تنها 10 ثانیه بعد از پرداخت قادر هستید گیفت کارت را دریافت کنید ، همچنین تحویل گیفت کارت به 3 روش 【1】  ارسال پیامک 【2】 ارسال ایمیل 【3】 مشاهده در فروشگاه ما امکان پذیر می باشد و همچنین همزمان با تحویل آموزش استفاده به صورت کامل برای شما ارسال می گردد</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 contactUs-vector">
                    <img src="{{asset("/assets/image/vector/Group 6115.svg")}}" alt="">
                </div>
            </div>
        </div>
    </main>

@endsection