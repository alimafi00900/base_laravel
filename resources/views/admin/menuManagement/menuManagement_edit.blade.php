@extends("admin.layouts.basic_layouts.admin_items_edit")
@php
    $templateName_route_name="admin.menuManagement";
    $templateName_single_fa="لینک منو";
    $templateName_sum_fa="لینک منو ها";
@endphp
@section("form_edit")
    <div class="row ">
        <div class="row ">
        <div class="col-md-6 col-12">
            <label for="" class="mt-4">شماره ردیف</label>
            <input type="text" class="form-control" id="name-input-from" name="indexNumber"
                   value="{{$item->index_num}}"
                   required>
            
        </div>



        <div class="col-md-6 col-12">
            <label for="" class="mt-4">نوع منو</label>
            <select class="form-select mt-2" name="navType">
                <option @if($item->nav_type=="header_nav") selected @endif value="1" >منو اصلی بالا</option>
                <option @if($item->nav_type=="footer_nav") selected @endif value="2" >منو اصلی پایین</option>
            </select>

        </div>
        </div>
            <div class="row ">

        <div class="col-md-6 col-12">
            <label for="" class="mt-4">نام</label>
            <input type="text" class="form-control" id="name-input-from" name="name"
                   value="{{$item->name}}"
                   required>

        </div>



        <div class="col-md-6 col-12">
            <label for="" class="mt-4">لینک</label>
            <input type="text" class="form-control" id="name-input-from" name="link"
                   value="{{$item->link}}"
                   required>

        </div>
            </div>
    </div>
@endsection
