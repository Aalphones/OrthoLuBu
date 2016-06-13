function kenBurns() {
    var width = $(document).width();
    if (width <= 600) {
        $('.ken-burns').attr("src","img/header_small.jpg");
    } else if (width <= 992) {
        $('.ken-burns').attr("src","img/header_medium.jpg");
    } else {
        $('.ken-burns').attr("src","img/header_large.jpg");
    }
    $('.ken-burns').width(width+100);
}

$(document).ready(function () {
    kenBurns();
    
    $(".button-collapse").sideNav();
    $('.ken-burns').addClass('zoomed');
});

$(window).resize(function() {
    kenBurns();
});