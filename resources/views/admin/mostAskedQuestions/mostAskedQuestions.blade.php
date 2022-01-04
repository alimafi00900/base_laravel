@extends("admin.layouts.basic_layouts.admin_items")
@php
    $templateName_route_name="admin.most_asked_questions";
    $templateName_single_fa="سوالات متداول";
    $templateName_sum_fa="سوالات متداول";
@endphp
@section("table_header")
    <th class="text-center">شماره</th>
    <th class="text-center">عنوان</th>
    <th class="text-center">وضعیت</th>
    <th class="text-center">تاریخ</th>
    <th class="text-center">زمان</th>
@endsection
@section("table_body")
    <tbody>
    @foreach($most_asked_questions as $most_asked_question)
        <tr class="font-weight-bold">
            <td class="text-center select-items" style="display:none;">
                <input id="item-id-{{$most_asked_question->id}}" type="checkbox" style="margin:-7px" class="form-check-input ">
            </td>
            {{-------------------}}

            <td class="text-center">{{$most_asked_question->id}}</td>

            <td class="text-center">{{$most_asked_question->title}}</td>

            <td class="text-center">
                @if($most_asked_question->status=="active")
                    <span class="btn btn-success btn-sm">فعال</span>
                @else
                    <span class="btn btn-danger btn-sm">غیر فعال</span>
                @endif
            </td>

            <td class="text-center">{{$most_asked_question->date}}</td>

            <td class="text-center">{{$most_asked_question->time}}</td>


            {{-----------------}}
            <td class="text-center">
                <a class="btn btn-sm btn-info"
                   href="{{route($templateName_route_name."_edit",[$most_asked_question->id])}}">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </a>
                <button class="btn btn-sm btn-danger" style="cursor: pointer"
                        onclick="deleteItemModal('{{$most_asked_question->id}}')"><i
                            class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
    @endforeach
    </tbody>
@endsection