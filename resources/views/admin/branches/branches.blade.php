@extends("admin.layouts.basic_layouts.admin_items")
@php
    $templateName_route_name="admin.branches";
    $templateName_single_fa="شاخه";
    $templateName_sum_fa="شاخه ها";
@endphp
@section("table_header")
    <th class="text-center">کد</th>
    <th class="text-center">نام نمایشی</th>
    <th class="text-center">نام</th>
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



            <td class="text-center">{{$item->id}}</td>
            <td class="text-center">{{$item->display_name}}</td>
            <td class="text-center">{{$item->name}}</td>
            <td class="text-center">
                <a class="btn btn-success text-light btn-sm" onclick="copyLink('{{route("user.single_branch",[$item->name])}}')">کپی لینک</a>
            </td>




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