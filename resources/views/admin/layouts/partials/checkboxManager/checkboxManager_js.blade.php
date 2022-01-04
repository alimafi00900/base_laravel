<script>
    function get{{$checkboxName}}() {
        $("#{{$checkboxName}}-checkbox-loading-loading").css("display", "flex")
        $.ajax({
            url: '{{$url}}',
            type: 'GET',
            data: {
                action: 'all',
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.success == 0) {
                    $("#{{$checkboxName}}-checkbox-loading-loading").css("display", "none")
                    $("#{{$checkboxName}}-list-checkboxes").empty()
                    let listItems = data.listItems
                    for (item in listItems) {
                        let checkboxItem = $("#{{$checkboxName}}-checkbox-component .{{$checkboxName}}-checkbox-item").clone()
                        $(checkboxItem).find(".{{$checkboxName}}-checkbox-title").text(listItems[item])
                        $(checkboxItem).find(".{{$checkboxName}}-checkbox-check-input").val(listItems[item])
                        if($("[name='{{$checkboxName}}']").val().toString().includes(listItems[item])){
                            $(checkboxItem).find(".{{$checkboxName}}-checkbox-check-input").attr("checked","checked")
                        }
                        $(checkboxItem).find(".{{$checkboxName}}-checkbox-delete-btn").attr('onclick', "delete{{$checkboxName}}items(" + item + ",'"+listItems[item]+"')")
                        $("#{{$checkboxName}}-list-checkboxes").prepend(checkboxItem)
                    }
                }
                if ("msg" in data) {
                    toastr.success(data.msg);
                } else if ("errMsg" in data) {
                }

            },
            error: function (data) {
                let errors = data.responseJSON.errors;
                for (error in errors) {
                    toastr.error(errors[error][0]);

                }
            }
            ,
            complete: function () {

            }
        });
    }

    function update{{$checkboxName}}() {
        if ($("#{{$checkboxName}}-checkbox-text-input").val() == '') {
            return
        }
        $("#{{$checkboxName}}-checkbox-loading-loading").css("display", "flex")

        $.ajax({
            url: '{{$url}}',
            type: 'GET',
            data: {
                action: 'update',
                value: $("#{{$checkboxName}}-checkbox-text-input").val()
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.success == 0) {
                    updateCheckboxes()
                    get{{$checkboxName}}();
                    $("#{{$checkboxName}}-checkbox-loading-loading").css("display", "none")
                    $("#{{$checkboxName}}-checkbox-text-input").val("")
                }
                if ("msg" in data) {
                    toastr.success(data.msg);
                } else if ("errMsg" in data) {
                }

            },
            error: function (data) {
                let errors = data.responseJSON.errors;
                for (error in errors) {
                    toastr.error(errors[error][0]);

                }
            }
            ,
            complete: function () {

            }
        });
    }

    function delete{{$checkboxName}}items(index,value) {
        $("#{{$checkboxName}}-checkbox-loading-loading").css("display", "flex")
        $.ajax({
            url: '{{$url}}',
            type: 'GET',
            data: {
                action: 'delete',
                index: index,
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.success == 0) {
                    $("[name='{{$checkboxName}}']").val($("[name='{{$checkboxName}}']").val().toString().replace(value,""))
                    $("[name='{{$checkboxName}}']").val($("[name='{{$checkboxName}}']").val().toString().replace(',,',""))
                    get{{$checkboxName}}();
                    $("#{{$checkboxName}}-checkbox-loading-loading").css("display", "none")
                    $("#{{$checkboxName}}-checkbox-text-input").val("")
                }
                if ("msg" in data) {
                    toastr.success(data.msg);
                } else if ("errMsg" in data) {
                }

            },
            error: function (data) {
                let errors = data.responseJSON.errors;
                for (error in errors) {
                    toastr.error(errors[error][0]);

                }
            }
            ,
            complete: function () {

            }
        });
    }
    function updateCheckboxes(){
        let out=''
        console.log('');
        $(".{{$checkboxName}}-checkbox-check-input:checked").each(function (){
            console.log($(this).val());
            out+=$(this).val()+','
        })
        $("[name='{{$checkboxName}}']").val(out)
    }
    $(document).on("change", ".{{$checkboxName}}-checkbox-check-input", function () {
        updateCheckboxes()
    })

    $("#{{$checkboxName}}-checkbox-add-btn").click(function () {
        update{{$checkboxName}}()
    })
    $(document).ready(function () {
        get{{$checkboxName}}();
    });


</script>