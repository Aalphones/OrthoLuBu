function kenBurns() {
    var width = $(document).width();
    var uri = $('#uri').text();
    if (width <= 600) {
        $('#default-header').attr("src",uri + "/img/header_small.jpg");
    } else if (width <= 992) {
        $('#default-header').attr("src",uri + "/img/header_medium.jpg");
    } else {
        $('#default-header').attr("src",uri + "/img/header_large.jpg");
    }
    $('.ken-burns').width(width+400);
}

function overlay() {
    var nav = $('nav');
    var scrollPosition = $(document).scrollTop();
    console.log(scrollPosition / nav.offset().top);
    if (scrollPosition != 0.0) {
        if (scrollPosition > $('#page-header').height() - nav.height() ) {
            $(nav).addClass("fixed");
        } else {
            $('.ken-burns').css("opacity", 1.0 - (scrollPosition/nav.offset().top));
            $(nav).removeClass("fixed");
        }
    }
}

$(document).ready(function () {
    kenBurns();
    overlay();
    
    $(".button-collapse").sideNav();
    $('.ken-burns').addClass('zoomed');
    
    $(this).scroll(function() {
        overlay();
    });
});

$(window).resize(function() {
    kenBurns();
});