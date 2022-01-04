@extends("admin.layouts.basic_layouts.admin_items")
@php
    $templateName_route_name="admin.points";
    $templateName_single_fa="امتیاز";
    $templateName_sum_fa="امتیاز ها";
@endphp
@section("table_header")
    <th class="text-center">قیمت از</th>
    <th class="text-center">قیمت تا</th>
    <th class="text-center">امتیاز</th>
@endsection
@section("table_body")
    <tbody>
    @foreach($items as $item)
        <tr class="font-weight-bold">
            <td class="text-center select-items" style="display:none;">
                <input id="item-id-{{$item->id}}" type="checkbox" style="margin:-7px" class="form-check-input ">
            </td>
{{-------------------}}



            <td class="text-center">{{$item->min_amount}}</td>
            <td class="text-center">{{$item->max_amount}}</td>
            <td class="text-center">{{$item->point}}</td>




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