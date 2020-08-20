$(function(){

    var sider_width = $("#sider").css("width");
    var current_width = sider_width;
    var i = 1;

    $("#toggler").click(function() {

        if(current_width != 0) {
            current_width = 0;
            $("#sider").animate({width:  current_width},400, function() {
                $("#sider").css({"display" : "none"});
            });
        }
        else {
            current_width = sider_width;
            $("#sider").animate({width:  current_width},400).css({"display" : "grid"});
        }


         // $("#toggler").toggleClass('rotated');
        // $("#toggler").animate(90);

        $("#toggler").css({
            "transform" : 'rotate(' + (90*(i++)) + 'deg)',
            "transition-duration" : '0.4s'}

    );








    });
});