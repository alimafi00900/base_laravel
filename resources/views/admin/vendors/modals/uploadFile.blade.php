<div class="modal fade text-left" id="uploadFile" tabindex="-1" role="dialog"
     aria-labelledby="uploadFile" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
         role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">اپلود عکس</h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                    <i class="text-light" data-feather="x"></i>
                </button>
            </div>
            <form action="#">
                <div id="form-upload-file" class="modal-body">
                    <label>فایل</label>
                    <div class="form-group">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <label>لینک</label>
                    <div class="form-group">
                    <input class="form-control mt-3" style="direction: ltr"  type="text" id="link-text">
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-success d-j text-light d-none"  id="link-copy" >کپی لینک</a>

                    <button id="form-upload-file-reset" onclick="" type="button"
                            class="btn btn-primary d-none">
                        <span class="d-sm-block">ارسال مجدد</span>
                    </button>
                    <button class="btn btn-primary d-none" id="form-upload-file-wait" type="button">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        درحال ارسال
                    </button>
                    <button id="form-upload-file-send" type="button" class="btn btn-primary">
                        <span class="d-sm-block">ارسال</span>
                    </button>
                    <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                        <span class="d-block">انصراف</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $("#uploadFile #form-upload-file-send").click(function () {
        var formData = new FormData();
        var imageFile = document.querySelector('#uploadFile #formFile');
        $("#uploadFile #form-upload-file-wait").removeClass('d-none')
        formData.append("file", imageFile.files[0]);
        axios.post('{{route("admin.fileManager_add_post_api")}}', formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        }).then(function (response) {
            $("#uploadFile #form-upload-file-wait").addClass('d-none')
            completeUploadFile(response.data['path'])
        }).catch(function (error) {
            $("#uploadFile #form-upload-file-wait").addClass('d-none')
        });
    })
    //
    $("#uploadFile #link-copy").click(function () {
        $("#uploadFile #link-text").select()
        document.execCommand("copy");
        toastr.success('لینک با موفقیت کپی شد ')
    })

    function completeUploadFile(path) {
        //////////
        $("#uploadFile #link-copy").removeClass('d-none')
        $("#uploadFile #link-text").val(path)
        //////////
        $("#uploadFile #form-upload-file-wait").addClass('d-none')
        $("#uploadFile #form-upload-file-send").addClass('d-none')
        $("#uploadFile #form-upload-file-reset").removeClass('d-none')
    }
    $('#uploadFile #formFile').change(function (){
        resetUploadFile()
    })
    $("#uploadFile #form-upload-file-reset").click(function (){
        $('#uploadFile #formFile').val('')
        resetUploadFile()
    })
    function resetUploadFile() {
        $("#uploadFile #link-copy").addClass('d-none')
        $("#uploadFile #link-text").val('')
        $("#uploadFile #form-upload-file-wait").addClass('d-none')
        $("#uploadFile #form-upload-file-send").removeClass('d-none')
        $("#uploadFile #form-upload-file-reset").addClass('d-none')
    }

</script>
