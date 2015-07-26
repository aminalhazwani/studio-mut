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

var random = Math.floor(Math.random() * 1000);
var $heading = $("footer h2");
$heading.eq(random % $heading.length).addClass("u-blk");

jQuery(".fit").fitText();