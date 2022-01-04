<form action="{{route($multiple_delete_route)}}" id="delete-items" method="post">
    @csrf
    <input name="listItems">
</form>
<script>
    /////////////////
    $("#select-multiple-item").click(function(){
        $("table .select-items").each(function (index, item) {
            $(item).css("display", "");
        })
        $("table .select-items input").each(function (index, item) {
            $(item).prop('checked', false);
        })

        $("#select-multiple-item").css("display",'none')
        $("#cancel-multiple-item").css("display",'')
        $("#delete-multiple-item").css("display",'')

    })

    $("#cancel-multiple-item").click(function(){
        $("table .select-items").each(function (index, item) {
            $(item).css("display", "none");

        })
        $("table .select-items input").each(function (index, item) {
            $(item).prop('checked', false);
        })

        $("#select-multiple-item").css("display",'')
        $("#cancel-multiple-item").css("display",'none')
        $("#delete-multiple-item").css("display",'none')

    })
    $("#delete-multiple-item").click(function(){
        listItems=[];
        $("table .select-items input").each(function (index, item) {
            if($(item).prop("checked")==true){
                let itemId= $(item).attr("id").toString().split("item-id-")[1];
                listItems.push(itemId)
            }
        })
        if(listItems.length==0){
            toster.error("موردی انتخاب نشده است","خطا")
            return ;
        }
        if(confirm("ایا مایل به حدف موارد انتخاب شده هستید؟")!=true){
            return;
        }
        JSON.stringify(listItems).toString()
        $("#delete-items [name='listItems']").val(JSON.stringify(listItems).toString())
        $("#delete-items").submit()
    })
    ////////////
</script>