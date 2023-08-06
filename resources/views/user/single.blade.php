@extends("user.layout.layout")
@section("main_header")

<link href="/css/product.css" rel="stylesheet" type="text/css">

@endsection
@section("main_content")
<div class="container-fluid">
    <div class="container product-main-con">
        <div class="row product-main-row" id="product-main-row">
            <div class="gallery">
                <div class="main-pic"><img src="/img/121265753.png"></div>
                <div class="mimi-pic-slider">
                    <div class="owl-carousel mimi-pic-slider-owl-carousel">
                        <div class="item"><img src="/img/121265813.png" alt=""></div>
                        <div class="item"><img src="/img/121265813.png" alt=""></div>
                        <div class="item"><img src="/img/121265813.png" alt=""></div>
                        <div class="item"><img src="/img/121265813.png" alt=""></div>

                    </div>
                </div>
            </div>
            <div class="info">
                <div class="head">
                    <h5>{{getProperty($product,"title")}}</h5>
                </div>
                <div class="body">

                    <div class="product-info">
                        <div>
                            <p>
                                {{getProperty($product,"summery")}}
                            </p>
                        </div>
                    </div>
                    <div class="links">
                        <span class="shop-button">سفارش کالا</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of product-main-con -->
<div class="container-fluid">
<div class="container specifications-con">

    <div class="row specifications-row" id="specifications-row">

        <div class="head">
            <h4>مشخصات فنی</h4>
        </div>
        <div class="body">
           @if(isValidValue($properties))
            @foreach($properties as $property)

                <div class="line">
                    <div class="property">
                        <span>{{getProperty($property,"key")}}</span>
                    </div>
                    <div class="value">
                        <span>{{getProperty($property,"value")}}</span>
                    </div>
                </div>

            @endforeach
            @endif

        </div>


    </div>
</div>
</div>
@endsection
