$("#state").change(function(event){
    $.get("ciudades/"+event.target.value+"", function(response, state){
        $("#cities").empty();
        for (let index = 0; index < response.length; index++) {
            $("#cities").append("<option value='"+response[i].id+"'>"+response[i].name)

        }
    })
})