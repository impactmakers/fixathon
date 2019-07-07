$(window).scroll(function() {
    if ($(this).scrollTop() > 150) {
        $('header').addClass('sticky');
    } else {
        $('header').removeClass('sticky');
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 150) {
        $('.header__logo').addClass('sticky');
    } else {
        $('.header__logo').removeClass('sticky');
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 150) {
        $('.header__nav-item').addClass('sticky');
    } else {
        $('.header__nav-item').removeClass('sticky');
    }
});

$(window).scroll(function() {
    if ($(this).scrollTop() > 150) {
        $('.intro__container').addClass('sticky');
    } else {
        $('.intro__container').removeClass('sticky');
    }
});
