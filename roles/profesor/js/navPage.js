$(document).ready(function(){
    // Click event controller
    $(".load-content").on("click",function(event){
        event.preventDefault();

        let page = $(this).data("page");

        $.ajax({
            url: page,
            method: "GET",
            success: function(response){
                $("#main-content").html(response);
            },
            error: function(){
                $("#main-content").html("<p>Error al cargar la página. Intente de nuevo</p>");
            }
        });
    });
});
