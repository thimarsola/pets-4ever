$(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop()) {
            $('header.header').addClass('p-fixed');
        } else {
            $('header.header').removeClass('p-fixed');
        }
    });
});