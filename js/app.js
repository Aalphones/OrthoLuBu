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

function select() {
    $('.select a').click(function(e) {
        if ($(this).hasClass('active')) {
            $('.select-content').removeClass('active');
            $('.select a').removeClass('active');
        } else {
            $('.select-content').removeClass('active');
            $('.select a').removeClass('active');
            e.preventDefault();
            $(this).addClass('active');
            var id = $(this).attr('href');
            $(id).addClass('active');
        }
    });
}

$(document).ready(function () {
    init();
    select();
});