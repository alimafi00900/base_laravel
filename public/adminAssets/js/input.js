$("button[type='submit']").click(function () {
    $("input:required").each(function () {
        if($(this).val()==""){
            if($(this).attr('file-type')=="img"){
                $(this).parents('.box').addClass('empty-warning')
            }
            $(this).addClass('empty-warning')
        }
    })
    $("textarea:required").each(function () {
        if($(this).val()==""){
            $(this).addClass('empty-warning')
        }
    })
})
$('input:required').change(function (){
    if($(this).val()==""){
        $(this).addClass('empty-warning')
        if($(this).attr('file-type')=="img"){
            $(this).parents('.box').addClass('empty-warning')
        }
    }else{
        $(this).removeClass('empty-warning')
        if($(this).attr('file-type')=="img"){
            $(this).parents('.box').removeClass('empty-warning')
        }
    }
})

$('textarea:required').change(function (){
    if($(this).val()==""){
        $(this).addClass('empty-warning')
    }else{
        $(this).removeClass('empty-warning')
    }
})
