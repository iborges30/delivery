$(function () {
    $(".jsc-accept").click(function () {
        $(".jsc-request").fadeOut("fast", function (){
            $(".jsc-delivery-in-ride").fadeIn("fast");
        });
        return false;
    });
});