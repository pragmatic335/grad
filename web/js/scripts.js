$(function(){
    $("#toggler").click(function() {
        $("#sider").animate({
            width: 'toggle'
        });

         $(this).toggleClass('rotated');


    });
});