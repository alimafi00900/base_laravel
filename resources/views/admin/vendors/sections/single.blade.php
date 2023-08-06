@extends('admin.layouts.mainLayout')
@section('main_title')
    | {{getCurrentStructure('template_title')}}
@endsection
@section('page_title')
    {{getCurrentStructure('template_title')}}
@endsection
@section('main_header')
    <script src="/adminAssets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        .item {
            padding: 1px 8px;
            padding-bottom: 10px;
            padding-top: 7px;
            border-bottom: 1px solid white;
        }
    </style>
    @yield('sub_header')
@endsection
@section('main_content')
    @if(existAdminComponent('single.modals'))
        @include(getAdminComponent('single.modals'),
    ["item"=>$item])
    @endif
    @if(getCurrentStructure(['sections','delete'])===true)
        <div class="modal fade text-left" id="delete-item-modal" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel120" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title white" id="myModalLabel120">حذف تکی
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="msg"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                                data-bs-dismiss="modal">
                            <span class="d-block">انصراف</span>
                        </button>
                        <a onclick=" window.location.href = '{{route(getCurrentStructure('route_name')."_delete")}}' + '?id=' + itemIdDelete;"
                           type="button" class="btn btn-danger ml-1"
                           data-bs-dismiss="modal">
                            <span class="d-block">حذف</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <section class="section">
        <div class="card table">

            @if(existAdminComponent('single.rightHeaderActions') or existAdminComponent('single.leftHeaderActions'))
                <div class="card-header px-3 py-2 d-flex justify-content-between">
                    <div class="d-flex align-items-center">

                        @if(getCurrentStructure(['sections','delete'])===true)
                            <a class="btn btn-sm btn-danger"
                               onclick="deleteItem('{{getItemId($item)}}')">
                                حذف
                            </a>
                        @endif

                        @if(getCurrentStructure(['sections','delete'])===true)
                            <a class="btn btn-sm btn-info"
                               onclick="deleteItem('{{getItemId($item)}}')">
                                حذف
                            </a>
                        @endif
                        @if(existAdminComponent('single.rightHeaderActions'))
                            @include(getAdminComponent('single.rightHeaderActions'),
                        ["item"=>$item])
                        @endif
                    </div>
                    <div class="d-flex">
                        @if(existAdminComponent('single.leftHeaderActions'))
                            @include(getAdminComponent('single.leftHeaderActions'),
                        ["item"=>$item])
                        @endif
                    </div>
                </div>
            @endif

            <div class="card-body px-0">
                <div class="container px-0">
                    <div class="main-body">
                        <div class="card-body row">
                            @if(existAdminComponent('single.card_body'))
                                @include(getAdminComponent('single.card_body'),
                                 ["item"=>$item])
                            @else
                                @foreach(getCurrentStructure('fields') as $field_key => $field_value)
                                    @if(getProperty($field_value,['sections','single'])===true)
                                        <div class="col-md-6 col-12 mb-3 ">
                                            <div class="d-flex item justify-content-between">
                                                <h6 class="mb-0">{{getProperty($field_value,['name_fa'])}}</h6>
                                                @php
                                                    $template=getProperty($field_value,['templates','single',"name"]);
                                                    if(isValidValue($template)!=true){
                                                        $template="text";
                                                    }
                                                @endphp
                                                @if(existAdminComponent('single.'.$template))
                                                    @include(getAdminComponent('single.'.$template),
                                                ['field_key'=>$field_key,'field_value'=>$field_value,"item"=>$item, 'item_value'=>$item->$field_key])
                                                @else
                                                    @include('admin.vendors.fields.all.'.$template,
                                                 ['field_key'=>$field_key,'field_value'=>$field_value,"item"=>$item, 'item_value'=>$item->$field_key])
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                @if(existAdminComponent('single.fields'))
                                    @include(getAdminComponent('single.fields'),
                                ["item"=>$item])
                                @endif
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('end_content')
@endsection
@section('main_footer')
    <script>
        ///////////////////
        let itemIdDelete = "";
        function deleteItem(id) {
            itemIdDelete = id
            $('#delete-item-modal #msg').text("ایا مایل به حذف ایتم " + itemIdDelete + " هستید؟ ")
            $('#delete-item-modal').modal("show")
        }
    </script>
    @yield('sub_footer')
    @if(existAdminComponent('single.footer'))
        @include(getAdminComponent('single.footer'),
    ["item"=>$item])
    @endif
@endsection
