var mn = $(".nav");
var mns = "nav-scrolled";
var hdr = $('.header-primary').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
    $('main').addClass('nav-is-fixed');
  } else {
    mn.removeClass(mns);
    $('main').removeClass('nav-is-fixed');
  }
});

jQuery(".fit").fitText();