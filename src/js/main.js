$('.header__menu').click(function(){
    $('.header__menu').toggleClass('is-open');
    $('.navigation').toggleClass('is-open');
    $('main').toggleClass('is-hidden');
});

// $('.footer__brand > p').flowtype({
//     minimum   : 481,
//     maximum   : 2560,
//     minFont   : 16,
//     maxFont   : 32
// });