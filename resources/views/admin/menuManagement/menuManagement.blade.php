@extends("admin.layouts.basic_layouts.admin_items")
@php
    $templateName_route_name="admin.menuManagement";
    $templateName_single_fa="لینک منو";
    $templateName_sum_fa="لینک منو ها";
@endphp
@section("table_header")
    <th class="text-center">شماره ردیف</th>
    <th class="text-center">نام</th>
    <th class="text-center">نوع منو</th>
    <th class="text-center">لینک</th>
@endsection
@section("table_body")
    <tbody>
    @foreach($items as $item)
        <tr class="font-weight-bold">
            <td class="text-center select-items" style="display:none;">
                <input id="item-id-{{$item->id}}" type="checkbox" style="margin:-7px" class="form-check-input ">
            </td>
{{-------------------}}



            <td class="text-center">{{$item->index_num}}</td>

            <td class="text-center">{{$item->name}}</td>

            <td class="text-center">
                @if($item->nav_type == "header_nav")
                    <span>منو اصلی بالا</span>
                @else
                    <span>منو اصلی پایین</span>
                @endif
            </td>

            <td class="text-center">{{$item->link}}</td>



{{-----------------}}
            <td class="text-center">
                <a class="btn btn-sm btn-info"
                   href="{{route($templateName_route_name."_edit",[$item->id])}}">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </a>
                <button class="btn btn-sm btn-danger" style="cursor: pointer"
                        onclick="deleteItemModal('{{$item->id}}')"><i
                            class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
@endsection