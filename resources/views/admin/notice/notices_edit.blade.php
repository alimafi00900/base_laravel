@extends("admin.layouts.basic_layouts.admin_items_edit")
@php
    $templateName_route_name="admin.notices";
    $templateName_single_fa="اطلاعیه";
    $templateName_sum_fa="اطلاعیه ها";
    $item = $notices;
@endphp
@section("form_edit")
    <script src="https://cdn.tiny.cloud/1/a30ymuimzh23fx8m22eb2x3iu2ov7uu7786f1tskoe54dllx/tinymce/5/tinymce.min.js"></script>
    <div class="row ">

        <div class="col-md-6 col-12">
            <label for="" class="mt-4">عنوان</label>
            <input type="text" class="form-control" id="name-input-from" name="title"
                   value="{{$notices->title}}"
                   required>
            <br>
        </div>


        <br>


        <div class="col-md-6 col-12 mt-2">
            <label for="" class="mt-3">وضعیت</label>
            <select class="custom-select" name="status" required>
                <option @if($notices->status == "active") selected @endif value="1">فعال
                </option>
                <option @if($notices->status == "deactivate") selected @endif value="2">غیر فعال
                </option>
            </select>
            <br>
        </div>


        <div class="col-md-1"></div>
        <div class="col-md-4">
            <label for="">دسته بندی</label>
            @include("admin.layouts.partials.searchItem.searchItemHtml",["itemName"=>"product_categories","itemInputValue"=>"$notices->productCategory_id"])
        </div>
        <br>


        <div class="row col-6">
            <label for="" class="mt-5">محتوا</label>
            <textarea rows="10" type="text" id="article-content" class="form-control"
                      name="content"
            >{{$notices->content}}</textarea>
            <br>
        </div>

    </div>
@endsection
@section('js')
    @include("admin.layouts.partials.searchItem.searchItemJs",["itemName"=>"product_categories","itemUrl"=>route("admin.productCategories_api_get_product_categories")])
@endsection
