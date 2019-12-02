$(document).ready(function(){
    $.ajax({
        url: ruta,
        headers: {'X-CSRF-TOKEN': token},
        type: 'GET'
    })
    .done(function(data) {
        console.log("success");
    })

    .fail(function() {
        console.log("error");
    });
});