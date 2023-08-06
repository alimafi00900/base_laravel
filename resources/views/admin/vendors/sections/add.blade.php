@extends('admin.layouts.mainLayout')
@section('main_title')
    |  افزودن {{getCurrentStructure('template_title')}}
@endsection
@section('page_title')
    افزودن {{getCurrentStructure('template_title')}}
@endsection
@section('main_header')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.min.css"
          integrity="sha512-NaCOGQe8bs7/BxJpnhZ4t4f4psMHnqsCxH/o4d3GFqBS4/0Yr/8+vZ08q675lx7pNz7lvJ6fRPfoCNHKx6d/fA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="/adminAssets/css/pages/form-element-select.css?v=32322332">
    <script
        src="https://cdn.tiny.cloud/1/a30ymuimzh23fx8m22eb2x3iu2ov7uu7786f1tskoe54dllx/tinymce/5/tinymce.min.js"></script>
    <script src="/adminAssets/js/jsoneditor_fa.js"></script>
    @if(existAdminComponent('add.header'))
        @include(getAdminComponent('add.header'))
    @endif
@endsection
@section('main_content')
    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form class="w-100 h-100" method="post"
                      action="{{route(getCurrentStructure('route_name')."_add_submit")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        @foreach(getCurrentStructure('fields') as $field_key => $field_value)

                            @if(getProperty($field_value,['sections','add'])===true and getProperty($field_value,['templates','add'])!=null)

                                @if(viewExist('admin/vendors/fields/add/'.getProperty($field_value,['templates','add','name'])."/html")===true)
                                    @include('admin.vendors.fields.add.'.getProperty($field_value,['templates','add','name']).".html",[
                                      'field_key'=>$field_key,'field_value'=>$field_value])
                                @else
                                    @include('admin.vendors.fields.add.'.getProperty($field_value,['templates','add','name']),[
                                   'field_key'=>$field_key,'field_value'=>$field_value])
                                @endif


                            @endif

                        @endforeach
                        @if(existAdminComponent('add.form'))
                            @include(getAdminComponent('add.form'))
                        @endif
                    </div>
                    <div class="col-12 mt-3">
                        <a onclick="formSubmit()" class="btn btn-lg btn-info">ثبت اطلاعات</a>
                        <a href="{{route(getCurrentStructure('route_name'))}}" class="btn btn-lg btn-danger">انصراف</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @if(existAdminComponent('add.end_content'))
        @include(getAdminComponent('add.end_content'))
    @endif
@endsection
@section('main_footer')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/vader/jquery-ui.min.css"
          integrity="sha512-aOY1DMp/EOhmSIAuJFIsrXRnk2wSrUB7BK5x+HU3ne0TIzKinEkiiEnIhELUbgsmUDU7U9YONFSnjwjRoX7GXg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="/adminAssets/js/imageUploader.js"></script>
    <script src="/adminAssets/js/input.js?v=323322223"></script>
    <script src="/adminAssets/js/extensions/form-element-select.js?v=23"></script>
    <script>
        let formSubmit = function () {
            // if (verifyForm() != true) {
            //     return;
            // }
            $("form").submit()
        }
    </script>
    @if(existAdminComponent('add.footer'))
        @include(getAdminComponent('add.footer'))
    @endif

    @foreach(getCurrentStructure('fields') as $field_key => $field_value)
        @if(getProperty($field_value,['sections','add'])===true and getProperty($field_value,['templates','add'])!=null)
            @if(viewExist('admin/vendors/fields/add/'.getProperty($field_value,['templates','add','name'])."/js")===true)
                @include('admin.vendors.fields.add.'.getProperty($field_value,['templates','add','name']).".js",[
                  'field_key'=>$field_key,'field_value'=>$field_value])
            @endif
        @endif
    @endforeach

@endsection
