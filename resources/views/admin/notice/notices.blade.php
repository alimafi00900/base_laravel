@extends("admin.layouts.basic_layouts.admin_items")
@php
    $templateName_route_name="admin.notices";
    $templateName_single_fa="اطلاعیه";
    $templateName_sum_fa="اطلاعیه ها";
@endphp
@section("table_header")
    <th class="text-center">شماره</th>
    <th class="text-center">عنوان</th>
    <th class="text-center">دسته بندی</th>
    <th class="text-center">وضعیت</th>
    <th class="text-center">تاریخ</th>
    <th class="text-center">زمان</th>
@endsection
@section("table_body")
    <tbody>
    @foreach($notices as $notice)
        <tr class="font-weight-bold">
            <td class="text-center select-items" style="display:none;">
                <input id="item-id-{{$notice->id}}" type="checkbox" style="margin:-7px" class="form-check-input ">
            </td>
            {{-------------------}}

            <td class="text-center">{{$notice->id}}</td>

            <td class="text-center">{{$notice->title}}</td>
            <td class="text-center">{{getProperty(App\Models\product_category::where("id", $notice->productCategory_id)->first(),"title")}}</td>

            <td class="text-center">
                @if($notice->status=="active")
                    <span class="btn btn-success btn-sm">فعال</span>
                @else
                    <span class="btn btn-danger btn-sm">غیر فعال</span>
                @endif
            </td>

            <td class="text-center">{{$notice->date}}</td>

            <td class="text-center">{{$notice->time}}</td>

            {{-----------------}}
            <td class="text-center">
                <a class="btn btn-sm btn-info"
                   href="{{route($templateName_route_name."_edit",[$notice->id])}}">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </a>
                <button class="btn btn-sm btn-danger" style="cursor: pointer"
                        onclick="deleteItemModal('{{$notice->id}}')"><i
                            class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
@endsection