$(document).ready(function (){
    $(".cookie-img").on("click", function () {
       $(this).parent().append("<img src=\"../assets/cookie.png\" alt=\"Cookie\" class=\"cookie-img\">");
    });
});