@extends("admin.layouts.basic_layouts.admin_items_edit")
@php
    $templateName_route_name="admin.points";
    $templateName_single_fa="امتیاز";
    $templateName_sum_fa="امتیاز ها";
@endphp
@section("form_edit")
    <div class="row ">
        <div class="row">
            <div class="col-md-6 col-12">
                <label for="" class="mt-4">قیمت از</label>
                <input type="number" class="form-control" value="{{$item->min_amount}}" id="name-input-from" name="min_amount"
                       required>
                <br>
            </div>
            <div class="col-md-6 col-12">
                <label for="" class="mt-4">قیمت تا</label>
                <input type="number" class="form-control" value="{{$item->max_amount}}" id="name-input-from" name="max_amount"
                       required>
                <br>
            </div>
            <div class="col-md-6 col-12">
                <label for="" class="mt-4">مقدار امتیاز</label>
                <input type="number" class="form-control" id="name-input-from" value="{{$item->point}}" name="point"
                       required>
                <br>
            </div>
        </div>

    </div>
@endsection
