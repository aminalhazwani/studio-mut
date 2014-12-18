$('.header__menu').click(function(){
    $('.header__menu').toggleClass('is-open');
    $('.nav').toggleClass('is-open');
    $('.about').toggleClass('is-hidden');
    $('.home').toggleClass('is-hidden');
});

$('.nav__links').find('a').click(function(){
    $('.header__menu').removeClass('is-open');
    $('.nav').toggleClass('is-open');
    $('.about').toggleClass('is-hidden');
    $('.home').toggleClass('is-hidden');
});

$('.nav__tags').find('a').click(function(){
    $('.header__menu').removeClass('is-open');
    $('.nav').toggleClass('is-open');
    $('.about').toggleClass('is-hidden');
    $('.home').toggleClass('is-hidden');
});

$('.nav').flowtype({
    minimum   : 481,
    maximum   : 2560,
    minFont   : 24,
    maxFont   : 60
});

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('.about__wrapper').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

