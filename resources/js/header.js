$(window).scroll(function() {
    if ($(this).scrollTop() > 250) {
        $('header').addClass('sticky');
    } else {
        $('header').removeClass('sticky');
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 250) {
        $('.header__logo').addClass('sticky');
    } else {
        $('.header__logo').removeClass('sticky');
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 250) {
        $('.header__nav-item').addClass('sticky');
    } else {
        $('.header__nav-item').removeClass('sticky');
    }
});
