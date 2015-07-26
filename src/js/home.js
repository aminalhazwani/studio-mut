$(window).on("scroll resize", function() {
  var mn = $(".nav");
  var mns = "nav-scrolled";
  var hdr = $('.header-primary').height();
  
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
    $('main').addClass('nav-is-fixed');
  } else {
    mn.removeClass(mns);
    $('main').removeClass('nav-is-fixed');
  }
});

jQuery(".fit").fitText();