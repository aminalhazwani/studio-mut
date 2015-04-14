$('.header__menu').click(function toogleMenu(){
    if ( $('.header__menu').hasClass('is-open') )  {
        $('.header__menu').removeClass('is-open');
        $('.nav').removeClass('is-open');
        $('.about').removeClass('is-hidden');
        $('.home__wrapper').removeClass('is-hidden');
        $('.home').removeClass('is-hidden');
    }
    else {
        $('.header__menu').addClass('is-open');
        $('.nav').addClass('is-open');
        setTimeout(function() {
            $('.about').addClass('is-hidden');
            $('.home').addClass('is-hidden');
            $('.home__wrapper').addClass('is-hidden');
        }, 500);
    }
});

$('.nav__links').find('a').click(function(){
    $('.header__menu').removeClass('is-open');
    $('.nav').removeClass('is-open');
    $('.about').removeClass('is-hidden');
    $('.home__wrapper').removeClass('is-hidden');
    $('.home').removeClass('is-hidden');
});

$('.nav__tags').find('a').click(function(){
    $('.header__menu').removeClass('is-open');
    $('.nav').removeClass('is-open');
    $('.about').removeClass('is-hidden');
    $('.home__wrapper').removeClass('is-hidden');
    $('.home').removeClass('is-hidden');
});

$('.nav__tags').find('button').click(function(){
    $('.header__menu').removeClass('is-open');
    $('.nav').removeClass('is-open');
    $('.about').removeClass('is-hidden');
    $('.home__wrapper').removeClass('is-hidden');
    $('.home').removeClass('is-hidden');
});

$('.nav').flowtype({
    minimum   : 481,
    maximum   : 2560,
    minFont   : 24,
    maxFont   : 60
});

// $(function() {
//   $('a[href*=#]:not([href=#])').click(function() {
//     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//       if (target.length) {
//         $('.about__wrapper').animate({
//           scrollTop: target.offset().top
//         }, 1000);
//         return false;
//       }
//     }
//   });
// });

