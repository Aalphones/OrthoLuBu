$(document).ready(function () {
    var width = $(document).width();
    if (width <= 600) {
        $('.ken-burns').attr("src","img/header_small.jpg");
    } else if (width <= 992) {
        $('.ken-burns').attr("src","img/header_medium.jpg");
    }
    $('.ken-burns').width(width+100);
    
    $(".button-collapse").sideNav();
    $('.ken-burns').addClass('zoomed');
});