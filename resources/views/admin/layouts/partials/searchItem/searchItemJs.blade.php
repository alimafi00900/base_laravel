<script>
    ////////////////////
    $("#{{$itemName}}-selector #search-btn").click(function (e) {
        {{$itemName}}Search()
    })
    $("#{{$itemName}}-selector #clear-btn").click(function (e) {
        $("#{{$itemName}}-selector input").val("")
        {{$itemName}}Search("")
    })
    $(document).ready(function () {
        {{$itemName}}Search("")
    })
    $("#{{$itemName}}-selector #{{$itemName}}-name").keyup(function (e) {
        if (e.keyCode == 13) {
            {{$itemName}}Search()
        }
    })

    function unset{{ucfirst($itemName)}}GroupItemSelect() {
        $("#{{$itemName}}-selector .list-group .list-group-item").each(function (index, item) {
            $(item).removeClass("active")
        })
    }

    function {{$itemName}}ItemSelect(object, id) {
        unset{{ucfirst($itemName)}}GroupItemSelect()
        $("#form-add-submit [name='{{$itemName}}Id']").val(id)
        $("#{{$itemName}}-id").val(id)
        $("#{{$itemName}}-selector #{{$itemName}}-name").val($(object).text())
        $(object).addClass("active")
    }

    let {{$itemName}}SearchStatus = true

    function {{$itemName}}Search(searchVal=null) {
        if ({{$itemName}}SearchStatus == true) {
            {{$itemName}}SearchStatus = false
            if(searchVal==null){
                searchVal=$("#{{$itemName}}-selector #{{$itemName}}-name").val()
            }
            $("#{{$itemName}}-selector #search-dropdown-loading").css("display","flex")
            $("#{{$itemName}}-selector .list-group").empty()
            $.ajax({
                url: '{{$itemUrl}}',
                type: 'POST',
                data: {
                    search: searchVal,
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.success == 0) {
                        let listItems = data.listItems
                        for (Item in listItems) {
                            let out = '<li class="list-group-item " id="item-id-' + Item + '" onclick="{{$itemName}}ItemSelect(this,' + Item + ')">' + Item + '. ' + listItems[Item].name + '</li>'
                            $("#{{$itemName}}-selector .list-group").append(out)
                        }
                        if (listItems.length == 0) {
                            $("#{{$itemName}}-selector .list-group").append("<li class='list-group-item '>نتیجه ای یافت نشد</li>")
                        }
                    }
                }
                , complete: function () {
                    {{$itemName}}SearchStatus = true
                    $("#{{$itemName}}-selector #search-dropdown-loading").css("display","none")
                }

            })
        }
    }

    ////////////////

</script>
