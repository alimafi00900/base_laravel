@extends("user.layout.layout")

@section("main_header")

    <link href="/css/products.css" rel="stylesheet" type="text/css">

@endsection

@section("main_content")
    <div class="container-fluid">
        <div class="container body-main-products-con">
            <div class="row body-main-products-row" id="body-main-products-row">
                <div class="head" id="body-main-products-row-head">
                    <h3>نتیجه جستجو  {{"\"".$search_value."\""}}</h3>
                </div>
                <div class="row body">

                    @foreach ($products as $product)
                        <!------------------>
                        <a href="{{route("user.product",[$product->slug])}}">
                            <div class="product">
                                <div>
                                    <img src="{{$product->main_pic}}">
                                </div>
                                <div>
                                    <h5>{{$product->display_name}}</h5>
                                </div>
                                <div> <span>مشاهده محصول</span></div>
                            </div>
                        </a>
                        <!------------------>

                    @endforeach



                </div>




            </div>
        </div>
    </div>

@endsection
