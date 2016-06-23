function init() {
    $('.slider').slider({
        full_width: true,
        indicators: false,
        interval: 6000,
        transition: 500
    });

    $(".button-collapse").sideNav();
}

function toTop() {
    var body = $("html, body");
    body.stop().animate({scrollTop: 0}, '500', 'swing');
}

$(document).ready(function () {
    init();
});