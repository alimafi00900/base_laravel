@extends('admin.layouts.mainLayout')
@section('main_title')
    |  ویرایش  {{$item->name_fa}}
@endsection
@section('page_title')
    ویرایش  {{$item->name_fa}}
@endsection
@section('main_header')
    @if(getCurrentStructure(['sections','upload_pic_jsonEdit'])===true)
        <script src="/adminAssets/js/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @endif
    <style>
        input {
            direction: ltr;
        }
    </style>
    @if(getProperty($_GET,"type")=="jsonEditor")
        <link href="/adminAssets/vendor/jsoneditor/jsoneditor.min.css" rel="stylesheet" type="text/css">
        <script src="/adminAssets/vendor/jsoneditor/jsoneditor.min.js"></script>
    @endif


@endsection
@section('main_content')
    @if(getCurrentStructure(['sections','upload_pic_jsonEdit'])===true)
        @include('admin.vendors.modals.uploadFile')
    @endif
    <section class="section">
        <div class="card">
            <div class="card-header">
                @if(getCurrentStructure(['sections','upload_pic_jsonEdit'])===true)
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#uploadFile">
                        اپلود عکس
                    </button>
                @endif
                @if(getProperty($_GET,"type")=="jsonEditor")
                    <a class="btn btn-primary" href="{{route(\Illuminate\Support\Facades\Route::getCurrentRoute()->getName(),[getItemId($item)])}}">ویرایش با Elements</a>
                @else
                    <a class="btn btn-info" href="{{route(\Illuminate\Support\Facades\Route::getCurrentRoute()->getName(),[getItemId($item),"type"=>"jsonEditor"])}}">ویرایش با Json Editor</a>
                @endif
            </div>
            <div class="card-body">
                <div class="row">
                    <form class="w-100 h-100" method="post" id="json-from"
                          action="{{route(getCurrentStructure('route_name')."_edit_submit",[getItemId($item)])}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input style="display: none;" name="json">

                            @if(getProperty($_GET,"type")=="jsonEditor")
                                <div style="direction: ltr;min-height: 50rem"  id="jsoneditor" ></div>
                            @else
                                <div id="editor_holder">
                                </div>
                            @endif

                        </div>
                        <div class="col-12 mt-3">
                            <a id="from-submit-btn" class="btn btn-lg btn-info">ثبت اطلاعات</a>
                            <a href="{{route(getCurrentStructure('route_name'))}}"
                               class="btn btn-lg btn-danger">انصراف</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@section('main_footer')

    @if(getProperty($_GET,"type")=="jsonEditor")


        <script>
            // create the editor
            const container = document.getElementById("jsoneditor")
            const options = {
                mode: 'tree',
                modes: ['code', 'form', 'text', 'tree', 'view', 'preview'], // allowed modes
            }
            const editor = new JSONEditor(container, options)
            // set json
            const initialJson = {!! json_encode($data , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE) !!}
            editor.set(initialJson)
            // get json
            $("#from-submit-btn").click(function () {
                const errors = editor.validate();
                if (errors.length) {
                    toastr.error("خطایی رخ داده است");
                } else {
                    $("#json-from input[name='json']").val(JSON.stringify(editor.get()))
                    $("#json-from").submit()
                }
            })
        </script>

    @else
        <script src="/adminAssets/js/jsoneditor_fa.js"></script>
        <script>
            const element = document.getElementById('editor_holder');
            const editor = new JSONEditor(element, {
                schema: {!! json_encode($structure , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE) !!},
                theme: 'bootstrap4',
                disable_properties: true,
                disable_edit_json: true,
                disable_collapse: true,
            });

            editor.on('ready', () => {
                editor.setValue({!! json_encode($data , JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE) !!});
            });

            $("#from-submit-btn").click(function () {
                const errors = editor.validate();
                if (errors.length) {
                    toastr.error("خطایی رخ داده است");
                } else {
                    $("#json-from input[name='json']").val(JSON.stringify(editor.getValue()))
                    $("#json-from").submit()
                }
            })
        </script>
    @endif





@endsection
